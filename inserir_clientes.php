<?php include "index.php"; ?>
<?php
	include "conexao.php";

	$nome = $_REQUEST['txtNome'];
	$email = $_REQUEST['txtEmail'];
	$telefone = $_REQUEST['txtTelefone'];
	$cpf = $_REQUEST['txtCpf'];
	$endereco = $_REQUEST['txtEndereco'];
   
	
	$insereDados = mysqli_query($conn, "INSERT INTO cliente (nome, email,telefone,cpf,endereco) 
	VALUES ('$nome', '$email','$telefone','$cpf','$endereco')") or die ("Erro ao Cadastrar");
	if($insereDados != ""){

		echo 'Cadastrado com sucesso!!!';
        header("Location:index.php");

	}else{

		echo 'Não cadastrado!!!';
        header("Location:index.php");
	}
?>