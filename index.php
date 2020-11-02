<?php
session_start();

error_reporting(E_ALL);
//ini_set('error_reporting', E_ALL);

require_once "vendor/autoload.php";

/* Inclui o arquivo com as constantes que poderão ser acessadas em toda a aplicação */
require_once dirname(__FILE__)."/app/config/constantes.php";

/* Carrega o arquivo de rotas */
require_once PATH_APP."/config/rotas.php";

/* Carrega o arquivo de conf. do banco */
require_once PATH_APP."/config/banco.php";

/* Classe que intercepta a requisição e encaminha para o controlador adequado */
use App\Init;

Init::getInstancia($rotas); // A variável $rotas está no arquivo app/config/rotas.php chamado via require_once