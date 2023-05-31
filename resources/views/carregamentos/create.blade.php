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
                <div class="ponto">
                    <div class="form-group">
                        <label for="produtor">Produtor:</label>
                        <input type="text" name="produtor[]" class="form-control" required>
                    </div>

                    <div class="verduras-group">
                        <div class="form-group">
                            <label for="verdura">Verdura:</label>
                            <input type="text" name="verdura[0][]" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="quantidade">Quantidade de Caixas:</label>
                            <input type="number" name="quantidade[0][]" class="form-control" required>
                        </div>
                    </div>

                    <button type="button" class="btn btn-primary" onclick="adicionarVerdura(this)">Adicionar Verdura</button>

                </div>
            </div>

            <button type="button" class="btn btn-primary" onclick="addPonto()">Adicionar Ponto de Carregamento</button>

            <button type="submit" class="btn btn-success">Salvar Carregamento</button>
        </form>

        <div id="carregamentos-list">
            <h2>Lista de Carregamentos</h2>

            <ul>
                @foreach ($carregamentos as $carregamento)
                    <li>
                        Data do Carregamento: {{ $carregamento->data }}
                        <ul>
                            @foreach ($carregamento->pontos as $ponto)
                                <li>
                                    Produtor: {{ $ponto->produtor }}
                                    <ul>
                                        @foreach ($ponto->verduras as $verdura)
                                            <li>
                                                Verdura: {{ $verdura->nome }}
                                                Quantidade de Caixas: {{ $verdura->quantidade }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <script>
        let pontoCounter = 1;

        function addPonto() {
            const pontosContainer = document.getElementById('pontos-container');

            const novoPonto = document.createElement('div');
            novoPonto.classList.add('ponto');

            const produtorLabel = document.createElement('label');
            produtorLabel.textContent = 'Produtor:';
            const produtorInput = document.createElement('input');
            produtorInput.type = 'text';
            produtorInput.name = 'produtor[]';
            produtorInput.classList.add('form-control');
            produtorInput.required = true;

            const verdurasGroup = document.createElement('div');
            verdurasGroup.classList.add('verduras-group');
            const primeiraVerdura = criarVerduraGrupo();

            const adicionarVerduraButton = document.createElement('button');
            adicionarVerduraButton.type = 'button';
            adicionarVerduraButton.classList.add('btn', 'btn-primary');
            adicionarVerduraButton.textContent = 'Adicionar Verdura';
            adicionarVerduraButton.addEventListener('click', function() {
                adicionarVerdura(this);
            });

            novoPonto.appendChild(produtorLabel);
            novoPonto.appendChild(produtorInput);
            novoPonto.appendChild(verdurasGroup);
            novoPonto.appendChild(primeiraVerdura);
            novoPonto.appendChild(adicionarVerduraButton);

            pontosContainer.appendChild(novoPonto);

            pontoCounter++;
        }

        function adicionarVerdura(button) {
            const ponto = button.closest('.ponto');
            const verdurasGroup = ponto.querySelector('.verduras-group');

            const novaVerdura = criarVerduraGrupo();

            verdurasGroup.appendChild(novaVerdura);
        }

        function criarVerduraGrupo() {
            const verduraGroup = document.createElement('div');
            verduraGroup.classList.add('verdura-group');

            const verduraLabel = document.createElement('label');
            verduraLabel.textContent = 'Verdura:';
            const verduraInput = document.createElement('input');
            verduraInput.type = 'text';
            verduraInput.name = `verdura[${pontoCounter - 1}][]`;
            verduraInput.classList.add('form-control');
            verduraInput.required = true;

            const quantidadeLabel = document.createElement('label');
            quantidadeLabel.textContent = 'Quantidade de Caixas:';
            const quantidadeInput = document.createElement('input');
            quantidadeInput.type = 'number';
            quantidadeInput.name = `quantidade[${pontoCounter - 1}][]`;
            quantidadeInput.classList.add('form-control');
            quantidadeInput.required = true;

            verduraGroup.appendChild(verduraLabel);
            verduraGroup.appendChild(verduraInput);
            verduraGroup.appendChild(quantidadeLabel);
            verduraGroup.appendChild(quantidadeInput);

            return verduraGroup;
        }
    </script>
@endsection
