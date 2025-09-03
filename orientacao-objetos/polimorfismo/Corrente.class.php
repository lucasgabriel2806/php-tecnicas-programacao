<?php

final class Corrente extends Conta {

    public function __construct(private float $limite = 0, string $numero = "", string $agencia = "", float $saldo = 0) {
        parent::__construct($numero, $agencia, $saldo);
    }

    public function retirar($valor) {

        if($this->saldo + $this->limite >= $valor) {

            parent:: retirar($valor);

        } else {

            echo "Conta sem saldo suficiente";

        }

    }

}
