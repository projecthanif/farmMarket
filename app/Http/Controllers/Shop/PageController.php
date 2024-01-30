<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function categories()
    {
        $categories = category::all();

        dd($categories);

        return view('layouts.shop_layout.mainheader', compact('categories'));
    }
}
