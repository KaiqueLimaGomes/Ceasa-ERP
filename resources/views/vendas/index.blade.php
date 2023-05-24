@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Vendas</h1>

        <div class="mb-3">
            <a href="{{ route('vendas.create') }}" class="btn btn-primary">Nova Venda</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Cliente</th>
                    <th>Verdura</th>
                    <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Local de Entrega</th>
                    <th>Observação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendas as $venda)
                    <tr>
                        <td>{{ $venda->data }}</td>
                        <td>{{ $venda->cliente }}</td>
                        <td>{{ $venda->verdura }}</td>
                        <td>{{ $venda->quantidade }}</td>
                        <td>{{ $venda->valor }}</td>
                        <td>{{ $venda->local_entrega }}</td>
                        <td>{{ $venda->observacao }}</td>
                        <td>
                            <a href="{{ route('vendas.edit', $venda->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('vendas.destroy', $venda->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
