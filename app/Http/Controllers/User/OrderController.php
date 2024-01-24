<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $pending_order = orders::where('user_id', auth()->user()->id)
                        ->where('status', 'pending')
                        ->orderBy('created_at','desc')->paginate(10);

        $completed_order = orders::where('user_id', auth()->user()->id)
                        ->where('status', 'completed')
                        ->orderBy('created_at','desc')->paginate(10);

        $cancelled_order = orders::where('user_id', auth()->user()->id)
                        ->where('status', 'cancelled')
                        ->orderBy('created_at','desc')->paginate(10);

        return view('user.my_order', compact('pending_order', 'completed_order', 'cancelled_order'));
    }
}
