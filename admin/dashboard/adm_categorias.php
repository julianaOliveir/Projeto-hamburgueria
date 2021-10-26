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
    <title>Adm. Categorias</title>
</head>
<body>
    
        <?php
            require_once('../header.php');
        ?>
    
    <main>
        <div class="adm-categorias">
            <form name="frmCategorias" method="post" action="">
                <div class="conteudo-text">
                    <label> Categoria:  </label>
                    <input type="text" name="txtNome" size="50" placeholder="Insira a categoria">
                </div>

                <div class="button">
                    <input id="button" type="submit" name="btnBuscar" value="Buscar">
                </div>
            </form>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>