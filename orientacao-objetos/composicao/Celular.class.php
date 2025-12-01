<?php
	class Celular
	{
		public function __construct(
			private int $ddd = 0,
			private string $numero = "",
			private $pessoa = null){}
			
			
		public function getDdd()
		{	
			return $this->ddd;
		}
		public function getNumero()
		{	
			return $this->numero;
		}
		public function setPessoa(Pessoa $pessoa)
		{
			$this->pessoa = $pessoa;
		}
	}
?>