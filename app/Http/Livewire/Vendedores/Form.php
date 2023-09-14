<?php

namespace App\Http\Livewire\Vendedores;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Form extends Component
{
    public $nome;
    public $email;

    protected $rules = [
        'nome' => 'required|min:3',
        'email' => 'required|email|unique:vendedores,email',
    ];

    public function store()
    {
        $data = $this->validate();
        // transforma em json
        $data = json_encode($data);

        $request = Request::create('/api/vendedor', 'POST', [$data]);
        dd($request);
        $response = Route::dispatch($request);
        dd($response);

        if ($response->getStatusCode() == 201) {
            session()->flash('message', 'Vendedor cadastrado com sucesso!');
        } else {
            session()->flash('message', 'Erro ao cadastrar vendedor!');
        }

        return redirect()->route('vendedores');
    }

    public function render()
    {
        return view('livewire.vendedores.form');
    }
}
