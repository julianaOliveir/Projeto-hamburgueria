<?php
   /*
        Objetivo: Inserir dados do Cliente no Banco 
        Responsável: Juliana Oliveira 
   */

   require_once('../bd/conexaoMysql.php');

   function inserir($arrayCategorias){
       $sql = "insert into tbl_categoria(
                nome
            )
            values(
                '". $arrayCategorias['nome']."'
       )";

       $conexao = mysqlConexao();

       if(mysqli_query($conexao, $sql)){
           return true;
       }else{
           return false;
       }
   }
?>