<?php include "index.php"; ?>
<?php
	include "conexao.php";

	$nome = $_REQUEST['txtnome'];
	$email = $_REQUEST['txtemail'];
    $cpf = $_REQUEST['txtcpf'];
    $telefone = $_REQUEST['txttelefone'];
	$endereco = $_REQUEST['txtendereco'];
	$estado = $_REQUEST['txtestado'];
	$cep = $_REQUEST['txtcep'];
	
	$insereDados = mysqli_query($conn, "INSERT INTO cliente (nome, email, telefone, cpf, endereco, estado, cep) 
	VALUES ('$nome', '$email', '$telefone', '$cpf', '$endereco', '$estado', '$cep')") or die (mysql_error());
	if($insereDados != ""){

		echo 'Cadastrado com sucesso!!!';

	}else{

		echo 'Não cadastrado!!!';
	}
?>