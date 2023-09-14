<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Vendedor;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function readVendedores()
    {
        $vendedores = Vendedor::all();
        if (count($vendedores) > 0) {
            $vendedores = $vendedores->map(function ($vendedor) {
                return [
                    'id' => $vendedor->id,
                    'nome' => $vendedor->nome,
                    'email' => $vendedor->email,
                    'comissao' => $vendedor->total_comissao
                ];
            });
            return response()->json([
                "message" => "Vendedores encontrados",
                "vendedores" => $vendedores
            ], 200);
        }
        return response()->json([
            "message" => "Nenhum vendedor encontrado"
        ], 404);
    }

    public function createVendedor(Request $request)
    {
        if (!$request->nome || !$request->email) {
            return response()->json([
                "message" => "Nome e email são obrigatórios"
            ], 400);
        }

        $vendedorUnico = Vendedor::where('email', $request->email)->first();
        if ($vendedorUnico) {
            return response()->json([
                "message" => "Email já cadastrado"
            ], 400);
        }

        $vendedor = new Vendedor;
        $vendedor->nome = $request->nome;
        $vendedor->email = $request->email;
        $vendedor->save();

        return response()->json([
            "message" => "Vendedor criado com sucesso",
            "vendedor" => [
                'id' => $vendedor->id,
                'nome' => $vendedor->nome,
                'email' => $vendedor->email
            ]
        ], 201);
    }

    public function readVendas($id = null)
    {
        if (!$id) {
            return response()->json([
                "message" => "O id do vendedor é obrigatório"
            ], 404);
        }

        $vendas = Venda::where('vendedor_id', $id)->get();

        if (count($vendas) > 0) {
            $vendas = $vendas->map(function ($venda) {
                return [
                    'id' => $venda->id,
                    'nome' => $venda->vendedor->nome, // @phpstan-ignore-line
                    'email' => $venda->vendedor->email, // @phpstan-ignore-line
                    'valor' => $venda->valor,
                    'comissao' => $venda->comissao,
                    'data' => $venda->created_at->format('d/m/Y')
                ];
            });
            return response()->json([
                "message" => "Vendas encontradas",
                "vendas" => $vendas
            ], 200);
        }

        return response()->json([
            "message" => "Vendas não encontradas"
        ], 404);
    }

    public function createVenda(Request $request)
    {
        if (!$request->valor || !$request->vendedor_id) {
            return response()->json([
                "message" => "Valor e id do vendedor são obrigatórios"
            ], 400);
        }

        $vendedor = Vendedor::find($request->vendedor_id);
        if (!$vendedor) {
            return response()->json([
                "message" => "Vendedor não encontrado"
            ], 404);
        }

        $venda = new Venda;
        $venda->valor = $request->valor;
        $venda->vendedor_id = $request->vendedor_id;
        $venda->save();

        return response()->json([
            "message" => "Venda criada com sucesso",
            "venda" => [
                'id' => $venda->id,
                'nome' => $venda->vendedor->nome, // @phpstan-ignore-line
                'email' => $venda->vendedor->email, // @phpstan-ignore-line
                'valor' => $venda->valor,
                'comissao' => $venda->comissao,
                'data' => $venda->created_at->format('d/m/Y')
            ]
        ], 201);
    }
}
