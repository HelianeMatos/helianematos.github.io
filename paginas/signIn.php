<?php

//require '../conexao.php';

session_start();

$email = $_POST["login"];
$password = $_POST["password"];

$conexao = mysqli_connect("localhost","root","","primeirobanco");

if(mysqli_connect_errno()){
	echo "Falha na conexão" .mysqli_connect_errno();
	exit;
}
else{
	echo "Conexão realizada com sucesso.";
}


$resultado = mysqli_query($conexao, "SELECT id, nome FROM usuarios WHERE email = '$email' AND senha = '$password'");
$bd = mysqli_fetch_assoc($resultado);

if(!empty($bd)){
    $_SESSION["nome"] = $bd["nome"];
    $_SESSION["id"] = $bd["id"];
    $_SESSION["login"] = $email;
    $_SESSION["password"] = $senha;
    header('location: ../index.php');

}
else{
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    header('location: signIn.html');
}


?>

