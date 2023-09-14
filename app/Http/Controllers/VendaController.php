<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::all();
        $request = Request::create('/api/vendedores', 'GET');
        $response = Route::dispatch($request);

        $vendedores = json_decode($response->getContent())->vendedores;
        return view('vendas.index', compact('vendas', 'vendedores'));
    }

    public function novo()
    {
        return view('vendas.novo');
    }
}
