<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ProdukController@index');
Route::prefix('produk')->group(function () { 
    Route::get('create', 'ProdukController@create');
    Route::post('store', 'ProdukController@store');
    Route::get('{produk:slug}/edit', 'ProdukController@edit');
    Route::patch('{produk:slug}/edit', 'ProdukController@update');
    Route::delete('{produk:slug}/delete', 'ProdukController@destroy');
});