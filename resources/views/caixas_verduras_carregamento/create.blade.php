@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Adicionar Caixa por Verdura no Carregamento</h1>

        <form action="{{ route('caixas_verduras_carregamento.store', $carregamento) }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="produtor_id">Produtor:</label>
                <select name="produtor_id" id="produtor_id" class="form-control" required>
                    <option value="">Selecione um produtor</option>
                    @foreach ($produtores as $produtor)
                        <option value="{{ $produtor->id }}">{{ $produtor->nome }}</option>
                    @endforeach
                </select>
            </div>

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
            <a href="{{ route('carregamentos.show', $carregamento) }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
