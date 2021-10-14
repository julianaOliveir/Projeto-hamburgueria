<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <header></header>
    <main>
        <div class="box-autenticacao">
            <div class="titulos">
                <h3>Autenticação para o CMS</h3>
                <h4>nome projeto</h4>
            </div>
            <div class="form-autenticacao">
                <form name="frmAutenticacao" action="" method="post">
                    
                    <div class="box-login">
                        <label> Login: </label>
                        <input type="text" name="txtLogin" size="15">
                    </div>

                    <div class="box-senha">
                        <label>Senha: </label>
                        <input type="text" name="txtSenha" size="15">
                    </div>
                    <input class="botao" type="submit" name="btnEntrar" value="Entrar">
                </form>
            </div>
        </div>
    </main>
</body>
</html>