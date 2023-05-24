<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'telefone',
    ];

    public function carregamentos()
    {
        return $this->hasMany(Carregamento::class);
    }
}
