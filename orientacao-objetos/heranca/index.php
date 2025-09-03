<?php

require_once "Pessoa.class.php";
require_once "Juridica.class.php";
require_once "Fisica.class.php";

$pessoaFisica = new Fisica("111.111.111-11", "Lucas de Paula", "(11)11111111", "Rua x", "111", "1700000");

echo "<pre>";
var_dump($pessoaFisica);
echo "</pre>";

echo $pessoaFisica->inserir();