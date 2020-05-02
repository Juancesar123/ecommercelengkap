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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::resource('mereks', 'merekController');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('categories', 'categoryController');

Route::resource('products', 'productController');

Route::resource('orders', 'ordersController');

Route::get('get_product','ProductController@getProduct');
Route::resource('transaksiPembelians', 'transaksiPembelianController');