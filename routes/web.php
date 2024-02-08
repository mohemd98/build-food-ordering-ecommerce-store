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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');


Route::group(['prefix' => 'proudcts'], function () {

//product
    Route::get('/category/{id}', [App\Http\Controllers\Proudcts\ProudctsController::class, 'singleCategory'])->name('single.category');
    Route::get('/single-product/{id}', [App\Http\Controllers\Proudcts\ProudctsController::class, 'singleProduct'])->name('single.product');
    Route::get('/shop', [App\Http\Controllers\Proudcts\ProudctsController::class, 'shop'])->name('products.shop');

//cart
    Route::post('/add-cart', [App\Http\Controllers\Proudcts\ProudctsController::class, 'addToCart'])->name('products.add.cart');
    Route::get('/cart', [App\Http\Controllers\Proudcts\ProudctsController::class, 'cart'])->name('products.cart')->middleware('auth');
    Route::get('/delete-cart/{id}', [App\Http\Controllers\Proudcts\ProudctsController::class, 'deleteFromCart'])->name('products.cart.delete');
//checkout

    Route::post('/prepare-checkout', [App\Http\Controllers\Proudcts\ProudctsController::class, 'prepareCheckout'])->name('products.prepare.checkout');

    Route::get('/checkout', [App\Http\Controllers\Proudcts\ProudctsController::class, 'checkout'])->name('products.checkout')->middleware('check.for.price');
    Route::post('/checkout', [App\Http\Controllers\Proudcts\ProudctsController::class, 'proccessCheckout'])->name('products.proccess.checkout')->middleware('check.for.price');
    Route::get('/pay', [App\Http\Controllers\Proudcts\ProudctsController::class, 'payWithpaypal'])->name('products.pay')->middleware('check.for.price');
    Route::get('/success', [App\Http\Controllers\Proudcts\ProudctsController::class, 'success'])->name('products.success')->middleware('check.for.price');


});

Route::group(['prefix' => 'users'], function () {

//users pages
    Route::get('/my-orders', [App\Http\Controllers\Users\UsersController::class, 'MyOrders'])->name('users.orders')->middleware('auth');
    Route::get('/setting', [App\Http\Controllers\Users\UsersController::class, 'settings'])->name('users.settings')->middleware('auth');
    Route::post('/setting/{id}', [App\Http\Controllers\Users\UsersController::class, 'updateUserSettings'])->name('users.settings.update')->middleware('auth');
});


//admin

Route::get('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'viewlogin'])->name('view.login')->middleware('check.for.auth');
Route::post('admin/login', [App\Http\Controllers\Admins\AdminsController::class, 'checkLogin'])->name('check.login');

Route::group(['prefix' => 'admin', 'middleware' =>'auth:admin'], function () {
    Route::get('/index', [App\Http\Controllers\Admins\AdminsController::class, 'index'])->name('admins.dashboard');

//    admins
    Route::get('/all-admins', [App\Http\Controllers\Admins\AdminsController::class, 'displayAdmins'])->name('admins.all');
    Route::get('/create-admins', [App\Http\Controllers\Admins\AdminsController::class, 'createAdmins'])->name('admins.create');
    Route::post('/create-admins', [App\Http\Controllers\Admins\AdminsController::class, 'storeAdmins'])->name('admins.store');

});
