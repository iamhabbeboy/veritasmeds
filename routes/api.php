<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// sleep(5);
Route::get('/category', 'CategoryController@index');
Route::post('/category', 'CategoryController@store');

Route::get('/brand', 'BrandController@index');
Route::post('/brand', 'BrandController@store');

Route::get('/product', 'ProductController@index');
Route::post('/product', 'ProductController@store');
Route::put('/product', 'ProductController@update');

Route::post('/picture', 'PictureController@store');
