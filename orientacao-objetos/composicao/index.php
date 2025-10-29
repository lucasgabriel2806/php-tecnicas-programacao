<?php

    require_once "Pessoa.class.php";
    require_once "Celular.class.php";

    // Instanciando objeto Todo (Pessoa)
    $pessoa1 = new Pessoa("João da Silva", 14, "98898888");

    $pessoa1->setCelular(14, "999999999");

    // Instanciando objeto Parte (celular)
    $pessoa2 = new Pessoa("Paulo de Souza");
    $celular1 = new Celular(14, "997799779", $pessoa2);

    echo "<pre>";
        var_dump($celular1);
    echo "</pre>";

?>