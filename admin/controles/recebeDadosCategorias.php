<?php
    /*
        Objetivo: Arquivo que recebe, trata e valida os dados dos clientes
        Resposnsável: Juliana Oliveira
    */

    require_once('../functions/config.php');
    require_once(SRC . 'bd/inserirCategoria.php');

    // Declaração de variavel
    $nome = (string) null;

    if($_SERVER['REQUEST_METHOD' == 'POST']){

        // Receber dados do formulário
        $nome = $_POST['txtNome'];

        // Validação de campo obrigatório
        if($nome == null || $rg == null || $cpf == null){
            echo("<script> alert ('". ERRO_CAIXA_VAZIA ."'); window.history.back();</script>");
        }elseif (strlen($nome) > 100){
            echo("<script> alert ('". ERRO_MAXLENGHT ."'); window.history.back();</script>");
        }else{

            // Array que encaminha a funcao a funcao inserir 
            $categoria = array (
                "id" => $id,
                "nome" => $nome
            );

            if(strtoupper($_GET['modo']) == 'SALVAR'){

            }
        }
    }
?>