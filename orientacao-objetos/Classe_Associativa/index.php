<?php
	require_once "Filme.class.php";
	require_once "Ator.class.php";
	require_once "Papel.class.php";
	
	$filme = new Filme("titulo do filme");
	$ator = new Ator("nome do ator");
	
	$papel = new Papel("Papel feito pelo ator no filme",$filme, $ator);

	echo "<pre>";
	var_dump($papel);
	echo "</pre>";
?>