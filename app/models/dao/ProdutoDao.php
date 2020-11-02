<?php
namespace App\Models\BD;

use App\Models\Produto;
use PDO;

class ProdutoDao extends Dao {

    public function __construct() {
        parent::__construct();
    }

    public function produtos() : array {
        try {
            $sql = "SELECT * FROM tb_produto";

            $req = $this->pdo->prepare($sql);
            $req->execute();

            $resultado = $req->fetch(PDO::FETCH_ASSOC);

            if (!empty($resultado)) {
                $array = array();
                while($linha = $resultado -> fetch_assoc() ){
                    $array[]  = new Produto( $linha["codigo"], $linha["descricao"], $linha["preco"], $linha["foto"]);
                }
                return $array;
            }

        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        return null;
    }
}