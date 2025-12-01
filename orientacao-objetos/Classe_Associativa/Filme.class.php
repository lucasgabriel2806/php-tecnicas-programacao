<?php
	class Filme
	{
		public function __construct(
			private string $titulo = ""
			){}
			
			
		public function getTitulo()
		{	
			return $this->titulo;
		}
		
		
	}
?>