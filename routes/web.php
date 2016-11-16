<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/realizarCompra','Controller@comprar');

Route::get('/carrito','Controller@carrito');

Route::get('/agregar/{id}','Controller@agregarAlCarrito');

Route::get('/{category}','Controller@serveCategory');
