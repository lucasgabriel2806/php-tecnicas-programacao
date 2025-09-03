<?php

// abstract impede de instanciar a classe
// final impede de ter filhos
class Juridica extends Pessoa {

    public function __construct(private string $cnpj = "", string $nome = "", string $celular = "", string $endereco = "") {
        parent::__construct($nome, $celular, $endereco);
    }

    // Getters
    public function getCnpj() {
        return $this->cnpj;
    }

    // Setters
    public function setCpf($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function validarCnpj($Pessoa) {
        echo "Validar CNPJ";
    }

}