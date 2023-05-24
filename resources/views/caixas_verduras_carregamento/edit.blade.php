@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Caixa por Verdura no Carregamento</h1>

        <form action="{{ route('caixas_verduras_carregamento.update', [$carregamento, $caixaVerdura]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="quantidade">Quantidade de Caixas:</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" value="{{ $caixaVerdura->quantidade }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('carregamentos.show', $carregamento) }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
