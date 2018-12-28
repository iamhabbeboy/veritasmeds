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
Route::get('/panel/{vue_capture?}', function () {
    return view('dashboard.home');
})->where('vue_capture', '[\/\w\.-]*')->middleware('restricted.access');

Route::get('/', 'IndexController@index')->name('homepage');
Route::get('/category', 'CategoryController@page')->name('category');
Route::get('/category/{id}', 'CategoryController@single')->name('single');
Route::get('/product', 'ProductController@page')->name('product');
Route::get('/product/{id}', 'ProductController@single')->name('product_single');
Route::get('/cart/{id}', 'ShoppingCartController@index')->name('cart');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');
