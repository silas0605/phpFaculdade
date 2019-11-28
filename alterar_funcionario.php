<?php 
require 'conexao.php';
//captura o valor da caixa de texto e deposita na variável
    	$id="";
		$nome="";
		$email="";
		//$cargo="";
		
		if (isset($_REQUEST['txtid'])){
		$id =  $_REQUEST['txtid'];}
		
		if (isset($_REQUEST['txtnome'])){
		$nome =  $_REQUEST['txtnome'];}
		
		if (isset($_REQUEST['txtemail'])){
		$email =  $_REQUEST['txtemail'];}
		
		//if (isset($_REQUEST['cbocargo'])){
		//$cargo =  $_REQUEST['cbocargo'];}
			
	
$query = "UPDATE funcionario set nome = '$nome' , email = '$email'  where id_funcionario = '$id'";
        
$ok = mysqli_query($conn,$query);


		
?>
