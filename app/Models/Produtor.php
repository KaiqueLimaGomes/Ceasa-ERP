<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtor extends Model
{
    protected $table = 'produtores';

    protected $fillable = [
        'nome',
        'endereco',
        'telefone',
    ];

    public function carregamentos()
    {
        return $this->hasMany(Carregamento::class);
    }
}
