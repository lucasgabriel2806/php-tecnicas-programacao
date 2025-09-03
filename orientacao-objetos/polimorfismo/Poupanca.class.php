<?php

class Poupanca extends Conta {

    public function __construct(private int $aniversario = 0, string $numero = "", string $agencia = "", float $saldo = 0) {
        parent::__construct($numero, $agencia, $saldo);
    }

    public function retirar($valor) {

        $diaCorrente = (int)date("d");

        echo $diaCorrente;

        if($this->aniversario > $diaCorrente) {
            echo "Você perderá os rendimentos";
        }
        if($this->saldo >= $valor) {
            parent:: retirar($valor);
        }
        else {
            echo "Poupança sem saldo para a retirada";
        }
        
    }

}