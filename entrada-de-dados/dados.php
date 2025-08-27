<?php

	// Se recebi algo via GET
	if($_GET) {

		echo "{$_GET['nome']} <br> {$_GET['idade']}";

	} else {
		
		// Se não recebi nada ou abri direto o arquivo php

		// redirecionar pro meu formulário
		header('location: index.html');

	}

?>