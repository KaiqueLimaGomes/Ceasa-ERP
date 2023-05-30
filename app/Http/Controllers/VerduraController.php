<?php

namespace App\Http\Controllers;

use App\Models\Verdura;
use Illuminate\Http\Request;

class VerduraController extends Controller
{
    public function create()
    {
        return view('verduras.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string',
            'quantidade_caixas' => 'required|integer',
        ]);

        Verdura::create($data);

        return redirect()->route('verduras.index')->with('success', 'Verdura criada com sucesso.');
    }

    public function edit(Verdura $verdura)
    {
        return view('verduras.edit', compact('verdura'));
    }

    public function update(Request $request, Verdura $verdura)
    {
        $data = $request->validate([
            'nome' => 'required|string',
            'quantidade_caixas' => 'required|integer',
        ]);

        $verdura->update($data);

        return redirect()->route('verduras.index')->with('success', 'Verdura atualizada com sucesso.');
    }

    public function destroy(Verdura $verdura)
    {
        $verdura->delete();

        return redirect()->route('verduras.index')->with('success', 'Verdura excluída com sucesso.');
    }
}
