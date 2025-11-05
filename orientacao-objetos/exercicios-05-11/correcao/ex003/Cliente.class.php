<?php

    class Cliente extends Pessoa
    {

        public function __construct(
            private string $cpf = "",
			string $nome = "",
            string $celular = ""
        ) 
        {
			parent:: __construct($nome, $celular);
		}

        // Getters e Setters
        public function getCpf()
        {
            return $this->cpf;
        }

        public function setCpf($cpf)
        {
            $this->cpf = $cpf;
        }

    }

?>