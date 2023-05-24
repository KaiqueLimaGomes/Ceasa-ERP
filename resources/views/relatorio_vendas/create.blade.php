@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Criar Relatório de Vendas</h1>

        <form action="{{ route('relatorio_vendas.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" name="data" required>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">Descrição</label>
                <textarea class="form-control" id="descricao" name="descricao" required></textarea>
            </div>

            <div class="mb-3">
                <label for="historico_precos" class="form-label">Histórico de Preços</label>
                <textarea class="form-control" id="historico_precos" name="historico_precos" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
