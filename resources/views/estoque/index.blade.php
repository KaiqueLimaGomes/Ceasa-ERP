@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Estoque Carregado no Caminhão</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Verdura</th>
                    <th>Quantidade de Caixas</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estoque as $item)
                    <tr>
                        <td>{{ $item->verdura->nome }}</td>
                        <td>{{ $item->quantidade }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
