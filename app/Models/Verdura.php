<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verdura extends Model
{
    use HasFactory;

    protected $table = 'verduras';

    protected $fillable = [
        'nome',
        'quantidade_caixas',
    ];

    // Relacionamento com a tabela Carregamento
    public function carregamentos()
    {
        return $this->belongsToMany(Carregamento::class, 'carregamento_verdura', 'verdura_id', 'carregamento_id')
            ->withPivot('quantidade_caixas');
    }
}
