@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Estoque Carregado no Caminhão</h1>

        <form action="{{ route('estoque.update', $estoque->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="verdura_id">Verdura:</label>
                <select name="verdura_id" id="verdura_id" class="form-control" required>
                    <option value="">Selecione uma verdura</option>
                    @foreach ($verduras as $verdura)
                        <option value="{{ $verdura->id }}" {{ $verdura->id == $estoque->verdura_id ? 'selected' : '' }}>{{ $verdura->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade de Caixas:</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" value="{{ $estoque->quantidade }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('estoque.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
