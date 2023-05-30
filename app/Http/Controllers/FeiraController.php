<?php

namespace App\Http\Controllers;

use App\Models\Carregamento;
use App\Models\Estoque;
use App\Models\Feira;
use Illuminate\Http\Request;

class FeiraController extends Controller
{
    public function index()
    {
        $feiras = Feira::all();
        return view('feiras.index', compact('feiras'));
    }

    public function create()
    {
        $carregamentos = Carregamento::all();
        return view('feiras.create', compact('carregamentos'));
        //$estoques = Estoque::all(); // Obtém todos os estoques do banco de dados

        //$estoque = Estoque::all();
        //return view('feiras.create', compact('carregamentos'));
    }

    public function store(Request $request)
    {
        $feira = new Feira();
        $feira->data = $request->input('data');
        $feira->carregamento_id = $request->input('carregamento_id');
        $feira->save();

        return redirect()->route('feiras.index')->with('success', 'Feira criada com sucesso.');
    }

    public function edit(Feira $feira)
    {
        $carregamentos = Carregamento::all();
        return view('feiras.edit', compact('feira', 'carregamentos'));
    }

    public function update(Request $request, Feira $feira)
    {
        $feira->data = $request->input('data');
        $feira->carregamento_id = $request->input('carregamento_id');
        $feira->save();

        return redirect()->route('feiras.index')->with('success', 'Feira atualizada com sucesso.');
    }

    public function destroy(Feira $feira)
    {
        $feira->delete();

        return redirect()->route('feiras.index')->with('success', 'Feira excluída com sucesso.');
    }

    
}
