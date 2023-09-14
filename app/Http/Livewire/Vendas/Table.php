<?php

namespace App\Http\Livewire\Vendas;

use App\Models\Venda;
use App\Models\Vendedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Table extends Component
{
    public $vendas;
    public $vendedores;
    public $vendedor_id;

    public function filter()
    {
        $this->vendas = Venda::where('vendedor_id', $this->vendedor_id)->get();
        $this->vendedores = Vendedor::all();
        return;
    }

    public function render()
    {
        return view('livewire.vendas.table');
    }
}
