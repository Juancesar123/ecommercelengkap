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

Route::get('/', 'HomePageController@index');
Route::post('/add-to-cart/{id}', 'CartController@addcart');
Route::get('/product-details/{id}', 'ProductController@details');
Route::get('/cart', 'CartController@cart');
Route::get('/checkout', 'CheckoutController@index');
Route::get('/delete-cart/{id}', 'CartController@deleteCart');
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::resource('mereks', 'merekController');
//Route::resource('sizestok', 'SizestokController');
//stok
Route::get('/getsizestok/{id}','SizestokController@index')->name('sizestok.data');
Route::get('/createsizestok/{id}','SizestokController@create')->name('sizestok.create');
Route::post('/savesizestok','SizestokController@store')->name('sizestok.store');
Route::delete('/deletesizestok/{id}','SizestokController@destroy')->name('sizestok.destroy');
Route::patch('/updatesizestok/{id}','SizestokController@update')->name('sizestok.update');
Route::get('/edisizestok/{id}/edit/{id_product}','SizestokController@edit')->name('sizestok.edit');
//color
Route::get('/getcolor/{id}','ColorController@index')->name('color.data');
Route::get('/createcolor/{id}','ColorController@create')->name('color.create');
Route::post('/savecolor','ColorController@store')->name('color.store');
Route::delete('/deletecolor/{id}','ColorController@destroy')->name('color.destroy');
Route::patch('/updatecolor/{id}','ColorController@update')->name('color.update');
Route::get('/editcolor/{id}/edit/{id_product}','ColorController@edit')->name('color.edit');
//imageproduct
Route::get('/getimageproduct/{id}','image_product@index')->name('imageproduct.data');
Route::get('/createimageproduct/{id}','image_product@create')->name('imageproduct.create');
Route::post('/saveimageproduct','image_product@store')->name('imageproduct.store');
Route::delete('/deleteimageproduct/{id}','image_product@destroy')->name('imageproduct.destroy');
Route::patch('/updateimageproduct/{id}','image_product@update')->name('imageproduct.update');
Route::get('/editimageproduct/{id}/edit/{id_product}','image_product@edit')->name('imageproduct.edit');
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('categories', 'categoryController');

Route::resource('products', 'productController');

Route::resource('orders', 'ordersController');
Route::resource('users', 'UsersController');
route::get('blockuser/{id}','UsersController@block')->name('users.block');
Route::get('get_product','ProductController@getProduct');
Route::resource('transaksiPembelians', 'transaksiPembelianController');