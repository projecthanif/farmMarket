<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $featuredProducts = product::where('is_featured', 'Yes')->get();
        $products = product::all();
        $category = category::all();
        return view('shop.product', compact('products', 'category', 'featuredProducts'));
    }

}
