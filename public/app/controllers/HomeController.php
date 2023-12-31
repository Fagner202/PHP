<?php

class HomeController
{
    public function index()
    {
        echo('lakf');
        // Lógica de negócios

        // Carrega a visualização
        require_once __DIR__ . '/../views/home/index.phtml';
    }
}
