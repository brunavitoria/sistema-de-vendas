<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('vendedores', [ApiController::class, 'readVendedores']);
Route::post('vendedor', [ApiController::class, 'createVendedor']);
Route::get('vendas', [ApiController::class, 'readVendas']);
Route::post('venda', [ApiController::class, 'createVenda']);