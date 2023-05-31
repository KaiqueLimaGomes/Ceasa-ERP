<?php

namespace App\Http\Controllers;

use App\Models\Carregamento;
use App\Models\PontoCarregamento;
use App\Models\Verdura;
use Illuminate\Http\Request;

class PontoCarregamentoController extends Controller
{
    public function store(Request $request, Carregamento $carregamento)
    {
        $pontoCarregamento = new PontoCarregamento();
        $pontoCarregamento->produtor = $request->input('produtor');
        $pontoCarregamento->carregamento()->associate($carregamento);
        $pontoCarregamento->save();

        $verduras = $request->input('verdura');
        $quantidades = $request->input('quantidade');

        for ($i = 0; $i < count($verduras); $i++) {
            $verdura = new Verdura();
            $verdura->nome = $verduras[$i];
            $verdura->quantidade = $quantidades[$i];
            $verdura->pontoCarregamento()->associate($pontoCarregamento);
            $verdura->save();
        }

        return redirect()->back()->with('success', 'Ponto de Carregamento adicionado com sucesso.');
    }
}
