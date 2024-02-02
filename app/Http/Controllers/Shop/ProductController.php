<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use App\Models\Rating;
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

    public function productDetails($product_name)
    {

        $product_id = product::where('product_name', $product_name)->value('id');
        $product = product::findOrFail($product_id);
        $relatedProducts = product::where('category_id', $product->category_id)->get();
        $review = Rating::where('product_id', $product->id)->get();
        $reviewCount = Rating::where('product_id', $product->id)->count();
        // dd($reviewCount);

        return view('shop.product_details', compact('product', 'relatedProducts', 'review', 'reviewCount'));
    }
}
