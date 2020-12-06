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

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', [HomeController::class, 'showHomePage'])->name('homepage');
});
// Route::get('/', function () {
//     return view('frontend.home');
// });


