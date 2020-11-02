<?php

/*
    CONFIGURAÇÃO DO ARRAY DE ROTAS:
        - Cada índice do array $rotas corresponde a um endereço de rota que o sistema deverá responder ao acessar via navegador;
        - Em cada uma dessas posições, o array possui outro array com as configurações para essa rota. São elas:
            - rota: indica especificamente a rota da url que deverá ser capturada;
            - controller: indica qual classes que representa um controlador deverá responder a essa rota;
            - metodo: indica o método do controller que deverá processar as informações recebidas do front-end para a rota solicitada
*/

// passo1: http://localhost/meu-site/entrar
// passo2: /entrar

$rotas[""] = array(
    "rota"=>"/", 
    "controller"=>"App\\Controllers\\Paginas", 
    "metodo"=>"index"
);

$rotas["home"] = array(
    "rota"=>"/home", 
    "controller"=>"App\\Controllers\\Paginas", 
    "metodo"=>"index");

$rotas["sobre"] = array(
    "rota"=>"/sobre", 
    "controller"=>"App\\Controllers\\Paginas", 
    "metodo"=>"sobre"
);

$rotas["produtos"] = array(
    "rota"=>"/produtos", 
    "controller"=>"App\\Controllers\\Paginas", 
    "metodo"=>"produtos"
);

$rotas["entrar"] = array(
    "rota"=>"/entrar", 
    "controller"=>"App\\Controllers\\Autenticacao", 
    "metodo"=>"entrar"
);

$rotas["sair"] = array(
    "rota"=>"/sair", 
    "controller"=>"App\\Controllers\\Autenticacao", 
    "metodo"=>"logout"
);

//echo "<pre>".print_r($rotas, true)."</pre>";