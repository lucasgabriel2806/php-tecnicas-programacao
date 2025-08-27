<?php

class Usuarios {

    public function __construct(private int $id_usuario = 0, private string $nome = "", private string $email = "", private string $senha = "", private string $celular = "") {}

    public function getId_Usuario() {
        return $this->id_usuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function setId_Usuario(int $id_usuario) {
        $this->id_usuario = $id_usuario;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function setEmail(string $email) {
        $this->email = $email;
    }

    public function setSenha(string $senha) {
        $this->senha = $senha;
    }

    public function setCelular(string $celular) {
        $this->celular = $celular;
    }

}

?>