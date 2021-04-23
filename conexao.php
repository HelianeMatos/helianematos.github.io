<?php

$conexao = mysqli_connect("localhost:3306","root","","primeirobanco");

if(mysqli_connect_errno()){
	echo "Falha na conexão" .mysqli_connect_errno();
	exit;
}
else{
	echo "Conexão realizada com sucesso.";
}
?>