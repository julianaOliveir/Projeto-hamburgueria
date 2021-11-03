<?php
    /*
        Objetivo: Arquivo responsável por receber o id da Categoria e encaminhar para a função irá buscar o dado.   
        Responsável: Juliana Oliveira
    */

    require_once('../functions/config.php');
    require_once('../bd/listarCategorias.php');

    $idCategoria = $_GET['id_categoria'];

    if($rsCategoria = mysqli_fetch_assoc($dadosCategorias)){

        session_start();

        $_SESSION['nome'] = $rsCategoria;

        header('location:../adm_categoria.php');
    }
?>