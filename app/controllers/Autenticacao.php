<?php
namespace App\Controllers;

use App\Controllers\ControladorCore;
use App\Models\Usuario;
use App\Models\BD\UsuarioDao;

class Autenticacao extends ControladorCore {
    
    public function entrar() {
        if ($this->estaLogado()) {
            header("Location:".BASE_URL);

        } else {
            $nomeUsuario = $_POST["usuario"] ?? null;
            $senha = $_POST["senha"] ?? null;

            if (!empty($nomeUsuario) && !empty($senha)) {
                $uDAO = new UsuarioDao();
                $usuario = $uDAO->login($nomeUsuario, $senha);

                if (!empty($usuario)) {
                    $this->logarUsuario($usuario);
                    header("Location: ".BASE_URL."/produtos");
                    return;

                } else {
                    $_SESSION["erro"] = "Login incorreto";
                }
            } else {
                $_SESSION["erro"] = "Informe todos os dados";
            }
            header("Location: ".BASE_URL);
        }
    }

    public function logout() {
        $this->deslogarUsuario();
        header("Location:".BASE_URL);
    }
}
