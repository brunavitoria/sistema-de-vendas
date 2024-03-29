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

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('/vendedores')->group(function () {
    Route::get('/', 'App\Http\Controllers\VendedorController@index')->name('vendedores');
    Route::get('/novo', 'App\Http\Controllers\VendedorController@novo')->name('vendedores.novo');
});

Route::prefix('/vendas')->group(function () {
    Route::get('/', 'App\Http\Controllers\VendaController@index')->name('vendas');
    Route::get('/novo', 'App\Http\Controllers\VendaController@novo')->name('vendas.novo');
});
