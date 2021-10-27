<?php
    /*
        Objetivo : Arquivo para configurar a conexão com o Banco
        Responsável: Juliana Oliveira 
    */

    function conexaoMysql(){

        require_once('../functions/config.php');

        $server = (string) BD_SERVER;
        $user = (string) BD_USER;
        $password = (string) BD_PASSWORD;
        $database = (string) BD_DATABASE;

        if($conexao = mysqli_connect($server, $user, $password, $database)){
            return $conexao;
        }else{
            echo(ERRO_CONEXAO_BD);
            return false;
        }
    }

    

?>