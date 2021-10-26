<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/adm_produtos.css">
    <title>Adm. Produtos</title>
</head>
<body>
    <header>
    </header>
    <main>
        <div class="adm-produtos">
            <form name="frmProdutos" method="post" action="">
                <div class="conteudo-text">
                    <label> Nome: </label>
                    <input type="text" name="txtNome" size="50" placeholder="Nome do seu produto">
                </div>
                
                <div class="conteudo-text">
                    <label> Valor: </label>
                    <input type="text" name="txtValor" size="50" placeholder="Valor do seu produto">
                </div>

                <div class="conteudo-text">
                    <label> Desconto: </label>
                    <input type="text" name="txtDesconto" size="50" placeholder="Desconto do seu produto">
                </div>

                <div class="radio-text">
                    <label> Destaque: </label>
                    <input type="radio" name="radioDestaque">
                </div>
                    
                <div class="conteudo-text">
                    <label> Descrição: </label>
                    <textarea name="txtDescricao" id="" cols="50" rows="5" placeholder="Descrição do seu produto"></textarea>
                </div>

                <div class="button">
                    <input id="button" type="submit" name="btnCadastrar" value="Cadastrar">
                </div>

            </form>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>