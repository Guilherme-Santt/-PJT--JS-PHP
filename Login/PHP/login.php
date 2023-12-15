<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <link rel="stylesheet" href="../CSS/index10.css">
    <link rel="stylesheet" href="../CSS/normalize.css">
</head>
<body>
    <div class="g">
        <div class="g-edit2"></div>
        <div class="g-edit">
                <b>Sant Imports</b>
                <h1>Entrar</h1>

                <div class="form__group field">

                    <form class="form-edit" action="ProcessaLogin.php" class="form-edit" method="post">
                        <label class="label" for="">Loguin</label>
                        <input class="input" type="text" name="usuario" value placeholder="Usuario"><br><br>
                        <label class="label" for="">Senha</label>
                        <input class="input" type="text" name="senha" value placeholder="Senha"><br>
                        <button class="b-label" type="subit"  name="acessar">Entrar</button><br>
                        <a href='http://127.0.0.1/[PJT]-JS-PHP/Cadastro/PHP/index.php'><br>
                        Cadastre sua conta!
                        </a>
                    </form>

    </div>

</body>
</html>