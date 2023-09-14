<?php

namespace App\Http\Livewire\Vendas;

use App\Models\Venda;
use App\Models\Vendedor;
use Livewire\Component;

class Form extends Component
{
    public $vendedores;
    public $vendedor_id;
    public $valor;

    public function mount()
    {
        $this->vendedores = Vendedor::all();
    }

    public function store()
    {
        $this->validate([
            'vendedor_id' => 'required|exists:vendedores,id',
            'valor' => 'required|numeric'
        ]);

        $venda = Venda::create([
            'vendedor_id' => $this->vendedor_id,
            'valor' => $this->valor
        ]);

        return redirect()->route('vendas');

    }

    public function render()
    {
        return view('livewire.vendas.form');
    }
}
