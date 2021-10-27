<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
    <title>Gerenciamento do conteúdo do site</title>
</head>
<body>
    <header>
        <div class="titulo-img">
            <div class="cms">
                <h1>CMS | Classic Burguer</h1>
                <!-- <h2>Classic Burguer</h2> -->
                <h3>Gerenciamento de conteúdo do site</h3>
            </div>
            <div class="img">
                <img src="dashboard/img/gerenciamento.png" alt="">
            </div>
        </div>
    </header>
    <main>
        <div class="box-navegacao">
            <div class="conteudo-imagens">
                <div class="box-img">
                    <div class="img-conteudo">
                        <a href="dashboard/adm_produtos.php">
                            <img src="dashboard/img/produtos.png" alt="">
                            <h6> Adm. de Produtos </h6>
                        </a>
                    </div>
                    <div class="img-conteudo">
                        <a href="dashboard/adm_categorias.php">
                            <img src="dashboard/img/categorias.png" alt="">
                            <h6> Adm. de Categorias </h6>
                        </a>
                    </div>
                    <div class="img-conteudo">
                        <a href="dashboard/contatos.php">
                            <img src="dashboard/img/contatos.png" alt="">
                            <h6> Contatos </h6>
                        </a>
                    </div>
    
                    <div class="img-conteudo">
                        <a href="dashboard/usuarios.php">
                            <img src="img/usuario.png" alt="">
                            <h6> Usuários </h6>
                        </a>
                    </div>
                </div>
            </div>
            <div class="conteudo-logout">
            <!-- <div class="bem-vindo-usuario"> -->
                <h5> Bem vindo "nome do usuário" </h5>
            <!-- </div> -->
                <div class="box-logout">
                    <a href="../index.php">
                        <img src="dashboard/img/logout.png" alt="">
                        <h6>Logout</h6>
                    </a>
                </div>
            </div>
        </div>
        <div class="box-sessao">
            <div class="titulo-sessao">
                <h4>TITULO DA SESSAO</h4>
            </div>
        </div>
    </main>
    <footer>
        <span>&copy; Copyright 2021</span>
        <span>Todos os direitos reservados - Política de Privacidade</span>
    </footer>
</body>
</html>