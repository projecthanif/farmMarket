<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
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
        // $shipping_fee = 1000;
        $cart = $request->session()->get('cart', []);
        $totalCartPrice = $this->calculateTotalCartPrice($cart);
        $shipping_price = ShippingPrice::all();

        return view('shop.checkout', compact('cart', 'totalCartPrice', 'shipping_price'));
    }

    public function process(Request $request)
    {

        try {
            // Check if the user is logged in
            if (!Auth::check()) {
                return redirect()->route('user.login')->with('error', 'You must be logged in to complete the checkout.');
            }

            // Validate the request data (you might want to add more validation rules)
            // $request->validate([
            //     'fullname' => 'required|string|max:255',
            //     'address' => 'required|string|max:255',
            //     'state' => 'required|string',
            //     'city' => 'required|string',
            //     'phone' => 'required|numeric',
            // ]);

            $fullname = $request->input('fullname');
            // $address = $request->input('address');
            // $state = $request->input('state');
            // $city = $request->input('city');
            // $phone = $request->input('phone');

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

            if ($request->payment == 'paystack') {
            }

            foreach ($cartItems as $item) {

                $orderItem = new orders();
                $orderItem->user_id = Auth::id();
                $orderItem->order_id = mt_rand(100000, 999999);
                $orderItem->prod_id = $item['product_id'];
                $orderItem->qty = $item['quantity'];
                $orderItem->order_status = 'completed';
                $orderItem->track_order = '1';
                $orderItem->payment_status = 'paid';
                $orderItem->is_rated = '1';
                $orderItem->save();
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

    public function getShippingPrice($location)
    {
        $shippingPrice = ShippingPrice::where('state', $location)->first();

        return response()->json(['price' => $shippingPrice->price]);
    }

    public function thankyou()
    {
        return view('shop.thankyou');
    }
}
