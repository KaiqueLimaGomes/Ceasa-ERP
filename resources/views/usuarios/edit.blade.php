@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Usuário</h1>

        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ $usuario->nome }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $usuario->email }}" required>
            </div>

            <div class="form-group">
                <label for="senha">Nova Senha:</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div>

            <div class="form-group">
                <label for="papel">Papel:</label>
                <select name="papel" id="papel" class="form-control" required>
                    <option value="administrador" {{ $usuario->papel == 'administrador' ? 'selected' : '' }}>Administrador</option>
                    <option value="vendedor" {{ $usuario->papel == 'vendedor' ? 'selected' : '' }}>Vendedor</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
@endsection
