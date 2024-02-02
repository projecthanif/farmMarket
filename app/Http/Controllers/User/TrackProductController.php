<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\orders;
use Illuminate\Http\Request;

class TrackProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index($order_id)
    {
        $track = orders::where('user_id', auth()->user()->id)
                            ->where('order_id', $order_id)
                            ->first();

        return view('user.track_order', compact('track'));
    }
}
