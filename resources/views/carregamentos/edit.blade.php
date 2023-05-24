@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Carregamento</h1>

        <form action="{{ route('carregamentos.update', $carregamento) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="data">Data:</label>
                <input type="date" name="data" id="data" class="form-control" value="{{ $carregamento->data }}" required>
            </div>

            <h2>Caixas por Verdura</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th>Produtor</th>
                        <th>Verdura</th>
                        <th>Quantidade de Caixas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($carregamento->caixasVerduras as $caixaVerdura)
                        <tr>
                            <td>{{ $caixaVerdura->produtor->nome }}</td>
                            <td>{{ $caixaVerdura->verdura->nome }}</td>
                            <td>
                                <input type="number" name="caixas[{{ $caixaVerdura->id }}]" class="form-control" value="{{ $caixaVerdura->quantidade }}" required>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('carregamentos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
