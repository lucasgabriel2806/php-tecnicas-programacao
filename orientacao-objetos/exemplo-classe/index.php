<?php

require_once "Usuario.class.php";

// Criando um objeto

$usuario1 = new Usuario("Maria", "maria@gmail.com", "m123");

$usuario2 = new Usuario("", "maria@gmail.com", "m123");

$usuario3 = new Usuario(senha:"m123", email:"maria@gmail.com");

echo "<pre>";

var_dump($usuario1);

echo "</pre>";

echo "<b>Nome</b>: {$usuario1->getNome()}<br>";

echo "<b>E-mail</b>: {$usuario1->getEmail()}<br>";

echo "<b>Senha</b>: {$usuario1->getSenha()}<br>";

echo "<br>";

echo "Reatribuindo propriedade nome:<br>";

$usuario1->setNome("Maria da Silva");

echo "<b>Nome</b>: {$usuario1->getNome()}<br>";

?>