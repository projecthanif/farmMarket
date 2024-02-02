<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;
use App\Models\addresses;
use App\Models\orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\ShippingPrice;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    private $grand_total;

    public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        $totalCartPrice = $this->calculateTotalCartPrice($cart);
        $shipping_price = ShippingPrice::all();

        // Retrieve the selected location from the session
        $selectedLocation = $request->session()->get('selectedLocation');

        // Use $selectedLocation to calculate the shipping price
        $shippingPrice = $this->getShippingPrice($selectedLocation);

        // Calculate the final price
        $finalPrice = $shippingPrice + $totalCartPrice;

        // foreach ($cart as $item) {
        //     dd($item['name']);
        // }
        // dd($cart);

        return view('shop.checkout', compact('cart', 'totalCartPrice', 'shipping_price', 'finalPrice', 'shippingPrice'));
    }

    public function process(Request $request)
    {

        try {
            // Check if the user is logged in
            if (!Auth::check()) {
                return redirect()->route('user.login')->with('error', 'You must be logged in to complete the checkout.');
            }

            $shipping_charge = delivery_charge($request->input('state'));
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

            // if payment is successful

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

            // send email to user

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
                                    <td>".$totalCartPrice."</td>
                                </tr>
                                <tr>
                                    <td colspan='3'>Shipping:</td>
                                    <td>".$shipping_charge."</td>
                                </tr>

                                <tr>
                                    <td colspan='3'><strong>Order Total:</strong></td>
                                    <td><strong>".$finalPrice."</strong></td>
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

            return redirect()->route('user.order')->with('success', 'Your order has been placed successfully!');
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
            $shippingPriceData = ShippingPrice::where('state', $location)->first();
            if (!is_null($shippingPriceData)) {
                $shippingPrice = $shippingPriceData->price;
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
        $shippingPriceData = ShippingPrice::where('state', $location)->value('price');

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
        return view('shop.thankyou');
    }
}
