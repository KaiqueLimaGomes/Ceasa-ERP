<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Carrega o arquivo de autoloading do Composer
require __DIR__ . '/../vendor/autoload.php';

// Cria uma instância da aplicação Laravel
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Obtém uma instância do kernel HTTP do Laravel
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Manipula a requisição HTTP através do kernel do Laravel
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

// Envia a resposta HTTP para o navegador
$response->send();

// Termina a execução da aplicação
$kernel->terminate($request, $response);

