<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

class VendedorController extends Controller
{
    public function index()
    {
        $request = Request::create('/api/vendedores', 'GET');
        $response = Route::dispatch($request);

        $vendedores = json_decode($response->getContent())->vendedores;

        return view('vendedores.index', compact('vendedores'));
    }

    public function novo()
    {
        return view('vendedores.novo');
    }
}
