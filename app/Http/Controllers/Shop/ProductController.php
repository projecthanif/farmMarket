<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $featuredProducts = product::where('is_featured', 'Yes')->get();
        $products = product::take(8)->take(4)->get();
        $category = category::all();

        $pageTitle = "Products";
        $pageDescription = "Our marketplace is dedicated to supporting local agriculture and providing fresh, high-quality
         farm produce to individuals and businesses in our community.";
        return view('shop.product', compact('products', 'category', 'featuredProducts', 'pageTitle', 'pageDescription'));
    }

    public function productDetails($product_name)
    {

        $product_id = product::where('product_name', $product_name)->value('id');
        $product = product::findOrFail($product_id);
        $relatedProducts = product::where('category_id', $product->category_id)->get();
        $review = Rating::where('product_id', $product->id)->get();
        $reviewCount = Rating::where('product_id', $product->id)->count();
        // dd($reviewCount);
        $likes = DB::table('likes')->where('prod_id', $product_id)->count();

        $like_user = DB::table('likes')
            ->where('prod_id', $product_id)
            ->where('user_id', auth()->user()->id ?? '')
            ->first();

            $pageTitle = $product_name." Products";
            $pageDescription = "Our marketplace is dedicated to supporting local agriculture and providing fresh, high-quality
             farm produce to individuals and businesses in our community.";
        return view('shop.product_details', compact('product', 'relatedProducts', 'review', 'reviewCount', 'likes', 'like_user', 'pageTitle', 'pageDescription'));
    }
}
