<?php
    /*
        Objetivo: Atualizar uma categoria existente no Banco de Dados  
        Responsável: Juliana Oliveira
    */

    require_once('../bd/conexaoMysql.php');

    function editar(){
        $sql = "update tbl_categoria set
            nome = '". $arrayCategorias['nome']."',
            
            where id_categoria = " . $arrayCategorias['id_categoria'];
    
        $conexao = mysqlConexao();

        if(mysqli_query($conexao, $sql)){
            return true;
        }else{
            return false;
        }
    }

?>