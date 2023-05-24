@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Feira</h1>

        <form action="{{ route('feiras.update', $feira->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="data">Data da Feira:</label>
                <input type="date" name="data" id="data" class="form-control" value="{{ $feira->data }}" required>
            </div>

            <div class="form-group">
                <label for="estoque_id">Estoque:</label>
                <select name="estoque_id" id="estoque_id" class="form-control" required>
                    <option value="">Selecione um estoque</option>
                    @foreach ($estoques as $estoque)
                        <option value="{{ $estoque->id }}" {{ $estoque->id == $feira->estoque_id ? 'selected' : '' }}>{{ $estoque->data }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('feiras.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
