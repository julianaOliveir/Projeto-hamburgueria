<?php
    /*
        Objetivo: Listar todas as categorias do Banco de Dados
        Responsável: Juliana Oliveira
    */

    require_once('../bd/conexaoMysql.php');

    function listar(){
        $sql = "select * from tbl_categoria order by id_categoria desc";

        $conexao =  mysqlConexao();

        $select = mysqli_query($conexao, $sql);

        return $select;
    }

    function buscar(){
        $sql = "select * from tbl_categoria order by id_categoria desc";

        $conexao =  mysqlConexao();

        $select = mysqli_query($conexao, $sql);

        return $select;
    }
?>