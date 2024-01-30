<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\sectionController;
use App\Models\category;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->namespace('admin')->group(function () {
    //All admin routes will be defined inside here
    Route::match(['get', 'post'], '/', [adminController::class, 'login']);

    Route::group(['middleware' => ['admin']], function () {
        Route::get('dashboard', [adminController::class, 'dashboard']);
        Route::get('users', [adminController::class, 'users']);
        Route::get('settings', [adminController::class, 'settings']);
        Route::get('logout', [adminController::class, 'logout']);
        Route::post('check-current-pwd', [adminController::class, 'checkCurrentPassword']);
        Route::post('update-current-pwd', [adminController::class, 'updateCurrentPassword']);
        Route::match(['get', 'post'], 'update-admin-details', [adminController::class, 'updateAdminDetails']);

        //categories route
        Route::get('categories', [categoryController::class, 'categories']);
        Route::post('update-category-status', [categoryController::class, 'updateCategoryStatus']);

        Route::match(['get', 'post'], 'add-edit-category/{id?}', [categoryController::class, 'addEditCategory']);

        Route::get('delete-category-image/{id}', [categoryController::class, 'deleteCategoryImage']);
        Route::post('append-categories-level', [categoryController::class, 'appendCategoryLevel']);
        Route::get('delete-category/{id}', [categoryController::class, 'deleteCategory']);

        //products route
        Route::get('products', [productController::class, 'products']);
        Route::post('update-product-status', [productController::class, 'updateProductStatus']);
        Route::get('delete-product/{id}', [productController::class, 'deleteProduct']);
        Route::match(['get', 'post'], 'add-edit-product/{id?}', [productController::class, 'addEditProduct']);
        Route::get('delete-product-image/{id}', [productController::class, 'deleteProductImage']);
        Route::get('delete-product-video/{id}', [productController::class, 'deleteProductVideo']);

        //Images route
        Route::match(['get', 'post'], 'add-images/{id}', [productController::class, 'addImages']);
        Route::get('delete-image/{id}', [productController::class, 'deleteImage']);

        //orders route
        Route::get('orders', [OrderController::class, 'orders']);
        Route::post('update-payment-status', [OrderController::class, 'updatePaymentStatus']);
        Route::post('update-order-status/{id}', [OrderController::class, 'updateOrderStatus']);

        //Sales route
        Route::get('sales', [OrderController::class, 'sales']);
    });
});

Route::prefix('shop')->group(function () {

    Route::get('/product', 'Shop\ProductController@index')->name('shop.product');

    //category
    Route::get('/category/{name}', 'Shop\Category\CategoryController@index')->name('shop.category');


    //add to cart
    Route::post('/add-to-cart', 'Shop\CartController@addToCart')->name('cart.add');

    //remove from cart
    Route::post('/remove-from-cart', 'Shop\CartController@removeFromCart')->name('cart.remove');

    //update item quantity
    Route::post('/update-item-quantity', 'Shop\CartController@updateQuantity')->name('cart.updateQuantity');
    Route::get('/cart', 'Shop\CartController@viewCart')->name('shop.cart');

    //checkout
    Route::get('/checkout', 'Shop\CheckoutController@index')->name('checkout.index');
    Route::post('/checkout/order', 'Shop\CheckoutController@process')->name('checkout.order');

    // shipping-price
    Route::get('/get-shipping-price/{location}', 'Shop\ShippingController@getShippingPrice');

    //thank you page
    Route::get('/checkout/thank-you', 'Shop\CheckoutController@thankyou')->name('checkout.thankyou');

});




Route::prefix('user')->group(function () {
    //profile
    Route::get('/profile', 'User\profileController@index')->name('user.profile');

    //profile
    Route::get('/order', 'User\OrderController@index')->name('user.order');

    // edit profile
    Route::get('/profile-edit', 'User\profileController@edit')->name('user.edit');
    Route::post('/profile-edit', 'User\profileController@editAction')->name('user.edit.action');

    //changer password
    Route::post('/password/change', 'User\profileController@changePassword')->name('password.change');


    Route::get('/login', 'User\Auth\LoginController@showLoginForm')->name('user.login');
    Route::post('/login', 'User\Auth\LoginController@loginAction')->name('user.login.action');
    Route::get('/logout', 'User\Auth\LoginController@logout')->name('user.logout');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
