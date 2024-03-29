<?php

namespace App\Http\Controllers\Shop;

use App\Models\orders;
use App\Jobs\SendEmail;
use App\Models\addresses;
use App\Events\PaymentMade;
use Illuminate\Support\Str;
use Hamcrest\Arrays\IsArray;
use Illuminate\Http\Request;
use App\Models\ShippingPrice;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    private $grand_total;

    public function index(Request $request)
    {
        $user = auth()->user();
        $addressExist = addresses::where('user_id', $user->id ?? '')->exists();
        if (!$addressExist) {
            return redirect()->route('user.edit')->with('message', 'Please update your profile with your address.');
        }
        // dd(addresses::get()->where('user_id', \App\Models\User::find(1)->id));
        // dd($request);
        $cart = $request->session()->get('cart', []);
        // dd($cart);
        $totalCartPrice = $this->calculateTotalCartPrice($cart);
        // $shipping_price = ShippingPrice::all();
        $shipping_price = DB::table('lagos_shipping')->get();

        // Retrieve the selected location from the session
        // $selectedLocation = $request->session()->get('selectedLocation');
        $selectedLocation = addresses::where('user_id', auth()->user()->id)->get();
        $selectedLocation = $selectedLocation[0]->city;
        // dd($selectedLocation[0]->city);

        // Use $selectedLocation to calculate the shipping price
        $shippingPrice = $this->getShippingPrice($selectedLocation);

        // Calculate the final price
        $finalPrice = $shippingPrice + $totalCartPrice;

        $pageTitle = "Checkout Page";
        $pageDescription = "Checkout Page";


        return view('shop.checkout', compact('cart', 'totalCartPrice', 'shipping_price', 'finalPrice', 'shippingPrice', 'pageTitle', 'pageDescription'));
    }

    // callback from the webhook

    // public function callBack(Request $request)
    // {
    //     // dd($request->json());
    //     if (!$request->isMethod('POST') || !$request->header('x-paystack-signature')) {
    //         abort(400, 'invalid request');
    //     }

    //     // Retrieve the request's body and parse it as JSON
    //     $input = file_get_contents("php://input");

    //     $event = json_decode($input);

    //     if (isset($event)) {
    //         $email = $event->data->customer->email;

    //         if ($event->event  === 'charge.success') {

    //             // Trigger the PaymentMade event
    //             // event(new PaymentMade($event->data));
    //             $filename = 'paystackpayment_success' . time() . '.txt';
    //             $details = 'payment sucessfull' . PHP_EOL;

    //             foreach ($event as $key => $value) {
    //                 if (is_object($value) || is_array($value)) {
    //                     $value = json_encode($value, JSON_PRETTY_PRINT);

    //                     $details .= "$key: $value";
    //                 }
    //             }

    //             file_put_contents($filename, $details);
    //         }
    //     }
    // }

    public function process(Request $request)
    {
        try {
            // Check if the user is logged in
            if (!Auth::check()) {
                return redirect()->route('user.login')->with('error', 'You must be logged in to complete the checkout.');
            }

            $shipping_charge = $this->getShippingPrice($request->input('city'));
            $cart = $request->session()->get('cart', []);
            $totalCartPrice = $this->calculateTotalCartPrice($cart);

            $this->grand_total = $totalCartPrice + $shipping_charge;

            addresses::updateorInsert(
                ['user_id' => Auth::user()->id],
                [
                    'fullname' => $request->input('fullname'),
                    'address' => $request->input('address'),
                    'state' => $request->input('state'),
                    'city' => $request->input('city'),
                    'phone' => $request->input('phone'),
                    'isPrimary' => 1
                ]
            );

            $cartItems = $request->session()->get('cart', []);

            // session()->put('order_number', $order_number);
            session()->put('shipping_charge', $shipping_charge);
            session()->put('grand_total', $this->grand_total);

            $finalPrice = session()->get('grand_total', $this->grand_total);
            $shipping_charge = session()->get('shipping_charge', $shipping_charge);


            foreach ($cartItems as $item) {

                $orderItem = new orders();
                $orderItem->user_id = Auth::id();
                $orderItem->order_id = mt_rand(100000, 999999);
                $orderItem->prod_id = $item['product_id'];
                $orderItem->qty = $item['quantity'];
                $orderItem->order_status = 'completed';
                $orderItem->track_order = '1';
                $orderItem->payment_status = 'paid';
                $orderItem->is_rated = '0';
                $orderItem->save();
            };

            // Send email to user
            $replyToEmail = 'admin@farmersmarketplace.ng';
            $userEmail = auth()->user()->email;
            $subject = 'Order Placed';
            $body = "<h1>Hi " . auth()->user()->firstname . ",</h1>
                          <p>Your Your Order has been placed successfully.</p>
                          <p>Your order is currently being processed, and you will receive a confirmation email once it has been shipped.</p>

                          <br>

                          <h3>Order Details:</h3>

                            <table>
                                <tr>
                                    <th>Item</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>";

            foreach ($cartItems as $item) {
                $body .= "<tr>
                                        <td>{$item['name']}</td>
                                        <td>{$item['quantity']}</td>
                                        <td>{$item['price']}</td>
                                        <td>{$item['itemTotalPrice']}</td>
                                    </tr>";
            }

            $body .= "<tr>
                                    <td colspan='3'>Subtotal:</td>
                                    <td>" . $totalCartPrice . "</td>
                                </tr>
                                <tr>
                                    <td colspan='3'>Shipping:</td>
                                    <td>" . $shipping_charge . "</td>
                                </tr>

                                <tr>
                                    <td colspan='3'><strong>Order Total:</strong></td>
                                    <td><strong>" . $finalPrice . "</strong></td>
                                </tr>
                            </table>


                          <p>Thank you once again for choosing <a href='https://farmersmarketplace.ng/'></a>. We appreciate your business!</p>
                          <br>";

            try {
                dispatch(new SendEmail($userEmail, $body, $subject, $replyToEmail));
            } catch (\Exception $ex) {
            }

            // Unset or clear the 'cart' session variable
            Session::forget('cart');
            Session::forget('cartCount');

            return redirect()->route('checkout.thankyou')->with('success', 'Your order has been placed successfully!');
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    private function calculateTotalCartPrice($cart)
    {
        $totalCartPrice = 0;

        foreach ($cart as $item) {
            $totalCartPrice += $item['itemTotalPrice'];
        }

        return $totalCartPrice;
    }

    private function getShippingPrice($location)
    {
        // $shippingPrice = ShippingPrice::where('state', $location)->first();
        // return response()->json(['price' => $shippingPrice->price]);


        $shippingPrice = 0;
        if ($location != null) {
            // $shippingPriceData = ShippingPrice::where('state', $location)->first();
            $shippingPriceData = DB::table('lagos_shipping')->where('city', $location)->first();

            if (!is_null($shippingPriceData)) {
                $shippingPrice = $shippingPriceData->cost;
            }
        }
        // return response()->json(['price' => $shippingPrice]);
        return $shippingPrice;
    }

    public function setLocation(Request $request)
    {
        // Retrieve the data from the request
        $location = $request->input('selectedLocation');
        Session::put('selectedLocation', $location);

        $user = addresses::where('user_id', auth()->user()->id)->update(['city' => $location]);
        // $shippingPriceData = ShippingPrice::where('state', $location)->value('price');
        $shippingPriceData = DB::table('lagos_shipping')->where('city', $location)->value('cost');

        $cart = $request->session()->get('cart', []);
        $totalCartPrice = $this->calculateTotalCartPrice($cart);

        $selectedLocation = $request->session()->get('selectedLocation');
        $shippingPrice = $this->getShippingPrice($selectedLocation);

        // Calculate the final price
        $finalPrice = $shippingPrice + $totalCartPrice;
        return response()->json([
            'price' => $shippingPriceData,
            'totalCartPrice' => $finalPrice,
        ]);

        // return response()->json(['success' => true])->withCookie(cookie('laravel_session', session()->getId(), 60, '/', null, false, false));

    }

    public function thankyou()
    {
        $pageTitle = "Thank Page";
        $pageDescription = "Thank Page";
        return view('shop.thankyou', compact('pageTitle', 'pageDescription'));
    }
}
