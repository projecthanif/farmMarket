<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{

    public function addToCart(Request $request)
    {

        try {
            $productId = $request->input('product_id');
            $quantity = $request->input('quantity', 1); // Default to 1 if quantity is not provided
            // $price = $request->input('price');

            // Retrieve the cart from the session
            $cart = $request->session()->get('cart', []);

            // Check if the product is already in the cart
            $existingProduct = collect($cart)->firstWhere('product_id', $productId);

            if ($existingProduct) {
                // If the product is already in the cart, increment the quantity
                $existingProduct['quantity'] += $quantity;
                $existingProduct['itemTotalPrice'] = $existingProduct['quantity'] * $existingProduct['price'];
            } else {
                // If the product is not in the cart, add a new item
                $product = Product::findOrFail($productId);

                $cart[] = [
                    'product_id' => $productId,
                    'main_image' => $product->main_image,
                    'name' => $product->product_name,
                    'price' => $product->price,
                    'quantity' => $quantity,
                    'itemTotalPrice' => $product->price * $quantity,
                ];
            }

            // Update the cart in the session
            $request->session()->put('cart', $cart);

            $cart = $request->session()->get('cart', []);

            $cartCount = count($cart);

            // Calculate total cart price using query builder
            $totalCartPrice = $this->calculateTotalPrice($cart);

            return response()->json([
                'status' => 'success',
                'message' => 'Item added to the cart.',
                'cartCount' => $cartCount,
                'cartItems' => $this->renderCartItems($cart),
                'totalCartPrice' => $totalCartPrice
            ]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    private function renderCartItems($cart)
    {
        $html = '';
        foreach ($cart as $item) {
            $html .= '<li>' . $item['name'] . ' - $' . $item['price'] . '</li>';
        }
        return $html;
    }

    public function viewCart(Request $request)
    {

        $cart = $request->session()->get('cart', []);

        $totalCartPrice = $this->calculateTotalCartPrice($cart);

        return view('shop.cart', compact('cart', 'totalCartPrice'));
    }

    public function removeFromCart(Request $request)
    {
        try {
            $productId = $request->input('product_id');

            // Retrieve the cart from the session
            $cart = $request->session()->get('cart', []);

            // Find the index of the product in the cart
            $productIndex = collect($cart)->search(function ($item) use ($productId) {
                return $item['product_id'] == $productId;
            });

            if ($productIndex !== false) {
                // Remove the product from the cart
                unset($cart[$productIndex]);

                // Reset array keys after removing an item
                $cart = array_values($cart);

                // Update the cart in the session
                $request->session()->put('cart', $cart);

                $cartCount = count($cart);

                return response()->json([
                    'status' => 'success',
                    'message' => 'Item removed from the cart.',
                    'cartCount' => $cartCount,
                    'cartItems' => $this->renderCartItems($cart),
                ]);
            }

            return response()->json([
                'status' => 'error',
                'message' => 'Item not found in the cart.',
            ]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function updateQuantity(Request $request)
    {
        try {
            $productId = $request->input('product_id');
            $quantity = $request->input('quantity');

            // Retrieve the cart from the session
            $cart = $request->session()->get('cart', []);

            // Find the index of the product in the cart
            $productIndex = collect($cart)->search(function ($item) use ($productId) {
                return $item['product_id'] == $productId;
            });

            if ($productIndex !== false) {
                // Update the quantity for the product in the cart
                $cart[$productIndex]['quantity'] = $quantity;

                // Update the total price for the product in the cart
                $cart[$productIndex]['itemTotalPrice'] = $cart[$productIndex]['price'] * $quantity;

                // Update the cart in the session
                $request->session()->put('cart', $cart);

                $totalCartPrice = $this->calculateTotalCartPrice($cart);

                return response()->json([
                    'status' => 'success',
                    'message' => 'Quantity updated successfully.',
                    'itemTotalPrice' => $cart[$productIndex]['itemTotalPrice'],
                    'totalCartPrice' => $totalCartPrice,
                ]);
            }

            return response()->json([
                'status' => 'error',
                'message' => 'Product not found in the cart.',
                'totalCartPrice' => 0, // Set a default value for totalCartPrice
            ]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    private function calculateTotalCartPrice($cart)
    {
        $totalCartPrice = 0;

        foreach ($cart as $item) {
            $totalCartPrice += $item['itemTotalPrice'];
        }

        return $totalCartPrice;
    }


}
