<?php

	class Agenda
	{
		
		public function __construct(
			private string $data = "",
			private $cliente = null,
			string $horario = "",
			string $status = "", 
			$servico = null, 
			$agenda = null, 
			$prestador = null			
		)
		{
			$this->itens[] = new Itens(
				$horario, $status, $servico, $agenda, $prestador
			);
		}
		
		// Getters e Setters
		public function getData()
		{
			return $this->data;
		}
		
		public function getItens()
		{
			return $this->itens;
		}
		
		public function getCliente()
		{
			return $this->cliente;
		}
		
		public function setData($data)
		{
			$this->data = $data;
		}
		
		public function setItens(
			$horario, $status, $servico, $agenda, $prestador
		)
		{
			$this->itens[] = new Itens(
				$horario, $status, $servico, $agenda, $prestador
			);
		}

		public function setCliente($cliente)
		{
			$this->cliente = $cliente;
		}
		
	}

?>