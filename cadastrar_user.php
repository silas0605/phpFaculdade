<?php
	include "conexao.php";

$login = $_REQUEST['txtlogin'];
$senha = $_REQUEST['pwdsenha'];
	
	
	$insereDados = mysqli_query($conn, "INSERT INTO usuarios (login,senha) 
	VALUES ('$login','$senha')") or die (mysql_error());
	if($insereDados != ""){

		echo 'Usuário cadastrado!';

	}else{

		echo 'Usuário não cadastrado';
	}
?>