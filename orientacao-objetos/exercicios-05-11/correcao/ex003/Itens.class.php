<?php

	class Itens
	{
		
		public function __construct(
			private string $horario = "",
			private string $status = "",
			private $servico = new Servico(), 
			private $agenda = null,
			private Prestador $prestador = new Prestador()
		)
		{}
		
		// Getters e Setters
		public function getHorario()
		{
			return $this->horario;
		}
		
		public function getStatus()
		{
			return $this->status;
		}
		
		public function getServico()
		{
			return $this->servico;
		}
		
		public function getAgenda()
		{
			return $this->agenda;
		}
		
		public function getPrestador()
		{
			return $this->prestador;
		}
		
		public function setHorario($horario)
		{
			$this->horario = $horario;
		}
		
		public function setStatus($status)
		{
			$this->status = $status;
		}
		
		public function setServico($servico)
		{
			$this->servico = $servico;
		}
		
		public function setAgenda($agenda)
		{
			$this->agenda = $agenda;
		}
		
		public function setPrestador($prestador)
		{
			$this->prestador = $prestador;
		}
		
	}

?>