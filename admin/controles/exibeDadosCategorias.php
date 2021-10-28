<?php
    /*
        Objetivo: Buscar ou Listar todos os dados, solicitando ao Banco de Dados
        Responsável: Juliana Oliveira
    */

    require_once('../bd/listarCategorias.php');

    function exibirCategorias(){

        $dados = listar();
        return $dados;
    }
?>