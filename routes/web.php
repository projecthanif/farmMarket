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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
