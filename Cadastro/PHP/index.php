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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&display=swap" rel="stylesheet">
</head>

<body>
<div class="g-edit">
    <div class="cadastro-edit">
        <h1>Criar Conta</h1>
        <form action="ProcessaCadastro.php" class="formedit" method="post">
            <label class="labeltext">Nome completo</label>
            <input type="text" name="nome" value="">
            <label class="labeltext">Email</label>
            <input type="text" name="email" value="" >
            <label class="labeltext">Usuario</label>
            <input type="text" name="usuario" value="">
            <label class="labeltext">Senha</label>
            <input type="text" name="senha" value="" >
            <br>
            <button type="submit" name="cadastrar">Cadastrar</button>
            <a href='http://127.0.0.1/[PJT]-JS-PHP/login/PHP/index.php'>
            <br>
                Já tenho conta!
            </a>
        </form>
    </div>

</div>
</body>
</html>