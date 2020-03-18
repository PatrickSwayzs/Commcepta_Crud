<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rotas Produtos
Route::group(['prefix' => 'produtos', 'where' => ['id' => '[0-9]+']], function () {
    Route::any('', ['as' => 'produtos', 'uses' => 'ProdutosController@index']);
    Route::get('create', ['as' => 'produtos.create', 'uses' => 'ProdutosController@create']);
    Route::get('{id}/destroy', ['as' => 'produtos.destroy', 'uses' => 'ProdutosController@destroy']);
    Route::get('{id}/edit', ['as' => 'produtos.edit', 'uses' => 'ProdutosController@edit']);
    Route::put('{id}/update', ['as' => 'produtos.update', 'uses' => 'ProdutosController@update']);
    Route::post('store', ['as' => 'produtos.store', 'uses' => 'ProdutosController@store']);

});

//Rotas Vendedores
Route::group(['prefix' => 'vendedores', 'where' => ['id' => '[0-9]+']], function () {
    Route::any('', ['as' => 'vendedores', 'uses' => 'VendedoresController@index']);
    Route::get('create', ['as' => 'vendedores.create', 'uses' => 'VendedoresController@create']);
    Route::get('{id}/destroy', ['as' => 'vendedores.destroy', 'uses' => 'VendedoresController@destroy']);
    Route::get('{id}/edit', ['as' => 'vendedores.edit', 'uses' => 'VendedoresController@edit']);
    Route::put('{id}/update', ['as' => 'vendedores.update', 'uses' => 'VendedoresController@update']);
    Route::post('store', ['as' => 'vendedores.store', 'uses' => 'VendedoresController@store']);

});

//Rotas Vendas
Route::group(['prefix' => 'vendas', 'where' => ['id' => '[0-9]+']], function () {
    Route::any('', ['as' => 'vendas', 'uses' => 'VendasController@index']);
    Route::get('create', ['as' => 'vendas.create', 'uses' => 'VendasController@create']);
    Route::get('{id}/destroy', ['as' => 'vendas.destroy', 'uses' => 'VendasController@destroy']);
    Route::get('{id}/edit', ['as' => 'vendas.edit', 'uses' => 'VendasController@edit']);
    Route::put('{id}/update', ['as' => 'vendas.update', 'uses' => 'VendasController@update']);
    Route::post('store', ['as' => 'vendas.store', 'uses' => 'VendasController@store']);

});

