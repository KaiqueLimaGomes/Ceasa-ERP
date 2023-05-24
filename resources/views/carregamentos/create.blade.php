@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Novo Carregamento</h1>

        <form action="{{ route('carregamentos.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="data">Data:</label>
                <input type="date" name="data" id="data" class="form-control" required>
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
                    @foreach ($produtores as $produtor)
                        <tr>
                            <td>{{ $produtor->nome }}</td>
                            <td>
                                <select name="verduras[{{ $produtor->id }}]" class="form-control">
                                    @foreach ($produtor->verduras as $verdura)
                                        <option value="{{ $verdura->id }}">{{ $verdura->nome }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input type="number" name="caixas[{{ $produtor->id }}]" class="form-control" required>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('carregamentos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
