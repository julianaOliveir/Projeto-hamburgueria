<?php
    /*
        Objetivo: Excluir dados do Banco de Dados
        Responsável: Juliana Oliveira
    */

    require_once('../bd/conexaoMysql.php');

    function excluir($idCategoria){
        $sql = "delete from tbl_categoria where id_categoria =" . $idCategoria;

        $conexao = mysqlConexao();

        if(mysqli_query($conexao, $sql)){
            return true;
        }else{
            return false;
        }
    }
?>