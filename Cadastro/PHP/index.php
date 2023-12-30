
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
                <input   type="text" name="nome" value="">
                    
                <label class="labeltext">Email</label>
                <input   type="email" name="email" value="" >

                <label class="labeltext">Usuario</label>
                <input   type="text" name="usuario" value="">

                <label class="labeltext">Senha</label>
                <input   type="password" name="senha" value="">

                <br><br>

    <?php 
        if(isset($_POST['cadastrar'])){   

            if(empty($_POST['nome'])){
               echo '<p class="error">Preencha o campo nome</p>';
            }
            else if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                echo '<p class="error">Preencha o campo E-mail Corretamente</p>';
            }         
            else if(empty($_POST['usuario'])){
                echo '<p class="error">Usuário inválido/já cadastrado, dígite outro</p>';
            }
            else if(empty($_POST['senha']) || strlen($_POST['senha']) < 3 || strlen($_POST['senha']) > 15){
                 echo '<p class="error">Senha inválida. utilize uma senha de 3 á 15 digitos! </p>';
            }
         }

    ?>
                <button type="submit" name="cadastrar">Cadastrar</button>
            </form><br>
<br>
            <a href='http://127.0.0.1/[PJT]-JS-PHP/login/PHP/index.php'>Já tenho conta!</a>

        </div>
</div>
</body>
</html>

