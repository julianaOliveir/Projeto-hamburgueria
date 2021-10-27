<?php
    /*
        Objetivo: Inserir os dados (categorias) no banco
        Responsável: Juliana Oliveira
    */

    require_once('../bd/conexaoMysql.php');

    function inserir($arrayCategorias){
        $sql = "insert into tbl_categoria(
            nome
        )values(
            '". $arrayCategorias['nome']."'
        )";
        
        // Função que estabelece a conexão com o banco 
        $conexao = conexaoMysql();

        if(mysqli_query($conexao, $sql)){
            return true; 
        }else{
            return false; 
        }
    }
?>