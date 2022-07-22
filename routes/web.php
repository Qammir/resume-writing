<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
    return view('index');
});
Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });
        Route::group(['middleware' => ['auth']], function() {
        Route::get('/profile', [App\Http\Controllers\HomeController::class, 'Profile'])->name('profile');
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });
});
Route::get('/admin/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'index']);
Route::post('/order', [App\Http\Controllers\OrderController::class, 'Create'])->name('order.perform');

Route::post('handle-payment', [App\Http\Controllers\PayPalPaymentController::class, 'handlePayment'])->name('make.payment');
Route::post('cancel-payment', [App\Http\Controllers\PayPalPaymentController::class, 'paymentCancel'])->name('cancel.payment');
Route::post('payment-success', [App\Http\Controllers\PayPalPaymentController::class, 'paymentSuccess'])->name('success.payment');

