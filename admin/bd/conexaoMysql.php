<?php
   /*
        Objetivo : Arquivo para configurar a conexão com o Bando de Dados MySQL
        Responsável: Juliana Oliveira 
   */

    function mysqlConexao(){

        // Variaveis para conexao com o banco
        $server = (string) BD_SERVER;
        $user = (string) BD_USER;
        $password = (string) BD_PASSWORD;
        $database = (string) BD_DATABASE;

        if($conexao = mysqli_connect($server, $user, $password, $database)){
            return $conexao;
        }else{
            echo(ERRO_BD_CONEXAO);
            return false;
        }
    }

?>