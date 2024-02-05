<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use App\Models\productsImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

use GuzzleHttp\Client;

class productController extends Controller
{
    public function products()
    {
        Session::put('page', 'products');
        //get all the products through the product controller
        $products = product::with(['category' => function ($query) {
            $query->select('id', 'name');
        }])->get();

        return view('admin.products.products')->with(compact('products'));
    }

    public function updateProductStatus(Request $request)
    {
        if ($request->ajax()) {
            $data = $request->all();

            if ($data['status'] == "Active") {
                $status = 0;
            } else {
                $status = 1;
            }
            product::where('id', $data['product_id'])->update(['status' => $status]);
            return response()->json(['status' => $status, 'product_id' => $data['product_id']]);
        }
    }

    public function deleteProduct($id)
    {
        product::where('id', $id)->delete();

        $message = "product has been successfully deleted";
        Session::flash('Success_message', $message);
        return redirect()->back();
    }

    public function addEditProduct(Request $request, $id = null)
    {
        if ($id == "") {
            $title = "Add Product";
            $product = new product;  //this line is to create a new product
            $productData = array();
            $message = 'Product added successfully !';
        } else {
            $title = "Edit Product";
            $productData = product::find($id);
            $productData = json_decode(json_encode($productData), true);
            $product = product::find($id);  //this line is to update the details
            $message = 'Product updated successfully !';
        }

        if ($request->isMethod('post')) {
            $data = $request->all();
            //validating the form
            $rules = [
                'category_id' => 'required',
                'product_name' => 'required',
                'price' => 'required|numeric',
            ];
            $customMessages = [
                'category_id.required' => 'Category is required',
                'product_name.required' => 'Product name is required',
                // 'product_name.regex' => 'Valid Product name is required',
                'price.required' => 'Product price is required',
                'price.numeric' => 'Valid Product price is required',
            ];
            $this->validate($request, $rules, $customMessages);
            //Upload product image
            if ($request->hasFile('main_image')) {
                $image_tmp = $request->file('main_image'); //get the default image path and store it in this variable
                //then check if the file is valid
                if ($image_tmp->isValid()) {
                    $image_name = $image_tmp->getClientOriginalName();
                    $extension = $image_tmp->getClientOriginalExtension();
                    //New image name
                    $imageName = $image_name . '-' . rand(111, 999) . '.' . $extension;

                    $medium_image_path = public_path('images/product_images/medium/' . $imageName);
                    $small_image_path = public_path('images/product_images/small/' . $imageName);

                    Image::make($image_tmp)->resize(520, 590)->save($medium_image_path);
                    Image::make($image_tmp)->resize(260, 270)->save($small_image_path);
                    $product->main_image = $imageName;
                }
            }

            //save product details into the product table in the database
            $categoryDetails = category::find($data['category_id']);
            $product->category_id = $data['category_id'];
            $product->product_name = $data['product_name'];
            $product->price = $data['price'];
            $product->quantity = $data['quantity'];
            $product->unit = $data['unit'] ? $data['unit'] : 'kg';
            $product->product_weight = $data['product_weight'] ? $data['product_weight'] : 0;
            $product->product_discount = $data['product_discount'] ? $data['product_discount'] : 0;
            $product->description = $data['description'];

            if (!empty($data['is_featured'])) {
                $product->is_featured = $data['is_featured'];
            }
            $product->status = 1;
            $product->save();

            //send notifications to all users here
            $client = new Client();
            $endpoint = 'https://app.farmersmarketplace.ng/products/notify';

            $postData = [
                'prod_name' => $data['product_name'],
                'status'   => $id == "" ? "add" : "update"

            ];

            // Make a POST request to the external endpoint with the data
            $response = $client->post($endpoint, [
                'json' => $postData,
            ]);
            $body = $response->getBody()->getContents();

            Session::flash('Success_message', $message);
            return redirect('admin/products');
        }

        //sections with categories and subCategories
        $categories = category::get();
        return view('admin.products.add_edit_product')->with(compact('title', 'categories', 'productData'));
    }

    public function deleteProductImage($id)
    {
        //get the category image you wanna delete
        $productImage = product::select('main_image')->where('id', $id)->first();

        //get category image path
        $small_image_path = public_path('images/product_images/small');
        $medium_image_path = public_path('images/product_images/medium');

        //delete small images if it exists in small folder
        if (file_exists($small_image_path . $productImage->main_image)) {
            unlink($small_image_path . $productImage->main_image);
        }
        //delete medium images if it exists in medium folder
        if (file_exists($medium_image_path . $productImage->main_image)) {
            unlink($medium_image_path . $productImage->main_image);
        }

        //delete category image from categories table
        product::where('id', $id)->update(['main_image' => '']);
        return redirect()->back()->with('flash_message_success', 'Product image has been deleted successfully!');
    }

    public function addImages(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            if ($request->hasFile('images')) {
                $images = $request->file('images');

                foreach ($images as $key => $image) {
                    $productImage = new productsImage();
                    $image_tmp = Image::make($image);
                    $extension = $image->getClientOriginalExtension();
                    $imageName = rand(111, 999) . time() . "." . $extension;

                    $medium_image_path = public_path('images/product_images/medium/' . $imageName);
                    $small_image_path = public_path('images/product_images/small/' . $imageName);

                    Image::make($image_tmp)->resize(520, 590)->save($medium_image_path);
                    Image::make($image_tmp)->resize(260, 270)->save($small_image_path);

                    //Save main image in product table
                    $productImage->image = $imageName;
                    $productImage->product_id = $id;
                    $productImage->status = 1;
                    $productImage->save();
                }
            }
            $message = "Product Image has been successfully Added";
            Session::flash('Success_message', $message);
            return redirect()->back();
        }

        $productData = product::with('images')->select('id', 'product_name', 'main_image')->find($id);
        $productData = json_decode(json_encode($productData), true);
        //echo "<pre>";print_r($productData);die;
        return view('admin.products.add_images')->with(compact('productData'));
    }

    public function deleteImage($id)
    {
        //get the category image you wanna delete
        $productImage = productsImage::select('image')->where('id', $id)->first();

        //get category image path
        $small_image_path = public_path('images/product_images/small');
        $medium_image_path = public_path('images/product_images/medium');

        //delete small images if it exists in small folder
        if (file_exists($small_image_path . $productImage->image)) {
            unlink($small_image_path . $productImage->image);
        }
        //delete medium images if it exists in medium folder
        if (file_exists($medium_image_path . $productImage->image)) {
            unlink($medium_image_path . $productImage->image);
        }

        //delete category image from categories table
        productsImage::where('id', $id)->delete();
        return redirect()->back()->with('flash_message_success', 'Product image has been deleted successfully!');
    }
}
