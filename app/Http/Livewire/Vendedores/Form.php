<?php

namespace App\Http\Livewire\Vendedores;

use App\Models\Vendedor;
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

        $vendedor = new Vendedor();
        $vendedor->nome = $data['nome'];
        $vendedor->email = $data['email'];
        $vendedor->save();

        return redirect()->route('vendedores');
    }

    public function render()
    {
        return view('livewire.vendedores.form');
    }
}
