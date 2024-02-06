<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//product
Route::get('proudcts/category/{id}', [App\Http\Controllers\Proudcts\ProudctsController::class, 'singleCategory'])->name('single.category');
Route::get('proudcts/single-product/{id}', [App\Http\Controllers\Proudcts\ProudctsController::class, 'singleProduct'])->name('single.product');
Route::get('proudcts/shop', [App\Http\Controllers\Proudcts\ProudctsController::class, 'shop'])->name('products.shop');

//cart
Route::post('proudcts/add-cart', [App\Http\Controllers\Proudcts\ProudctsController::class, 'addToCart'])->name('products.add.cart');
Route::get('proudcts/cart', [App\Http\Controllers\Proudcts\ProudctsController::class, 'cart'])->name('products.cart');
Route::get('proudcts/delete-cart/{id}', [App\Http\Controllers\Proudcts\ProudctsController::class, 'deleteFromCart'])->name('products.cart.delete');


//checkout

Route::post('proudcts/prepare-checkout', [App\Http\Controllers\Proudcts\ProudctsController::class, 'prepareCheckout'])->name('products.prepare.checkout');
Route::get('proudcts/checkout', [App\Http\Controllers\Proudcts\ProudctsController::class, 'checkout'])->name('products.checkout');
