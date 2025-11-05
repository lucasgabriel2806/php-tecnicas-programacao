<?php

    class Prestador extends Pessoa
    {

        public function __construct(
            private string $especialidade = "",
			private array $itens = array(),
			string $nome = "",
			string $celular = "",
        ) 
        {
			parent:: __construct($nome, $celular);
		}

        // Getters e Setters
        public function getEspecialidade()
        {
            return $this->especialidade;
        }
		
		public function getItens()
        {
            return $this->itens;
        }

        public function setEspecialidade($especialidade)
        {
            $this->especialidade = $especialidade;
        }
		
		public function setItens($itens)
        {
            $this->itens[] = $itens;
        }

    }

?>