<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP de Vendas de Verduras</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('site/bootstrap.css')}}">

</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Início</a></li>
                <li><a href="/carregamentos">Carregamentos</a></li>
                <li><a href="/estoque">Estoque</a></li>
                <li><a href="/feiras">Feiras</a></li>
                <li><a href="/vendas">Vendas</a></li>
                <li><a href="/relatorio-vendas">Relatório de Vendas</a></li>
            </ul>
        </nav>
        <button type="button" class="btn btn-primary">Primary</button>
    </header>
    <main>
        <h1>Bem-vindo ao ERP de Vendas de Verduras</h1>
        <p>Este é um sistema para o gerenciamento de vendas de verduras. Aqui você pode realizar o controle de
            carregamentos, estoque, feiras, vendas e obter relatórios de vendas.</p>
    </main>
    <div class="footer">
        <p>ERP de Vendas de Verduras &copy; 2023. Todos os direitos reservados.</p>
    </div>

    <script src="{{asset('site/jquery.js')}}"></script>
    <script src="{{asset('site/bootstrap.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</body>

</html>
