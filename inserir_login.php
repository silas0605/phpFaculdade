<?php include "index.php"; ?>
<?php
	include "conexao.php";

	$nome = $_REQUEST['txtNome'];
	$email = $_REQUEST['txtSenha'];
	
	$insereDados = mysqli_query($conn, "INSERT INTO usuario (Nome, Email) 
	VALUES ('$nome', '$senha')") or die ("Erro ao Cadastrar");
	if($insereDados != ""){

		echo 'Cadastrado com sucesso!!!';
        header("Location:login.php");

	}else{

		echo 'Não cadastrado!!!';
        header("Location:login.php");
	}
?>