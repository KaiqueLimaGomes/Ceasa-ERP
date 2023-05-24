@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Feiras</h1>

        <div class="mb-3">
            <a href="{{ route('feiras.create') }}" class="btn btn-primary">Nova Feira</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Estoque</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($feiras as $feira)
                    <tr>
                        <td>{{ $feira->data }}</td>
                        <td>{{ $feira->estoque->data }}</td>
                        <td>
                            <a href="{{ route('feiras.edit', $feira->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('feiras.destroy', $feira->id) }}" method="POST" class="d-inline">
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
