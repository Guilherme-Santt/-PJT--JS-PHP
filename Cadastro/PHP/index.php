<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/index3.css">
    <link rel="stylesheet" href="../CSS/normalize.css">
</head>

<body>
<div class="g-edit">
    <div class="cadastro-edit">
        <h1>Cadastre-se</h1>
        <form action="ProcessaCadastro.php" class="formedit" method="post">
            <label>Nome</label>
            <input type="text" name="nome" value="" placeholder="Nome">
  P       <label>Sobrenome</label>
            <input type="text" name="sobrenome" value="" placeholder="Sobrenome">
            <label>Usuario</label>
            <input type="text" name="usuario" value="" placeholder="Usuario">
            <label>Senha</label>
            <input type="text" name="senha" value="" placeholder="Senha">
            <button type="submit" name="cadastrar">Cadastrar</button>
            <a href='http://127.0.0.1/[PJT]-JS-PHP/login/PHP/index.php'>
                Já tenho conta!
            </a>
        </form>
    </div>
    
    <div class="img-edit">

    </div>
</div>
</body>
</html>