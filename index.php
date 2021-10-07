<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/sandwich.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/menu-pesquisa.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/produtos-promocoes.css">
    <link rel="stylesheet" href="css/empresa.css">
    <link rel="stylesheet" href="css/destaques.css">
    <link rel="stylesheet" href="css/lojas.css">
    <title>Hamburgueria</title>
</head>
    <header>
        <div id="img-logo">
            <img src="img/sandwich.png" alt="">
        </div>
        <div id="box-menu">
            <ul id="lista-menu">
                <li>A EMPRESA</li>
                <li>LOJAS</li>
                <li>PROMOÇÕES</li>
                <li>DESTAQUES</li>
                <li>CONTATOS</li>
            </ul>
        </div>
        <div id="box-redes-sociais">
            <div class="itens-redes-sociais">
                <a href="https://pt-br.facebook.com/" target="_blank">
                    <img src="img/facebook-circular-logo.png" alt="">
                </a>
            </div>
            <div class="itens-redes-sociais">
                <a href="https://www.instagram.com/" target="_blank">
                    <img src="img/instagram.png" alt="">
                </a>
            </div>
            <div class="itens-redes-sociais">
                <a href="https://www.ifood.com.br/" target="_blank">
                    <img src="img/delivery.png" alt="">
                </a>
            </div>
        </div>
    </header>
    <main>

        <!-- banner -->
        <div id="box-img"></div>
        <!-- banner fim -->

        <!-- Seção menu e pesquisa -->     
        <div class="menu-pesquisa">
            <div class="box-menu">
                <img src="img/menu.png" alt="">
                <div class="subMenu">
                    <div class="itemMenu"></div>
                    <div class="itemMenu"></div>
                    <div class="itemMenu"></div>
                    <div class="itemMenu"></div>
                    <div class="itemMenu"></div>
                </div>
            </div>

            <div class="box-pesquisa">
                <form name="frmPesquisa" action="" method="post">
                    <div>
                        <!-- <label>Pesquisa</label> -->
                        <input type="text" name="txtPesquisa" size="15" placeholder="Pesquisar">
                        <input id="botao" type="submit" name="btnPesquisar" value="Buscar">
                    </div>
                </form>
            </div>
        </div>
        <!-- Seção menu e pesquisa fim -->

        <!-- Seção produtos -->
        <div class="box-produtos">
            <!-- <div class="info-produtos">
                <div class="img-produto"></div>
                <div class="nome-produto">PRODUTO</div>
                <div class="descricao-produto"></div>
                <div class="saibamais-valor-conteiner">
                    <div class="saiba-mais">saiba mais</div>
                    <div class="valor"></div>
                </div>
            </div>

            <div class="info-produtos">
                <div class="img-produto"></div>
                <div class="nome-produto">PRODUTO</div>
                <div class="descricao-produto"></div>
                <div class="saibamais-valor-conteiner">
                    <div class="saiba-mais">saiba mais</div>
                    <div class="valor"></div>
                </div>
            </div> -->
            <?php
            $index = 0;
                for($index = 0; $index <= 7; $index++)
                {
            ?>
                <div class="info-produtos">
                    <div class="img-produto"></div>
                    <div class="nome-produto">PRODUTO</div>
                    <div class="descricao-produto">descrição</div>
                    <div class="saibamais-valor-conteiner">
                        <div class="saiba-mais">saiba mais</div>
                        <div class="valor">$0,00</div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>
        <!-- Seção produtos fim -->

        <!-- Seção empresa -->
        <div class="box-empresa">
            <div class="titulo-empresa"></div>
            <div class="conteudo-imagem">
                <div class="descricao-conteudo"></div>
                <div class="img-conteudo-empresa"></div>
            </div>
        </div>
        <!-- Seção empresa fim -->

        <!-- Seção promoções -->
        <div class="box-promocoes">
            <div class="titulo-promocoes">
                teste
            </div>
            <div class="info-produtos">
                    <div class="img-produto"></div>
                    <div class="nome-produto">PRODUTO</div>
                    <div class="descricao-produto">descrição</div>
                    <div class="saibamais-valor-conteiner">
                        <div class="saiba-mais">saiba mais</div>
                        <div class="box-valores">
                            <div class="valor-desconto">123</div>
                            <div class="valor-real">456</div>
                        </div>
                    </div>
            </div>

            <div class="info-produtos">
                    <div class="img-produto"></div>
                    <div class="nome-produto">PRODUTO</div>
                    <div class="descricao-produto">descrição</div>
                    <div class="saibamais-valor-conteiner">
                        <div class="saiba-mais">saiba mais</div>
                        <div class="box-valores">
                            <div class="valor-desconto">123</div>
                            <div class="valor-real">456</div>
                        </div>
                    </div>
            </div>

            <div class="info-produtos">
                    <div class="img-produto"></div>
                    <div class="nome-produto">PRODUTO</div>
                    <div class="descricao-produto">descrição</div>
                    <div class="saibamais-valor-conteiner">
                        <div class="saiba-mais">saiba mais</div>
                        <div class="box-valores">
                            <div class="valor-desconto">123</div>
                            <div class="valor-real">456</div>
                        </div>
                    </div>
            </div>
        </div>    
        <!-- Seção promoções fim -->

        <!-- Seção destaque  -->
        <div class="box-destaque">
            <div class="titulo-destaque">DESTAQUE</div>
            <div class="destaques">
                <div class="img-destaque">
                    <img src="img/sandwich.png" alt="">
                </div>
                <div class="img-destaque">
                    <img src="img/sandwich.png" alt="">
                </div>
                <div class="img-destaque">
                    <img src="img/sandwich.png" alt="">
                </div>
                <div class="img-destaque">
                    <img src="img/sandwich.png" alt="">
                </div>
            </div>
        </div>
        <!-- Seção destaque  fim -->

        <!-- Seção nossas lojas  -->
        <div class="box-nossas-lojas">
            
        </div>
        <!-- Seção nossas lojas  fim -->
    </main>
    <footer>footer</footer>
</body>
</html>