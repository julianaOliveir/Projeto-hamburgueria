<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/usuarios.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <title> Usuários </title>
</head>
<body>

    <?php
        require_once('header.php');
    ?>

    <main>
        <div class="box-usuarios">
            <form name="frmUsuarios" method="post" action="">
                <div class="conteudo-info">
                    <label> Nome: </label>
                    <input type="text" name="txtNomeUsuario" size="50" placeholder="Insira seu nome">
                </div>
                
                <div class="conteudo-info">
                    <label> Usuário: </label>
                    <input type="text" name="txtUsuario" size="50" placeholder="">
                </div>

                <div class="conteudo-info">
                    <label> Senha: </label>
                    <input type="password" name="txtSenhaUsuario" size="50" placeholder="">
                </div>

                <div class="button">
                    <input id="button" type="submit" name="btnCadastrarUsuario" value="Cadastrar">
                </div>
            </form>
        </div>
    </main>

    <?php
        require_once('footer.php');
    ?>
</body>
</html>