@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Adicionar Estoque Carregado no Caminhão</h1>

        <form action="{{ route('estoque.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="verdura_id">Verdura:</label>
                <select name="verdura_id" id="verdura_id" class="form-control" required>
                    <option value="">Selecione uma verdura</option>
                    @foreach ($verduras as $verdura)
                        <option value="{{ $verdura->id }}">{{ $verdura->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="quantidade">Quantidade de Caixas:</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Adicionar</button>
            <a href="{{ route('estoque.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
