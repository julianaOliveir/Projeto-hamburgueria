<?php
    /*
        Objetivo: Arquivo responsável por receber o id da Categoria e encaminhar para a função que irá excluir o dado.   
        Responsável: Juliana Oliveira
    */

    require_once('../functions/config.php');

    require_once('../bd/excluirCategoria.php');

    $idCategoria = $_GET['id'];

    if(excluir($idCategoria)){
        echo("<script> alert ('". BD_MSG_DELETE."'); window.location.href = '../dashboard/adm_categorias.php' </script>");
    }else{
        echo('<script> alert('. BD_MSG_ERRO.');window.history.back();</script>');
    }
?>