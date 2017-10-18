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
Route ::Resource ('clientes', "ClienteController");

Route ::Resource ('proveedores', "ProveedorController");

/*
Route::get('/', function () {
    return view('welcome');
});
*/