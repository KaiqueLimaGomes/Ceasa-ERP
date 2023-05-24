<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Estoque;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::all();
        return view('vendas.index', compact('vendas'));
    }

    public function create()
    {
        $estoques = Estoque::all();
        return view('vendas.create', compact('estoques'));
    }

    public function store(Request $request)
    {
        $venda = new Venda();
        $venda->estoque_id = $request->input('estoque_id');
        $venda->verdura_id = $request->input('verdura_id');
        $venda->quantidade = $request->input('quantidade');
        $venda->valor = $request->input('valor');
        $venda->local_entrega = $request->input('local_entrega');
        $venda->observacao = $request->input('observacao');
        $venda->save();

        // Atualiza a quantidade no estoque
        $estoque = Estoque::find($request->input('estoque_id'));
        $estoque->quantidade -= $request->input('quantidade');
        $estoque->save();

        return redirect()->route('vendas.index')->with('success', 'Venda realizada com sucesso.');
    }

    public function destroy(Venda $venda)
    {
        // Restaura a quantidade no estoque
        $estoque = Estoque::find($venda->estoque_id);
        $estoque->quantidade += $venda->quantidade;
        $estoque->save();

        $venda->delete();

        return redirect()->route('vendas.index')->with('success', 'Venda cancelada com sucesso.');
    }
}
