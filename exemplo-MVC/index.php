<?php

    if($_GET) {

        // outras rotas

        $controle = $_GET["controle"];
        $metodo = $_GET["metodo"];

        require_once "Controllers/$controle.class.php";

        $obj = new $controle();

        $obj->$metodo;

    }
    else {

        // rota inicial
        require_once 
        "Controllers/InicioController.class.php";

        $obj = new InicioController();

        $obj->inicio();

    }

?>