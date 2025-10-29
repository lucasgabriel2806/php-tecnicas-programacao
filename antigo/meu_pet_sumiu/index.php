<?php

	// 	
	require __DIR__ . '/vendor/autoload.php';
	use Dotenv\Dotenv;
	$dotenv = Dotenv::createImmutable(__DIR__);
	$dotenv->load();

	$email_username = $_ENV["EMAIL_USERNAME"];
	$email_password = $_ENV["EMAIL_PASSWORD"];
	$db_username = $_ENV["DB_USERNAME"];
	$db_password = $_ENV["DB_PASSWORD"];

	// echo $email_username;
	// die();
	if($_GET)
	{
		//outras rotas
		$controle = $_GET["controle"];
		$metodo = $_GET["metodo"];
		require_once "Controllers/$controle.class.php";
		$obj = new $controle();
		$obj->$metodo();
	}
	/**
	 * Se eu não fizer nenhuma requisição ($_GET vazia),
	 * então serei redirecionado para o inicio da aplicação (Rota inicial)
	 */
	else
	{
		// Chamando inicioController
		require_once "Controllers/inicioController.class.php";
		
		// Instanciando um objeto da classe inicioController
		$obj = new inicioController();

		// Chamando meu método inicio
		$obj->inicio();
	}
?>