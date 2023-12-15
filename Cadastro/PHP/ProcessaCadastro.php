<?php
session_start();

include("ConexaoCadastro.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "INSERT INTO informacoesUsuario (nome, email, usuario, senha) VALUES ('$nome', '$sobrenome',  '$usuario', '$senha')";

if(mysqli_query($conexao, $sql)){

    header('Location: http://127.0.0.1/[PJT]-JS-PHP/Login/PHP/index.php');
}
else{
    echo "Usuario não cadastrado" . mysqli_error($conexao);
}
 
mysqli_close($conexao);


?>