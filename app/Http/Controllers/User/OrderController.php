<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // dd(auth()->user()->orders);
        $pending_order = orders::where('user_id', auth()->user()->id)
                        ->where('order_status', 'completed')
                        ->where('track_order', 1 or 2 or 3)
                        ->orderBy('created_at','desc')->paginate(10);

        $completed_order = orders::where('user_id', auth()->user()->id)
                        ->where('order_status', 'completed')
                        ->where('track_order', 4)
                        ->orderBy('created_at','desc')->paginate(10);

        $cancelled_order = orders::where('user_id', auth()->user()->id)
                        ->where('order_status', 'cancelled')
                        ->orderBy('created_at','desc')->paginate(10);

                        $pageTitle = "Order History";
                        $pageDescription = "Our marketplace is dedicated to supporting local agriculture and providing fresh, high-quality
                        farm produce to individuals and businesses in our community";

        return view('user.my_order', compact('pending_order', 'completed_order', 'cancelled_order', 'pageTitle','pageDescription'));
    }
}
