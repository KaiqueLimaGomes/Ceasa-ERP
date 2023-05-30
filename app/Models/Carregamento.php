<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carregamento extends Model
{
    protected $fillable = [
        'data',
    ];

    public function caixasVerdurasCarregamento()
    {
        return $this->hasMany(CaixaVerduraCarregamento::class);
    }

    public function produtores()
    {
        return $this->belongsToMany(Produtor::class, 'carregamento_produtor')->withPivot('quantidade');
    }
}
