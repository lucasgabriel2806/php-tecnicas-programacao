<?php

    class Pet
    {

        public function __construct(
            private int $id_pet = 0,
            private string $nome = "",
            // $idade é uma string para o usuário digitar 5 anos, 10 meses, filhote, adulto, etc...
            private string $idade = "",
            private string $raca = "",
            private string $porte = "",
            private string $local = "",
            private string $data = "",
            private string $imagem = "",
            private string $cor_olhos = "",
            private string $cor = "",
            private string $observacoes = "",
            private string $situacao = "",
            private Usuarios $usuario = new Usuarios()
        )
        {}

        // Fazer getters e setters
        // Criar tabela Pet no phpmyadmin com relação ao usuário
        /** 
         * Porte, Situação: enum
         * Situação (procurando pet, procurando tutor, finalizado)
         */

    }

?>