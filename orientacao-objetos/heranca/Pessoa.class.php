<?php

class Pessoa {

    public function __construct(protected string $nome = "", protected string $celular = "", protected string $endereco = "") {}

    // Getters
    public function getNome() {
        return $this->nome;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    // Setters
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setCelular($celular) {
        $this->celular = $celular;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    // Métodos
    public function inserir() {
        echo "Inserir";
    }

    public function atuar() {
        echo "Atuar";
    }

}