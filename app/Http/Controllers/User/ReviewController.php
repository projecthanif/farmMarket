<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\orders;
use App\Models\product;
use App\Models\Rating;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $review = Rating::where('user_id', auth()->user()->id)->orderBy("created_at", "desc")->paginate(10);

        return view('user.my_review', compact('review'));
    }

    public function rateProduct(Request $request, $order_id)
    {

        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
        ]);


        $order = orders::where('order_id', $order_id)->first();
        $product = product::findOrFail($order->product->id);

        $currentRating = $product->rating;
        $numberOfRatings = $product->ratings_count;

        // Calculate the new average rating
        $newRating = ($currentRating * $numberOfRatings + $request->input('rating')) / ($numberOfRatings + 1);

        // Update the product's rating
        $product->update([
            'rating' => $newRating,
        ]);

        $rating = new Rating([
            'product_id' => $order->product->id,
            'user_id' => auth()->user()->id,
            'rating' => $request->input('rating'),
            'comment' => $request->input('comment') ?? " ",
        ]);
        $rating->save();

        $order->update([
            'is_rated' => 1,
        ]);

        return redirect()->back()->with('success', 'Product rated successfully.');
    }
}
