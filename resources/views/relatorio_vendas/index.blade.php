@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Relatórios de Vendas</h1>

        <a href="{{ route('relatorio_vendas.create') }}" class="btn btn-primary mb-3">Criar Novo Relatório</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($relatoriosVendas as $relatorioVendas)
                    <tr>
                        <td>{{ $relatorioVendas->data }}</td>
                        <td>{{ $relatorioVendas->descricao }}</td>
                        <td>
                            <a href="{{ route('relatorio_vendas.edit', $relatorioVendas->id) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('relatorio_vendas.destroy', $relatorioVendas->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este relatório?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
