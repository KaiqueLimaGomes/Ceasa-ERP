<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
    ];

    public function estoques()
    {
        return $this->hasMany(Estoque::class);
    }

    public function vendas()
    {
        return $this->hasMany(Venda::class);
    }

    public function relatoriosVendas()
    {
        return $this->hasMany(RelatorioVendas::class);
    }
}
