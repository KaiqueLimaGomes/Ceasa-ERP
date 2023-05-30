<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtor extends Model
{
    use HasFactory;
    protected $table = 'produtores';

    protected $fillable = [
        'nome',
        'endereco',
        'telefone',
    ];

    // Relacionamento com Carregamento
    public function carregamentos()
    {
        return $this->belongsToMany(Carregamento::class)->withPivot('quantidade');
    }

    public function produtores()
    {
        return $this->belongsToMany(Produtor::class);
    }
}
