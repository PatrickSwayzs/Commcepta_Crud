<?php

use Illuminate\Support\Facades\Route;

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


Route::get('produtos', 'ProdutosController@index');
Route::get('produtos/create', 'ProdutosController@create');
Route::post('produtos/store','ProdutosController@store');
Route::get('produtos/{id}/destroy', 'ProdutosController@destroy');

Route::get('vendedores', 'VendedoresController@index');
Route::get('vendedores/create', 'VendedoresController@create');
Route::post('vendedores/store','VendedoresController@store');
Route::get('vendedores/{id}/destroy', 'VendedoresController@destroy');
