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
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/product/add', function () {
    return view('product.add');
});

Route::post('/product/add', 'ProductController@addProduct');

Route::get('/product', function () {
    return view('product.producto');
});

Route::get('/product/{id}', 'ProductController@show')->name('showProduct');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
