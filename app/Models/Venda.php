<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $fillable = [
        'feira_id',
        'cliente_id',
        'produto_id',
        'quantidade',
        'valor',
        'local_entrega',
        'observacao',
    ];

    public function feira()
    {
        return $this->belongsTo(Feira::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
