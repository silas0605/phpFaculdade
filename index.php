<?php
      // FORÇA O NÃO USO DE CACHE, MAS NÃO É RECOMENDADO USAR EM PRODUÇÃO
      //
      header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
      header('Cache-Control: no-store, no-cache, must-revalidate');
      header('Cache-Control: post-check=0, pre-check=0', FALSE);
      header('Pragma: no-cache');
?><!DOCTYPE html>


<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <link href="content/index.css" rel="stylesheet" />
    <link href="content/bootstrap.css" rel="stylesheet" />
    <title>Projeto Uninove</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php ">
                <img src="img/avg.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Projeto Uninove 
            </a>            
            <span>
                
                <?php
                
                if (isset($_COOKIE['login'])){
                $login_cookie = $_COOKIE['login'];
                if(isset($login_cookie)){ 
                echo "Bem-vindo, $login_cookie";
                }   
                }
        ?>
            </span>

		
            <ul class="navbar navbar-dark bg-dark">
                <li><a href="funcionario.php">Funcionários</a></li>
                <li><a href="clientes.php">Clientes</a></li>
                <li><a href="produto.php">Produtos</a></li>
                <li><a href="relatorios.php">Relatórios</a></li>
                <li><a href="vendas.php">Vendas</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
		
    </header>
				
</body>
</html>
