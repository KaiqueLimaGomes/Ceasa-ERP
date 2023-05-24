<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP de Vendas de Verduras</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="{{ route('carregamentos.index') }}">Carregamentos</a></li>
                <li><a href="{{ route('estoque.index') }}">Estoque</a></li>
                <li><a href="{{ route('feiras.index') }}">Feiras</a></li>
                <li><a href="{{ route('vendas.index') }}">Vendas</a></li>
                <li><a href="{{ route('relatorio-vendas.index') }}">Relatório de Vendas</a></li>
                <li><a href="{{ route('usuarios.index') }}">Usuários</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} ERP de Vendas de Verduras. Todos os direitos reservados.</p>
    </footer>
    
    <script src="{{ asset('js/script.js') }}"></script>
    
</body>
</html>
