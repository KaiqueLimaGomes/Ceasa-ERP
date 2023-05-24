<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use Illuminate\Http\Request;

class RelatorioVendasController extends Controller
{
    public function index()
    {
        $vendas = Venda::all();
        return view('relatorios.vendas.index', compact('vendas'));
    }

    public function show(Venda $venda)
    {
        return view('relatorios.vendas.show', compact('venda'));
    }
}
