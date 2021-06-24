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

Route::get('/portofolio', function(){
	return view('identitas');
});

Route::get('/identitas', 'HarisController@index');

Route::get('product', 'ProductController@index');

Route::get('product', 'ProductController@index')->name('product.index');

Route::get('product/add', 'ProductController@add')->name('product.add');
Route::post('product/save', 'ProductController@save')->name('product.save');
