@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Carregamentos</h1>

        <a href="{{ route('carregamentos.create') }}" class="btn btn-primary mb-3">Novo Carregamento</a>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($carregamentos as $carregamento)
                    <tr>
                        <td>{{ $carregamento->id }}</td>
                        <td>{{ $carregamento->data }}</td>
                        <td>
                            <a href="{{ route('carregamentos.edit', $carregamento) }}" class="btn btn-sm btn-primary">Editar</a>
                            <form action="{{ route('carregamentos.destroy', $carregamento) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Tem certeza que deseja excluir este carregamento?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
