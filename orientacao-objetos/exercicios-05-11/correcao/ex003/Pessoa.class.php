<?php

    abstract class Pessoa 
    {

        public function __construct(
            protected string $nome = "",
            protected string $celular = ""
        ) 
        {}

        // Getters e Setters
        public function getNome()
        {
            return $this->nome;
        }

        public function getCelular()
        {
            return $this->celular;
        }

        public function setNome($nome)
        {
            $this->nome = $nome;
        }

        public function setCelular($celular)
        {
            $this->celular = $celular;
        }

    }

?>