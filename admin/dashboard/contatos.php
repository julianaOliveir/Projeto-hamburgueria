<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/contatos.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <title>Contatos</title>
</head>
<body>
    
    <?php
        require_once('header.php');
    ?>

    <main>
        <div class="box-contatos">
            <form name="frmContatos" method="post" action="">
                <div class="conteudo-text">
                    <label> Nome:  </label>
                    <input type="text" name="txtNome" size="50">
                </div>

                <div class="conteudo-text">
                    <label> E-mail  </label>
                    <input type="text" name="txtEmail" size="50">
                </div>

                <div class="conteudo-text">
                    <label> Celular:  </label>
                    <input type="text" name="txtCelular" size="50">
                </div>

                <div class="button">
                    <input id="button" type="submit" name="btnBuscarContato" value="Buscar">
                </div>
            </form>
        </div>
    </main>
    
    <?php
        require_once('footer.php');
    ?>
</body>
</html>