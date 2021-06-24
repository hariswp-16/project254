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

Route::get('barang', 'API\ProductController@index');
Route::get('barang/{id}', 'API\ProductController@show');

// hapus data
Route::delete('barang/{id}', 'API\ProductController@destroy');

// tambah data
Route::post('barang', 'API\ProductController@store');

Route::get('kategori', 'API\CategoriesController@index');
Route::get('kategori/{id}', 'API\CategoriesController@show');

// hapus data
Route::delete('kategori/{id}', 'API\CategoriesController@destroy');

// tambah data
Route::post('kategori', 'API\CategoriesController@store');
//});
