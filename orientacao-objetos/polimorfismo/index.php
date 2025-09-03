<?php

require_once "Conta.class.php";
require_once "Poupanca.class.php";
require_once "Corrente.class.php";

$corrente = new Corrente(1000, "123-4", "234-5", 5000);

echo "<br>";
echo $corrente->getSaldo();

$corrente->retirar(7000);

echo "<br>";
echo $corrente->getSaldo();

$poupanca = new Poupanca(4, "234-5", "987-6", 10000);

echo "<br>";
echo $poupanca->getSaldo();

$poupanca->retirar(500);

echo "<br>";
echo $poupanca->getSaldo();