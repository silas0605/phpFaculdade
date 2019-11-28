<?php include "index.php"; ?>
<?php
	include "conexao.php";

	$login = $_REQUEST['txtLogin'];
	$senha = $_REQUEST['txtSenha'];
	
	$insereDados = mysqli_query($conn, "INSERT INTO usuario (Login, Senha,) 
	VALUES ('$login', '$senha')") or die ("Erro ao Cadastrar");
	if($insereDados != ""){

		echo 'Cadastrado com sucesso!!!';
        header("Location:index.php");

	}else{

		echo 'Não cadastrado!!!';
        header("Location:index.php");
	}
?>