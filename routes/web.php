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
    return redirect('home');
});
Route::get('/home', 'HomeController@index');
Route::get('/changePassword','HomeController@displayChangePasswordForm');
Route::post('/changedPassword','HomeController@changeOldPassword');

Route::get('/tentangKami', 'HomeController@aboutUs');

Route::get('/login', 'auth\AuthController@showLoginForm')->name('login');
Route::post('/login', 'auth\AuthController@login')->name('login');
Route::get('/logout', 'auth\AuthController@logout')->name('logout')->middleware('auth');;

Route::get('/register', 'auth\RegisterController@showRegisterForm')->name('register');
Route::post('/register', 'auth\RegisterController@register')->name('register');

Route::get('/viewProduct/{category_id}', 'ViewItemsController@viewProduct')->name('viewProduct');
Route::get('/detailItems/{item_id}', 'ViewItemsController@detailProduct')->name('detailItems');

Route::post('/detailFlower/{item_id}/add', 'ViewItemsController@addToCart');
Route::get('/cart', 'CartController@cartView');
Route::patch('/cart/{cart_id}', 'CartController@updateCart');
Route::post('/home', 'CartController@checkOut');
Route::delete('/cart/{id}', 'CartController@deleteCartsItem');

Route::get('/transactionHistory', 'HeaderTransactionController@transHistoryView');
Route::get('/transactionDetail/{transaction_id}', 'HeaderTransactionController@transDetailView');
