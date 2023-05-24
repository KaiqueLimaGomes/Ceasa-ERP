@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Venda</h1>

        <form action="{{ route('vendas.update', $venda->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="data" class="form-label">Data</label>
                <input type="date" class="form-control" id="data" name="data" value="{{ $venda->data }}" required>
            </div>

            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <input type="text" class="form-control" id="cliente" name="cliente" value="{{ $venda->cliente }}" required>
            </div>

            <div class="mb-3">
                <label for="verdura" class="form-label">Verdura</label>
                <input type="text" class="form-control" id="verdura" name="verdura" value="{{ $venda->verdura }}" required>
            </div>

            <div class="mb-3">
                <label for="quantidade" class="form-label">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{ $venda->quantidade }}" required>
            </div>

            <div class="mb-3">
                <label for="valor" class="form-label">Valor</label>
                <input type="text" class="form-control" id="valor" name="valor" value="{{ $venda->valor }}" required>
            </div>

            <div class="mb-3">
                <label for="local_entrega" class="form-label">Local de Entrega</label>
                <input type="text" class="form-control" id="local_entrega" name="local_entrega" value="{{ $venda->local_entrega }}" required>
            </div>

            <div class="mb-3">
                <label for="observacao" class="form-label">Observação</label>
                <textarea class="form-control" id="observacao" name="observacao">{{ $venda->observacao }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
