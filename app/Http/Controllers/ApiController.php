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

    public function readVendas(Request $request)
    {
        $request->validate([
            'vendedor_id' => 'required|integer|exists:vendedores,id',
        ]);
        $vendas = Venda::where('vendedor_id', $request->id)->get();
        if ($vendas) {
            $vendas = $vendas->map(function ($venda) {
                return [
                    'id' => $venda->id,
                    'nome' => $venda->vendedor->nome,
                    'email' => $venda->vendedor->email,
                    'valor' => $venda->valor,
                    'comissao' => $venda->comissao,
                    'data' => $venda->created_at->format('d/m/Y')
                ];
            });
        }

        return response()->json([
            "message" => "Vendedor não encontrado"
        ], 404);
    }

    public function createVenda(Request $request)
    {
        $request->validate([
            'valor' => 'required|numeric',
            'vendedor_id' => 'required|integer|exists:vendedores,id',
        ]);

        $venda = new Venda;
        $venda->valor = $request->valor;
        $venda->vendedor_id = $request->vendedor_id;
        $venda->save();

        return response()->json([
            "message" => "Venda criada com sucesso",
            "venda" => [
                'id' => $venda->id,
                'nome' => $venda->vendedor->nome,
                'email' => $venda->vendedor->email,
                'valor' => $venda->valor,
                'comissao' => $venda->comissao,
                'data' => $venda->created_at->format('d/m/Y')
            ]
        ], 201);
    }
}
