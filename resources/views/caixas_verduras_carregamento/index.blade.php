@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Caixas por Verdura no Carregamento</h1>

        <a href="{{ route('caixas_verduras_carregamento.create', $carregamento) }}" class="btn btn-primary mb-3">Adicionar Caixa por Verdura</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Produtor</th>
                    <th>Verdura</th>
                    <th>Quantidade de Caixas</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($caixasVerduras as $caixaVerdura)
                    <tr>
                        <td>{{ $caixaVerdura->produtor->nome }}</td>
                        <td>{{ $caixaVerdura->verdura->nome }}</td>
                        <td>{{ $caixaVerdura->quantidade }}</td>
                        <td>
                            <a href="{{ route('caixas_verduras_carregamento.edit', [$carregamento, $caixaVerdura]) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('caixas_verduras_carregamento.destroy', [$carregamento, $caixaVerdura]) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza de que deseja excluir?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
