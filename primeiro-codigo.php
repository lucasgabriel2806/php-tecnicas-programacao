<?php

	$nome = "Lucas de Paula";
	$idade = 19;
	$altura = 1.68;
	$casado = false;
	
	echo "<h3 style='color: blue;'>
			Nome: $nome
		  </h3> 
		  <br>";
	
	echo "Idade: $idade<br>";
	
	echo "Altura: $altura<br>";
	
	echo "Estado Civil: ";
	
	if ($casado) {
		
		echo "Casado";
		
	} else {
		
		echo "Solteiro";
		
	}

?>