<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function readVendedores()
    {
        $vendedores = Vendedor::all()->toJson(JSON_PRETTY_PRINT);
        return response($vendedores, 200);
    }

    public function createVendedor(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required|email',
        ]);

        $vendedor = new Vendedor;
        $vendedor->nome = $request->nome;
        $vendedor->email = $request->email;
        $vendedor->save();

        return response()->json([
            "message" => "Vendedor criado com sucesso",
            "vendedor" => $vendedor
        ], 201);
    }
}
