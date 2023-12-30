<?php
    if(isset($_POST['cadastrar'])){   

        if(empty($_POST['nome'])){
            echo '<p class="error">Preencha o campo nome</p>';
        }
        else if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            echo '<p class="error">Preencha o campo E-mail Corretamente</p>';
        }         
        else if(empty($_POST['usuario'])){
            echo '<p class="error">Usuário inválido/já cadastrado, dígite outro</p>';            }
        else if(empty($_POST['senha']) || strlen($_POST['senha']) < 3 || strlen($_POST['senha']) > 15)
        {
            echo '<p class="error">Senha inválida. utilize uma senha de 3 á 15 digitos! </p>';
        }
    }   
session_start();

include("ConexaoCadastro.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

    $sql = "INSERT INTO informacoesUsuario (nome, email, usuario, senha) VALUES ('$nome', '$sobrenome',  '$usuario', '$senha')";

        if(mysqli_query($conexao, $sql)){
            header('Location: http://127.0.0.1/-PJT--JS-PHP/Cadastro/PHP/index.php');
        }

        else{
            echo "Usuario não cadastrado" . mysqli_error($conexao);
        }
    
mysqli_close($conexao);


?>