<?php include "index.php"; ?>



<form name="frm_func" method="get" action="cadastrar_user.php">
    <div class="form-group">
			<label for="nome">Login</label>
			<input type="text" class="form-control" name="txtlogin">
	</div>
	
	<div class="form-group">
			<label for="password">Senha</label>
			<input type="password" class="form-control" name="pwdsenha">
	</div>

  <button type="submit">Enviar</button>								   
								   
</form>
