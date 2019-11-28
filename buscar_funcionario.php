

<?php 
include 'conexao.php';
//captura o valor da caixa de texto e deposita na variável
        $id="";
		
		if (isset($_REQUEST['txtid'])){
		$id = $_REQUEST['txtid'];
		}
		
		function consultaFuncionario($conn,$id){
			
		$consulta_funcionario = mysqli_query
		($conn,"select * from funcionario where id_funcionario = '$id'");

		return $consulta_funcionario;

}
		
?>
