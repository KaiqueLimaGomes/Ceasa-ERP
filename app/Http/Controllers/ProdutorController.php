<?php

namespace App\Http\Controllers;

use App\Models\Produtor;
use Illuminate\Http\Request;

class ProdutorController extends Controller
{
    public function index()
    {
        $produtores = Produtor::all();
        return view('produtores.index', compact('produtores'));
    }

    public function create()
    {
        return view('produtores.create');
    }

    public function store(Request $request)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            // Adicione aqui as validações para os demais campos
        ]);

        // Criação do produtor
        $produtor = Produtor::create($validatedData);

        // Redirecionamento para a página de exibição ou outra rota desejada
        return redirect()->route('produtores.show', $produtor->id)->with('success', 'Produtor criado com sucesso.');
    }

    public function show(Produtor $produtor)
    {
        return view('produtores.show', compact('produtor'));
    }

    public function edit(Produtor $produtor)
    {
        return view('produtores.edit', compact('produtor'));
    }

    public function update(Request $request, Produtor $produtor)
    {
        // Validação dos dados do formulário
        $validatedData = $request->validate([
            'nome' => 'required|max:255',
            // Adicione aqui as validações para os demais campos
        ]);

        // Atualização do produtor
        $produtor->update($validatedData);

        // Redirecionamento para a página de exibição ou outra rota desejada
        return redirect()->route('produtores.show', $produtor->id)->with('success', 'Produtor atualizado com sucesso.');
    }

    public function destroy(Produtor $produtor)
    {
        $produtor->delete();

        // Redirecionamento para a página de listagem ou outra rota desejada
        return redirect()->route('produtores.index')->with('success', 'Produtor excluído com sucesso.');
    }
}
