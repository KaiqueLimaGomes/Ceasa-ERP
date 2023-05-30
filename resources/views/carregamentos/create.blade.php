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

            <div id="pontos-container">
                <div class="ponto-group">
                    <div class="form-group">
                        <label for="produtor">Produtor:</label>
                        <input type="text" name="produtor[]" class="form-control" required>
                    </div>

                    <div class="verduras-container">
                        <div class="verdura-group">
                            <div class="form-group">
                                <label for="verdura">Verdura:</label>
                                <input type="text" name="verdura[]" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="quantidade">Quantidade de Caixas:</label>
                                <input type="number" name="quantidade[]" class="form-control" required>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary" onclick="addVerdura(this)">Adicionar Verdura</button>
                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addPonto()">Adicionar Ponto de Coleta</button>

            <button type="submit" class="btn btn-success">Salvar Carregamento</button>
        </form>
    </div>

    <script>
        function addVerdura(btn) {
            var pontoGroup = btn.closest('.ponto-group');
            var verdurasContainer = pontoGroup.querySelector('.verduras-container');

            var novaVerdura = document.createElement('div');
            novaVerdura.classList.add('verdura-group');

            var verduraLabel = document.createElement('label');
            verduraLabel.textContent = 'Verdura:';
            novaVerdura.appendChild(verduraLabel);

            var verduraInput = document.createElement('input');
            verduraInput.type = 'text';
            verduraInput.name = 'verdura[]';
            verduraInput.classList.add('form-control');
            verduraInput.required = true;
            novaVerdura.appendChild(verduraInput);

            var quantidadeLabel = document.createElement('label');
            quantidadeLabel.textContent = 'Quantidade de Caixas:';
            novaVerdura.appendChild(quantidadeLabel);

            var quantidadeInput = document.createElement('input');
            quantidadeInput.type = 'number';
            quantidadeInput.name = 'quantidade[]';
            quantidadeInput.classList.add('form-control');
            quantidadeInput.required = true;
            novaVerdura.appendChild(quantidadeInput);

            verdurasContainer.appendChild(novaVerdura);
        }

        function addPonto() {
            var pontosContainer = document.getElementById('pontos-container');

            var novoPonto = document.createElement('div');
            novoPonto.classList.add('ponto-group');

            var produtorLabel = document.createElement('label');
            produtorLabel.textContent = 'Produtor:';
            novoPonto.appendChild(produtorLabel);

            var produtorInput = document.createElement('input');
            produtorInput.type = 'text';

            produtorInput.name = 'produtor[]';
            produtorInput.classList.add('form-control');
            produtorInput.required = true;
            novoPonto.appendChild(produtorInput);

            var verdurasContainer = document.createElement('div');
            verdurasContainer.classList.add('verduras-container');

            var novaVerdura = document.createElement('div');
            novaVerdura.classList.add('verdura-group');

            var verduraLabel = document.createElement('label');
            verduraLabel.textContent = 'Verdura:';
            novaVerdura.appendChild(verduraLabel);

            var verduraInput = document.createElement('input');
            verduraInput.type = 'text';
            verduraInput.name = 'verdura[]';
            verduraInput.classList.add('form-control');
            verduraInput.required = true;
            novaVerdura.appendChild(verduraInput);

            var quantidadeLabel = document.createElement('label');
            quantidadeLabel.textContent = 'Quantidade de Caixas:';
            novaVerdura.appendChild(quantidadeLabel);

            var quantidadeInput = document.createElement('input');
            quantidadeInput.type = 'number';
            quantidadeInput.name = 'quantidade[]';
            quantidadeInput.classList.add('form-control');
            quantidadeInput.required = true;
            novaVerdura.appendChild(quantidadeInput);

            verdurasContainer.appendChild(novaVerdura);
            novoPonto.appendChild(verdurasContainer);

            var addVerduraButton = document.createElement('button');
            addVerduraButton.type = 'button';
            addVerduraButton.classList.add('btn', 'btn-primary');
            addVerduraButton.textContent = 'Adicionar Verdura';
            addVerduraButton.onclick = function() {
                addVerdura(this);
            };
            novoPonto.appendChild(addVerduraButton);

            pontosContainer.appendChild(novoPonto);
        }
    </script>
@endsection
