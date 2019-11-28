<!doctyprhtml>
<?php include "index.php"; ?>
<html>
<head>
<title> :: Usuário :: </title>
</head>
<body>
	<form method="get" action="login_consulta.php">
	<center><label>Usuário: </label><input type="text" name="txtlogin" id="login"><br></center>
	<center><label>Senha: </label><input type="password" name="pwdsenha" id="senha"><br></center>
	
	<center><button type="submit" class="btn btn-primary" id="entrar" name="entrar">Entrar</button></center>
	<?php
	//<input type="submit" value="cadastrar" id="cadastrar" name="cadastrar"><br>
	?>
	<center><a href="cadastrar_usuario.php">Cadastre-se</a><center>
</form>
</body>
</html>	

