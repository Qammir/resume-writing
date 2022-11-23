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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'Index'])->name('home');
Route::get('/services', [App\Http\Controllers\HomeController::class, 'Service'])->name('service');
Route::get('/company', [App\Http\Controllers\HomeController::class, 'Company'])->name('company');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'AboutUs'])->name('about');
Route::post('/order', [App\Http\Controllers\OrderController::class, 'Create'])->name('order.perform');
Route::get('/order', [App\Http\Controllers\HomeController::class, 'Order'])->name('order');

Route::post('handle-payment', [App\Http\Controllers\PaypalPaymentController::class, 'payment'])->name('make.payment');
Route::get('cancel-payment', [App\Http\Controllers\PaypalPaymentController::class, 'cancel'])->name('payment.cancel');
Route::get('payment-success', [App\Http\Controllers\PaypalPaymentController::class, 'success'])->name('payment.success');



//admin
 Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'getLogin'])->name('adminLogin');
    Route::post('/login', [App\Http\Controllers\Admin\AdminAuthController::class, 'postLogin'])->name('adminLoginPost');

    Route::group(['middleware' => 'adminauth'], function () {
        Route::get('/dashboard', function () {
            return view('admin.index');
        })->name('adminDashboard');
    Route::get('/logout', [App\Http\Controllers\Admin\AdminAuthController::class, 'Logout'])->name('logout');
    Route::get('/order', [App\Http\Controllers\Admin\OrderController::class, 'Index'])->name('order.index');

    });
});
