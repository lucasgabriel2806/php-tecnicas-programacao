<?php

	require_once "Pessoa.class.php";
	require_once "Cliente.class.php";
	require_once "Prestador.class.php";
	require_once "Agenda.class.php";
	require_once "Itens.class.php";
	require_once "Servico.class.php";
	
	$servico = new Servico("Pintura", 100.00);
	$servico2 = new Servico("Encanamento", 200.00);
	
	$prestador = new Prestador(especialidade:"Pintura predial", 
							   nome:"João da Silva",
							   celular:"(14)999999999");
							   
	$prestador2 = new Prestador(especialidade:"Encanamento", 
							   nome:"Pedro da Silva",
							   celular:"(14)999998888");
							   
	$cliente = new Cliente("111.111.111-11", "Maria da Silva", "(14)999888888");
	
	$agenda = new Agenda("05/11/2025", $cliente, "19:30", "Ativo", $servico, null, $prestador);

	$agenda->setItens("10:00", "Cancelado", $servico, null, $prestador2);

	// Mostrando dados da agenda

	echo "<h2>Agenda</h2>";
	echo "Data: {$agenda->getData()} <br>";
	echo "<h3>Cliente</h3>";
	echo "Nome: {$agenda->getCliente()->getNome()} - 
		  Celular: {$agenda->getCliente()->getCelular()} -
		  CPF: {$agenda->getCliente()->getCpf()} <br>";
	echo "<h3>Itens da Agenda</h3>";
	foreach($agenda->getItens() as $itens)
	{
		echo "Horário: {$itens->getHorario()} <br>";
		echo "Serviço: {$itens->getServico()->getDescritivo()} - 
					   {$itens->getServico()->getPreco()}";
		echo "Prestador: {$itens->getPrestador()->getNome()} - 
						 {$itens->getPrestador()->getCelular()} - 
						 {$itens->getPrestador()->getEspecialidade()}";
	}
?>