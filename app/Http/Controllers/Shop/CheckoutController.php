<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\addresses;
use App\Models\orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $shipping_fee = 1000;
        $cart = $request->session()->get('cart', []);
        $totalCartPrice = $this->calculateTotalCartPrice($cart);

        return view('shop.checkout', compact('cart', 'totalCartPrice', 'shipping_fee'));
    }

    public function process(Request $request)
    {

        // Check if the user is logged in
        if (!Auth::check()) {
            return redirect()->route('user.login')->with('error', 'You must be logged in to complete the checkout.');
        }


        // Validate the request data (you might want to add more validation rules)
        $request->validate([
            'fullname' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'state' => 'required|string',
            'city' => 'required|string',
            'phone' => 'required|numeric',
            // Add more fields as needed
        ]);

        // Process the order payment

        // shipping address

        // Create an order
        $order = new addresses();
        // Disable timestamps
        $order->timestamps = false;

        $order->user_id = Auth::id();
        $order->fullname = $request->input('fullname');
        $order->address = $request->input('address');
        $order->state = $request->input('state');
        $order->city = $request->input('city');
        $order->phone = $request->input('phone');
        $order->isPrimary = 1;
        $order->save();

        $cartItems = $request->session()->get('cart', []);

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

        return redirect()->route('user.order')->with('success', 'Checkout successful!');
    }

    private function calculateTotalCartPrice($cart)
    {
        $totalCartPrice = 0;

        foreach ($cart as $item) {
            $totalCartPrice += $item['itemTotalPrice'];
        }

        return $totalCartPrice;
    }
}
