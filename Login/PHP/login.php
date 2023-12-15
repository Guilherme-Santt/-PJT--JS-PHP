<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/normalize.css">
</head>
<body>
    <div class="g">
        <div class="g-edit2">
        </div>

        <!-- Formulário login -->
        <div class="g-edit">
                <b>Logo</b>
                <div class="formgroupfield">
                    <form class="form-edit" action="ProcessaLogin.php" class="form-edit" method="post">
                        <label class="label" for="">Usuário</label>
                        <input class="input" required type="text" name="usuario" value ><br><br>
                        <label class="label" for="">Senha</label>
                        <input class="input" required type="text" name="senha" value ><br>
                        <br>
                        <button class="b-label" type="subit"  name="acessar">Entrar</button>
                        <br>
                        <!-- <a href='http://127.0.0.1/[PJT]-JS-PHP/Cadastro/PHP/index.php'>
                        <br>
                        Cadastre sua conta!
                        </a> -->
                    </form>
                </div>
        </div>
    </div>

</body>
</html>