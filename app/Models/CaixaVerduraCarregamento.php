<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaixaVerduraCarregamento extends Model
{
    protected $fillable = [
        'carregamento_id',
        'produtor',
        'verdura',
        'quantidade_caixas',
    ];

    public function carregamento()
    {
        return $this->belongsTo(Carregamento::class);
    }
}
