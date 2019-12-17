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

Route::get('/product/add', 'ProductController@addProduct');

Route::post('/product/add', 'ProductController@storeProduct');

Route::get('/product', function () {
    return view('product.producto');
});

Route::get('/product/{id}', 'ProductController@show')->name('showProduct');

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/provider/add', function () {
    return view('providers.add');
});

Route::post('/provider/add', 'ProviderController@addProvider')->name('addProvider');

Route::get('/providers/list', 'ProviderController@directory')->name('listaProveedores');

Route::get('provider/{id}', 'ProviderController@show')->name('verProveedor');

Route::post('provider/{id}', 'ProviderController@update')->name('editarProveedor');

Route::get('/user/{id}', 'UserController@show')->name('pantallaCuenta');

Route::post('/user/{id}', 'UserController@update')->name('actualizarUsuario');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
