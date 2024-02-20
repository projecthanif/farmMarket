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
        $featuredProducts = product::where('is_featured', 'Yes')->take(4)->get();
        $products = product::take(8)->get();
        $category = category::all();
        // dd($category);

        $pageTitle = "Products";
        $pageDescription = "Our marketplace is dedicated to supporting local agriculture and providing fresh, high-quality
         farm produce to individuals and businesses in our community.";
        return view('shop.product', compact('products', 'category', 'featuredProducts', 'pageTitle', 'pageDescription'));
    }

    public function productDetails($product_name)
    {

        $product_id = product::where('product_name', $product_name)->value('id');
        $product = product::findOrFail($product_id);
        $relatedProducts = product::where('category_id', $product->category_id)->take(4)->get();
        $review = Rating::where('product_id', $product->id)->get();
        $reviewCount = Rating::where('product_id', $product->id)->count();
        // dd($reviewCount);
        $likes = DB::table('likes')->where('prod_id', $product_id)->count();

        $like_user = DB::table('likes')
            ->where('prod_id', $product_id)
            ->where('user_id', auth()->user()->id ?? '')
            ->first();

        $pageTitle = $product_name . " Products";
        $pageDescription = "Our marketplace is dedicated to supporting local agriculture and providing fresh, high-quality
             farm produce to individuals and businesses in our community.";
        return view('shop.product_details', compact('product', 'relatedProducts', 'review', 'reviewCount', 'likes', 'like_user', 'pageTitle', 'pageDescription'));
    }


    public function search(Request $request)
    {
        try {

            $products = product::where('product_name', 'like', '%' . $request->product . '%')->get();
            $category = category::all();
            $featuredProducts = product::where('is_featured', 'Yes')->take(4)->get();

            $pageTitle = "Products with " . $request;
            $pageDescription = "Our marketplace is dedicated to supporting local agriculture and providing fresh, high-quality
             farm produce to individuals and businesses in our community.";

            return view('shop.include.search_bar_menu', compact('products', 'category', 'featuredProducts', 'pageTitle', 'pageDescription'));
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
