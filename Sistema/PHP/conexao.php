<?php
$servidor="localhost";
$usuario="root";
$senha="";
$dbname ="PJDLoja";

$conexao3 = mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao3){
    die("Houve um erro: " . mysqli_connect_error());
}

?>
