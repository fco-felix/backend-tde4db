<?php
namespace App\Controllers;

use App\Controllers\ControladorCore;
use App\Models\BD\ProdutoDao;

class Paginas extends ControladorCore {
    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if ($this->estaLogado()) {
            header("Location:".BASE_URL."/produtos");

        } else {
            $this->addTituloPagina("Página Login");
            $this->carregarPagina("home");
        }
    }

    public function produtos() {
        if (!$this->estaLogado()) {
            header("Location:".BASE_URL);

        } else {
            $pDAO = new ProdutoDao();

            $this->addTituloPagina("Listar Produtos");
            
            $this->addDadosPagina(
                "produtos",
                $pDAO->produtos() 
            );

            $this->carregarPagina("produtos");
        }
    }
    
    public function sobre() {
        echo __FUNCTION__;
    }

    public function erro404() {
        $this->carregarPagina("erro404");
    }
}
