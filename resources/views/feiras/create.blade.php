@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Criar Nova Feira</h1>

        <form action="{{ route('feiras.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="data">Data da Feira:</label>
                <input type="date" name="data" id="data" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="estoque_id">Estoque:</label>
                <select name="estoque_id" id="estoque_id" class="form-control" required>
                    <option value="">Selecione um estoque</option>
                    @foreach ($carregamentos as $carregamentos)
                    <option value="{{ $carregamentos->id }}">{{ $carregamentos->data }}</option>
                @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="{{ route('feiras.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
