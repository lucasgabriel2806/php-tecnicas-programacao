<?php
	//criando um objeto 
	//include "Usuario.class.php";
	//include_once "Usuario.class.php";
	//require "Usuario.class.php";
	require_once "Usuario.class.php";
	$usuario1 = new Usuario("Maria", "maria@gmail.com", "m123");
	$usuario2 = new Usuario("", "maria@gmail.com", "m123");
	$usuario3 = new Usuario(senha:"m123", email:"maria@gmail.com");
	
	/*echo "<pre>";
	var_dump($usuario3);
	echo "</pre>";*/
	
	echo "Nome:{$usuario1->getNome()}<br>";
	echo "E-Mail:{$usuario1->getEmail()}<br>";
	echo "Senha:{$usuario1->getSenha()}<br>";
	
	$usuario1->setNome("Maria da Silva");
	
	echo "Nome:{$usuario1->getNome()}<br>";
?>