<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $fillable = ['valor', 'vendedor_id'];
    protected $dates = ['created_at', 'updated_at'];
    protected $appends = ['comissao'];

    public function getComissaoAttribute()
    {
        return $this->valor * 0.085;
    }

    public function vendedor()
    {
        return $this->belongsTo(Vendedor::class);
    }
}
