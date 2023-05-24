<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RelatorioVendas extends Model
{
    protected $fillable = [
        'feira_id',
        'produto_id',
        'quantidade',
        'preco',
    ];

    public function feira()
    {
        return $this->belongsTo(Feira::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
