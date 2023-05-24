<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feira extends Model
{
    protected $fillable = [
        'data',
        'estoque_id',
    ];

    public function estoque()
    {
        return $this->belongsTo(Estoque::class);
    }
}
