<?php
	class Papel
	{
		public function __construct(
			private string $descritivo = "",
			private Filme $filme = new Filme(),
			private Ator $ator = new Ator()
			){}
			
			
		public function getdescritivo()
		{	
			return $this->descritivo;
		}
		public function getFilme()
		{	
			return $this->filme;
		}
		public function getAtor()
		{	
			return $this->ator;
		}
		
		
	}
?>