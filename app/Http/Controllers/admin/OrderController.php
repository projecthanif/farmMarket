<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OrderController extends Controller
{
    public function orders()
    {
        Session::put('page', 'orders');

        $orders = orders::with(['product', 'user', 'addresses'])->orderBy('created_at', 'desc')->get();
        // $orders = orders::with(['product', 'user'])->latest()->get();

        // $order = orders::get();
        // dd($orders->toArray()
        $orders = $orders->toArray();
        // dd($orders);
        // echo "<pre>";print_r($orders);die;

        // return view('admin.orders')->with(compact('orders'));
        return view('admin.orders', [
            // 'orders' => [...$orders]
            'orders' => $orders
        ]);
    }

    public function cart()
    {
        Session::put('page', 'cart');

        $cart = Cart::with(['product', 'user', 'addresses'])->get();
        return view('admin.cart')->with(compact('cart'));
    }

    public function sales()
    {
        $sales = orders::where('payment_status', 'paid')->get();
        return response()->json(['sales' => $sales]);
    }

    public function updatePaymentStatus(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();

            if ($data['status'] == "paid") {
                $status = 'unpaid';
            } else {
                $status = 'paid';
            }
            orders::where('id', $data['order_id'])->update(['payment_status' => $status]);
            return response()->json(['status' => $status, 'order_id' => $data['order_id']]);
        }
    }

    public function updateOrderStatus(Request $request, $id)
    {
        $data = $request->all();

        $status = $data['order_status'];
        orders::where('id', $id)->update(['track_order' => $status]);

        if ($status == '4') {
            orders::where('id', $id)->update(['order_status' => 'completed']);
        }

        $message = "Status updated";
        Session::flash('Success_message', $message);
        return redirect()->back();
    }
}
