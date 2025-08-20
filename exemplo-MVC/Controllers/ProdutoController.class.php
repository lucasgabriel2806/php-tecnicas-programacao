<?php

class ProdutoController {

    public function listar() {

        // conexão com o banco via PDO
        $parametros = "mysql:host=localhost;dbname=exemplo-MVC;charset=utf8mb4";
        $conn = new PDO($parametros, "root", "");

        // buscar os dados de produtos no bd
        $sql = "SELECT * FROM produtos";

        // statement (stm)
        $stm = $conn->prepare($sql);
        $stm->execute();
        $conn = null;
        $resultado = $stm->fetchAll(PDO::FETCH_OBJ);

        // echo "<pre>";
        // var_dump($resultado);
        // echo "</pre>";

        // mostrar uma visão
        require_once "Views/lista_produtos.php";

    }

}

?>