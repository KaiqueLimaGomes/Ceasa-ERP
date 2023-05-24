<?php

namespace App\Http\Controllers;

use App\Models\CaixaVerduraCarregamento;
use Illuminate\Http\Request;

class CaixaVerduraCarregamentoController extends Controller
{
    public function store(Request $request)
    {
        $caixaVerduraCarregamento = new CaixaVerduraCarregamento();
        $caixaVerduraCarregamento->carregamento_id = $request->input('carregamento_id');
        $caixaVerduraCarregamento->verdura_id = $request->input('verdura_id');
        $caixaVerduraCarregamento->quantidade = $request->input('quantidade');
        $caixaVerduraCarregamento->save();

        return redirect()->back()->with('success', 'Caixa de verdura adicionada com sucesso.');
    }

    public function update(Request $request, CaixaVerduraCarregamento $caixaVerduraCarregamento)
    {
        $caixaVerduraCarregamento->quantidade = $request->input('quantidade');
        $caixaVerduraCarregamento->save();

        return redirect()->back()->with('success', 'Quantidade de caixa de verdura atualizada com sucesso.');
    }

    public function destroy(CaixaVerduraCarregamento $caixaVerduraCarregamento)
    {
        $caixaVerduraCarregamento->delete();

        return redirect()->back()->with('success', 'Caixa de verdura removida com sucesso.');
    }
}
