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
    const ERRO_BD_CONEXAO = "Não foi possível realizar a conexão com o Banco de Dados";
    const ERRO_CAIXA_VAZIA = "não foi possível realizar a operação. Preencha todos os campos.";
    const ERRO_MAXLENGHT = "A quantidade de caracteres foi ultrapassada.";

    // Validações
    const BD_MSG_INSERIR = "Seu registro foi salvo com  sucesso!";
    const BD_MSG_ERRO = "ERROR: não foi possível manipular os dados no Banco de Dados";
    const BD_MSG_DELETE = "Dados excluídos com sucesso";
?>