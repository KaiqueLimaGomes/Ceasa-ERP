<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Carregamento;
use App\Models\Verdura;

class PontoCarregamento extends Model
{
    protected $table = 'pontos_carregamento';

    protected $fillable = [
        'carregamento_id',
        'produtor',
    ];

    public function carregamento()
    {
        return $this->belongsTo(Carregamento::class);
    }

    public function verduras()
    {
        return $this->hasMany(Verdura::class);
    }
}
