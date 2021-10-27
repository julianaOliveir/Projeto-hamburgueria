<?php
    /*
        Objetivo: Arquivo de configuração de variaveis e constantes
        Responsável: Juliana Oliveira
    */

    // Constantes para conexão com o banco 
    const BD_SERVER = 'localhost';
    const BD_USER = 'root';
    const BD_PASSWORD = 'bcd127';
    const BD_DATABASE = 'db_classic_burguer';

    // Erros do sistema
    const ERRO_CONEXAO_BD = "Não foi possível realizar a conexão com o Banco de Dados";
    const ERRO_CAIXA_VAZIA = "Preencha todos os campos";
    const ERRO_MAXLENGHT = "Você ultrapassou o limite de caracteres permitido";

    //Constante para indicar a pasta raiz do servidor.
    define('SRC' , $_SERVER ['DOCUMENT_ROOT'] . 'xampp/back-end/Projeto-hamburgueria');
?>