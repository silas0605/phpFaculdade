<?php
include "conexao.php";

$login = $_REQUEST['txtlogin'];
$entrar = $_REQUEST['entrar'];
$senha = $_REQUEST['pwdsenha'];

if (isset($entrar)) {
	$verifica = mysqli_query($conn,"SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
	
	// echo $verifica;
	
	if (mysqli_num_rows($verifica)<=0){
		echo"<script language='javascript' type='text/javascript'>
		alert('Login e/ou Senha incorretos');window.location
		.href='login.php'</script>";
		die();
	}
	else
	{
		setcookie("login",$login);
		header("location:index.php");
	}
}

?>
			
		