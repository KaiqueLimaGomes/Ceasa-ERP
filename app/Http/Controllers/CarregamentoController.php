<?php

namespace App\Http\Controllers;

use App\Models\Carregamento;
use App\Models\Produtor;
use Illuminate\Http\Request;

class CarregamentoController extends Controller
{
    public function index()
    {
        $carregamentos = Carregamento::all();
        return view('carregamentos.index', compact('carregamentos'));
    }

    public function create()
    {
        $produtores = Produtor::all();
        return view('carregamentos.create', compact('produtores'));
    }

    public function store(Request $request)
    {
        $carregamento = new Carregamento();
        $carregamento->data = $request->input('data');
        $carregamento->save();

        foreach ($request->input('caixas') as $produtorId => $quantidade) {
            $carregamento->produtores()->attach($produtorId, ['quantidade' => $quantidade]);
        }

        return redirect()->route('carregamentos.index')->with('success', 'Carregamento salvo com sucesso.');
    }

    public function edit(Carregamento $carregamento)
    {
        $produtores = Produtor::all();
        return view('carregamentos.edit', compact('carregamento', 'produtores'));
    }

    public function update(Request $request, Carregamento $carregamento)
    {
        $carregamento->data = $request->input('data');
        $carregamento->save();

        $carregamento->produtores()->detach();
        foreach ($request->input('caixas') as $produtorId => $quantidade) {
            $carregamento->produtores()->attach($produtorId, ['quantidade' => $quantidade]);
        }

        return redirect()->route('carregamentos.index')->with('success', 'Carregamento atualizado com sucesso.');
    }

    public function destroy(Carregamento $carregamento)
    {
        $carregamento->produtores()->detach();
        $carregamento->delete();

        return redirect()->route('carregamentos.index')->with('success', 'Carregamento excluído com sucesso.');
    }
}
