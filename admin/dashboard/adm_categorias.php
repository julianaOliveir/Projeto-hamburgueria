<?php
    require_once('../functions/config.php');
    require_once('../controles/exibeDadosCategorias.php');

    $nome = (string) null;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/adm_categorias.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <title>Adm. Categorias</title>
</head>
<body>
    
    <?php
        require_once('header.php');
    ?>
    
    <main>
        <div class="adm-categorias">
            <form name="frmCategorias" method="post" action="../controles/recebeDadosCategorias.php">
                <div class="conteudo-text">
                    <label> Categoria:  </label>
                    <input type="text" name="txtNome" size="50" value="<?=$nome?>" placeholder="Insira a categoria" maxlength="100">
                </div>

                <div class="button">
                    <input id="button" type="submit" name="btnBuscar" value="Buscar">
                </div>
            </form>
        </div>
        
        <div id="consultaDeDados">
            <table class="tbl-consulta" >
                <tr>
                    <td class="td-titulo" colspan="5">
                        <h2> Consulta de Categorias</h2>
                    </td>
                </tr>
                <tr class="tr-linhas">
                    <td class="td-coluna-nome"> Nome </td>
                    <td class="td-coluna-opcoes"> Opções </td>
                </tr>

                <?php
                    $dadosCategorias = exibirCategorias();

                    while($rsCategorias = mysqli_fetch_assoc($dadosCategorias)){
                ?>

                <tr class="tr-linhas-img">
                    <td class="td-coluna-nome-categ"><?=$rsCategorias['nome']?></td>
                    <td class="td-coluna-img">
                        
                        <img src="img/edit.png" alt="Editar" title="Editar" class="img">
                    
                        <img src="img/trash.png" alt="Excluir" title="Excluir" class="img">
                    
                        <img src="img/search.png" alt="Visualizar" title="Visualizar" class="img">
                    </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </div>    
    </main>
    
    <?php
        require_once('footer.php');
    ?>
</body>
</html>