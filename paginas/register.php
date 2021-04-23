<?php

require '../conexao.php';

$fullname = $_POST['fname'];
$email = $_POST['email'];
$password = md5($_POST['password']);


$resultado = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha)
VALUES ('$fullname', '$email', '$password')");

if($resultado){
    header ("Location: register.html?retorno='Registro incluido com sucesso'");
}
else {

    header ("Location: register.html?retorno='error'");
}

?>