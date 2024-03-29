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

Route::get('/products', 'ProductController@index');
Route::get('/product/total', 'ProductController@total');
Route::post('/product', 'ProductController@store');
Route::get('/product/{product}', 'ProductController@edit');
Route::put('/product/{product}', 'ProductController@update');
Route::delete('/product/{product}', 'ProductController@delete');
