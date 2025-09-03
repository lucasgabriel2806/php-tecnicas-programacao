<?php

class Fisica extends Pessoa {

    public function __construct(private string $cpf = "", string $nome = "", string $celular = "", string $endereco = "") {
        parent::__construct($nome, $celular, $endereco);
    }

    // Getters
    public function getCpf() {
        return $this->cpf;
    }

    // Setters
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function validarCpf($Pessoa) {
        echo "Validar CPF";
    }

}