<?php
    /*
        Objetivo: Arquivo responsável por receber, tratar e validar os dados;
        Responsável: Juliana Oliveira 
    */

    require_once('../functions/config.php');

    require_once('../bd/inserirCategoria.php');

    $nome = (string) null;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $nome = $_POST ['txtNome'];  

        // Validações de campos
        if($nome == null){
            echo("<script> alert ('". ERRO_CAIXA_VAZIA ."');window.history.back();</script>");
        }elseif(strlen($nome) > 100){
            echo("<script> alert ('". ERRO_MAXLENGHT ."');window.history.back();</script>");            
        }else{
            $categoria = array (
                "nome" => $nome,
                "id_categoria" => $id_categoria
            );

            if(inserir($categoria)){
                echo("<script> alert ('".BD_MSG_INSERIR."'); window.location.href = '../dashboard/adm_categorias.php' </script>");
            }else{
                echo("<script> alert ('".BD_MSG_ERRO."'); window.history.back = '../dashboard/adm_categorias.php' </script>");

            }
        }

    }
    
?>