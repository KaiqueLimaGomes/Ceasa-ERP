@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Novo Carregamento</h1>

        <form action="{{ route('carregamentos.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="data">Data do Carregamento:</label>
                <input type="date" name="data" id="data" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="produtor_id">Produtor:</label>
                <select name="produtor_id" id="produtor_id" class="form-control" required>
                    <option value="">Selecione um produtor</option>
                    @foreach ($produtores as $produtor)
                        <option value="{{ $produtor->id }}">{{ $produtor->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div id="verduras-container">
                <div class="form-group">
                    <label for="verdura_id_0">Verdura:</label>
                    <select name="verdura_id[]" id="verdura_id_0" class="form-control" required>
                        <option value="">Selecione uma verdura</option>
                        @foreach ($verduras as $verdura)
                            <option value="{{ $verdura->id }}">{{ $verdura->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="quantidade_0">Quantidade de Caixas:</label>
                    <input type="number" name="quantidade[]" id="quantidade_0" class="form-control" required>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addVerdura()">Adicionar Verdura</button>

            <button type="submit" class="btn btn-success">Salvar Carregamento</button>
            <a href="{{ route('carregamentos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script>
        let verduraCount = 1;

        function addVerdura() {
            const container = document.getElementById('verduras-container');

            const div = document.createElement('div');
            div.className = 'form-group';

            const verduraLabel = document.createElement('label');
            verduraLabel.textContent = 'Verdura:';
            div.appendChild(verduraLabel);

            const select = document.createElement('select');
            select.name = `verdura_id[]`;
            select.className = 'form-control';
            select.required = true;

            const option = document.createElement('option');
            option.value = '';
            option.textContent = 'Selecione uma verdura';
            select.appendChild(option);

            @foreach ($verduras as $verdura)
                const option{{ $verdura->id }} = document.createElement('option');
                option{{ $verdura->id }}.value = '{{ $verdura->id }}';
                option{{ $verdura->id }}.textContent = '{{ $verdura->nome }}';
                select.appendChild(option{{ $verdura->id }});
            @endforeach

            div.appendChild(select);
            container.appendChild(div);

            const quantidadeDiv = document.createElement('div');
            quantidadeDiv.className = 'form-group';

            const quantidadeLabel = document.createElement('label');
            quantidadeLabel.textContent = 'Quantidade de Caixas:';
            quantidadeDiv.appendChild(quantidadeLabel);
            const quantidadeInput = document.createElement('input');
            quantidadeInput.type = 'number';
            quantidadeInput.name = 'quantidade[]';
            quantidadeInput.className = 'form-control';
            quantidadeInput.required = true;
            quantidadeDiv.appendChild(quantidadeInput);

            container.appendChild(quantidadeDiv);

            verduraCount++;
        }
    </script>
@endsection