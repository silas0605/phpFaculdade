<?php
      $servidor = "localhost";
      $usuario = "root";
      $senha = "";
      $db = "banco_geral";
      $conn = mysqli_connect($servidor, $usuario, $senha, $db);
     
	 if (!$conn) {
            die("Falha ao conectar com o servidor: " 
			. mysqli_connect_error());
      }
      else {
            echo "Conexão efetuada com sucesso!";
      }
?>