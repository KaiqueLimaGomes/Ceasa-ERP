<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{

    
    public function index()
    {
        $estoque = Estoque::all();
        return view('estoques.index', compact('estoques'));
    }

    public function create()
    {
        return view('estoques.create');
    }

    public function store(Request $request)
    {
        $estoque = new Estoque();
        $estoque->carregamento_id = $request->input('carregamento_id');
        $estoque->save();

        return redirect()->route('estoques.index')->with('success', 'Estoque criado com sucesso.');
    }

    public function edit(Estoque $estoque)
    {
        return view('estoques.edit', compact('estoque'));
    }

    public function update(Request $request, Estoque $estoque)
    {
        $estoque->carregamento_id = $request->input('carregamento_id');
        $estoque->save();

        return redirect()->route('estoques.index')->with('success', 'Estoque atualizado com sucesso.');
    }

    public function destroy(Estoque $estoque)
    {
        $estoque->delete();

        return redirect()->route('estoques.index')->with('success', 'Estoque excluído com sucesso.');
    }
}
