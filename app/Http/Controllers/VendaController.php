<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Vendedor;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::all();
        $vendedores = Vendedor::all();
        return view('vendas.index', compact('vendas', 'vendedores'));
    }

    public function novo()
    {
        return view('vendas.novo');
    }
}
