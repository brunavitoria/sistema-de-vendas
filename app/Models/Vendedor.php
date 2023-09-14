<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    use HasFactory;

    protected $table = 'vendedores';
    protected $fillable = ['nome', 'email'];
    protected $dates = ['created_at', 'updated_at'];
    protected $appends = ['total_comissao'];

    public function getTotalComissaoAttribute()
    {
        return $this->vendas->sum('comissao');
    }

    public function vendas()
    {
        return $this->hasMany(Venda::class);
    }
}
