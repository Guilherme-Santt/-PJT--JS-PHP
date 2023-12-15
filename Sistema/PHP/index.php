<?php

session_start();

include('conexao.php');

if((!isset($_SESSION['usuario']) == true ) and (!isset($_SESSION['senha'])== true)   )  {
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: ');
    
}

$sql = "SELECT nome FROM informacoesUsuario ORDER BY id DESC";


$result = $conexao3->query($sql);

    while($user_data=mysqli_fetch_assoc($result)){
        $nome= $user_data['nome'];
}

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="../CSS/index2.css">
</head>
<body>
    <!-- Header  *NAV* - Mensagem central superior -->
    <header class="h-g">
        <form class="h-f">            
                <?php 
                echo "
                    '<div style=text-align:center; font-size: 30px
                        <h1> 
                            Olá," ." ". $nome. "
                        </h1>
                    </div> "    
                ?> 
            </p>
        </form>

    <!-- *HEADER* Menu & Logo central  -->
        <img onclick="lmenu()" class="h-img" src="../imagens/hamburger.png">
        <div id="lh" class="h-menu"><br>
            <br>

            <a onclick="fmenu()">X</a>
            <br>
            <br>
            <a>Opção 1</a><hr><br>
            <a>Opção</a><hr><br>
            <a>Opção</a><hr><br>
            <a>Opção</a> <b>+</b><hr><br>
            <a>Opção</a> <b>+</b><hr><br>
            <a>Opção</a><hr>
            <a href="http://127.0.0.1/[PJT]-JS-PHP/login/PHP/index.php">Encerrar sessão</a><hr>
    
            <input type="text" id="search-bar" placeholder="Busca">
            <a><img class="input-lupa"src="../imagens/pesquisa-de-lupa.png"></a>
                <div class="icons">
                    <img src="../imagens/instagram.png">
                    <img src="../imagens/facebook.png">
                    <img src="../imagens/tiktok.png">
                    <img src="../imagens/youtube.png">
                    <img src="../imagens/whatsapp.png">
                </div>
        </div>
        
        <p><b>Sant</b> imports</p>
        
        <p></p>
    </header>


    <!-- Lealt mais vendidos -->



    
    <div class="nav-g">
        <div class="nav-item-title">
            <h1>Lançamentos - Masculinos</h1>
    </div>
       
        <div class="nav-email">
            <h1>Receba novidades no e-mail</h1><hr>
            <b>Cadastre-se e seja um dos primeiros a saber todas as novidades e ofertas.</b><br><br>            </b>
            <input type="text" id="search-bar-email" placeholder="Digite seu email">
            <button>Cadastre-se</button><br><br>
            <img src="../imagens/o-email.png">
            <link rel="stylesheet" href="index2.css">
            <link rel="stylesheet" href="index.css">
            <link rel="stylesheet" href="normalize.css">

        </div>
        <div class="nav-rodape">
            <div class="nav-social">
                <h1>Nossa redes sociais</h1>
                <img src="../imagens/instagram.png">
                <img src="../imagens/facebook.png">
                <img src="../imagens/tiktok.png">
                <img src="../imagens/youtube.png">
                <img src="../imagens/whatsapp.png"><br>
                <b>@SantImports</b><br><br>
                <b>Rua Santa Genoveva, 217 - CEP: 06700505
                </b>
            </div>
            <div class="nav-social">
                <h1>Categorias</h1>
                <a src="#">Masculino</a><br>
                <a src="#">Feminino</a><br>
                <a src="#">Infantil</a><br>
                <a src="#">Acessórios</a><br>
                <a src="#">Buckets</a><br>
                <a src="#">Lançamentos</a><br>
            </div>
            <div class="nav-social">
                <h1>Contatos</h1>
                <a src="#">Trabalhe conosco</a><br>
                <a src="#">Suporte</a><br>
                <a src="#">Loja 1 - Endereço</a><br>
                <a src="#">Loja 1 - Endereço</a><br>
                <a src="#">Loja 1 - Endereço</a><br><hr>
                <b>santimports@mail.com.br</b>
            </div>
        </div>
    <script src="../JavaScript/index.js"></script>
</body>
</html>