<?php

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

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\CartController;

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', [HomeController::class, 'showHomePage'])->name('frontend.home');
    Route::get('/product/{slug}', [ProductController::class, 'showDetails'])->name('frontend.product.details');


    Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
    Route::post('/cart', [CartController::class, 'addtoCart'])->name('cart.add');
    Route::get('/cartdetails',[CartController::class, 'cartDetails'])->name('cart.details');
});
// Route::get('/', function () {
//     return view('frontend.home');
// });


