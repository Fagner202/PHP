<?php

// Autoload das classes usando Composer
require_once __DIR__ . '/../vendor/autoload.php';

// Configuração e inicialização do aplicativo
require_once __DIR__ . '/../app/config/config.php';
require_once __DIR__ . '/../app/core/App.php';

// Inicializa o aplicativo
$app = new App();

// Roteamento
// Exemplo básico: http://seusite.com/index.php/controller/metodo/parametro1/parametro2
