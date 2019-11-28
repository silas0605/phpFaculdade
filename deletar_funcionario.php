<?php 
require 'conexao.php';
//captura o valor da caixa de texto e deposita na variável
    	
		$id="";
		
		if (isset($_REQUEST['txtid'])){
		$id =  $_REQUEST['txtid'];}
		
	
$query = "DELETE FROM funcionario  where id_funcionario = '$id'";
        
$ExclusaoOK = mysqli_query($conn,$query);
		
?>
