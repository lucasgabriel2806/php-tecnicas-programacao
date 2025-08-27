<?php

require_once "Models/Usuarios.class.php";

class UsuarioController {

    public function login() {

        echo "Estou no login do usuarioController";

        // require views formulario
        if ($_POST) {
            // verificar os dados do 
            // verificar no banco se existe esse usuário
        }

    }

    public function inserir() {

        $msg = array("", "", "", "");

        $erro = false;


        if ($_POST) {

            if(empty($_POST["nome"])){

                $msg[0] = "* Nome obrigatório";

                $erro = true;

            }

            if(empty($_POST["email"])) {

                $msg[1] = "* E-mail obrigatório";

                $erro = true;

            } else {
                // verificar se já não tem um usuario com esse email
                $usuario = new Usuarios(email: $_POST["email"]);

            }

            if(empty($_POST["senha"])) {

                $msg[2] = "* Senha obrigatória";

                $erro = true;

            }

            if(empty($_POST["celular"])) {

                $msg[3] = "* Número de celular obrigatório";

                $erro = true;

            }
            if(!$erro) {

                $usuario = new Usuarios(0, $_POST["nome"], $_POST["email"], $_POST["senha"], $_POST["celular"]);

            }

        }

        require_once "Views/form_usuario.php";

    }

}

?>