<?php include "index.php"; ?>
<?php
	include "conexao.php";

	$nome = $_REQUEST['txtNome'];
	$email = $_REQUEST['txtEmail'];
   
	
	$insereDados = mysqli_query($conn, "INSERT INTO funcionario (Nome, Email) 
	VALUES ('$nome', '$email')") or die ("Erro ao Cadastrar");
	if($insereDados != ""){

		echo 'Cadastrado com sucesso!!!';
        header("Location:index.php");

	}else{

		echo 'Não cadastrado!!!';
        header("Location:index.php");
	}
?>