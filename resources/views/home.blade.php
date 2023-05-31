<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP de Vendas de Verduras</title>
    <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">ERP Verduras</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/carregamentos">Carregamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/estoque">Estoque</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/feiras">Feiras</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/vendas">Vendas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/relatorio-vendas">Relatório de Vendas<</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        
        <main>
            <div class="jumbotron">
                <h1 class="display-4">Bem-vindo ao ERP de Vendas de Verduras</h1>
                <p class="lead">Realize o gerenciamento de carregamento de caixas de verduras no caminhão e controle suas vendas.</p>
                <hr class="my-4">
                <p>Selecione uma opção no menu acima para começar.</p>
            </div>
        </main>

        <footer class="mt-5 text-center">
            <p>ERP de Vendas de Verduras &copy; 2023. Todos os direitos reservados.</p>
        </footer>
    </div>

    <script src="{{asset('site/jquery.js')}}"></script>
    <script src="{{asset('site/bootstrap.bundle.js')}}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
