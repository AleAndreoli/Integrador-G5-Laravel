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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/faq', function () {
    return view('faq');
});

// Rotas de Producto

Route::get('/product/add', 'ProductController@addProduct');

Route::post('/product/add', 'ProductController@storeProduct');

Route::get('/product', function () {
    return view('product.producto');
});

Route::get('/product/{id}', 'ProductController@show')->name('showProduct');

Route::post('/product/{id}', 'ShoppingCartController@addProduct')->name('showProduct');

// Rutas de Proveedor

Route::get('/provider/add', function () {
    return view('providers.add');
});

Route::post('/provider/add', 'ProviderController@addProvider')->name('addProvider');

Route::get('/providers/list', 'ProviderController@directory')->name('listaProveedores');

Route::get('provider/{id}', 'ProviderController@show')->name('verProveedor');

Route::post('provider/{id}', 'ProviderController@update')->name('editarProveedor');

// Rutas de Usuario

Route::get('/user/{id}', 'UserController@show')->name('pantallaCuenta');

Route::post('/user/{id}', 'UserController@update')->name('actualizarUsuario');

// Rutas de Categoría

Route::get('/category/add', 'CategoryController@addCategory');

Route::post('/category/add', 'categoryController@storeCategory');

Route::get('categories/list', 'CategoryController@directory');

// Rutas del Carrito

Route::get('/checkout', function () {
    return view('carts.checkout');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rutas de Direcciones


Route::post('/address/add', 'AddressController@addAddress');

Route::get('/address/{userId}', 'AddressController@show')->name('showAddress');

Route::get('/telephones/add', 'TelephoneController@show')->name('showTelephone');

Route::post('/telephone/add', 'TelephoneController@addTelephone');
//
Route::get('/telephone/{userId}', 'TelephoneController@show')->name('showTelephone');
