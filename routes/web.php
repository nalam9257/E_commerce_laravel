<?php

use Illuminate\Support\Facades\Route;

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
Route::get('home', function () {
    return view('home');
});
Route::get('signup','signup@show_Signup_page');
Route::get('login', function () {
    return view('login');
});
Route::get('items','product_details@index');
Route::post('submit','cear@submit');
Route::get('form', function () {
    return view('e');
});
Route::get('order/{id}','address@address_details');
Route::post('register','signup@user_details');
Route::post('login_auth','signup@dologin');
Route::get('logout','signup@logout');
Route::get('order/order_address/{id}','address_save@save_address');
Route::post('/summary','address_save@summary');