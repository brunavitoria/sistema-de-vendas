<?php

use App\Http\Controllers\ApiController;
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

Route::get('vendedores', [ApiController::class, 'readVendedores'])->name('api.vendedores');
Route::post('vendedor', [ApiController::class, 'createVendedor'])->name('api.vendedor');
Route::get('vendas/{id}', [ApiController::class, 'readVendas'])->name('api.vendas');
Route::post('venda', [ApiController::class, 'createVenda'])->name('api.venda');