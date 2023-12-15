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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        echo $nome;
    ?>

</body>
</html>