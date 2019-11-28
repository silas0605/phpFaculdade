<?php include "index.php"; ?>

<h1>Cadastro de Clientes:</h1>

<form name="frm_func" method="get" action="inserir_cliente.php">
    
    <div class="form-group mb-2">
        <div class="form-group mb-2">
			<label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome:</label>
			<input type="nome" style="width: 500px;" class="form-control form-control-sm" name="txtnome" placeholder="Nome">
		</div>
		<div class="form-group mb-2">
			<label for="email" class="col-sm-2 col-form-label col-form-label-sm">E-mail:</label>
			<input type="email" style="width: 500px;" class="form-control form-control-sm" name="txtemail" placeholder="E-mail">
        </div>    
    	<div class="form-group mb-2">
			<label for="cpf" class="col-sm-2 col-form-label col-form-label-sm">CPF:</label>
			<input type="text" style="width: 500px;" class="form-control form-control-sm" name="txtcpf" placeholder="CPF">
		</div>
    
    	<div class="form-group mb-2">
			<label for="telefone" class="col-sm-2 col-form-label col-form-label-sm">Telefone:</label>			
			<input type="text" style="width: 500px;" class="form-control form-control-sm" name="txttelefone" placeholder="Telefone">
		</div>
    
    	<div class="form-group mb-2">
			<label for="endereco" class="col-sm-2 col-form-label col-form-label-sm">Endereço:</label>			
			<input type="text" style="width: 500px;" class="form-control form-control-sm" name="txtendereco" placeholder="Endereço">
		</div>

		<div class="form-group mb-2">
			<label for="estado" class="col-sm-2 col-form-label col-form-label-sm">Estado:</label>
			<select style="width:150px;" class="form-control form-control-sm" name="txtestado">
				<option selected>Escolher...</option>
			
				<option>Acre</option>
				<option>Alagoas</option>
				<option>Amapá</option>
				<option>Amazonas</option>
				<option>Bahia</option>
				<option>Ceará</option>
				<option>Distrito Federal</option>
				<option>Espírito Santo</option>
				<option>Goiás</option>
				<option>Maranhão</option>
				<option>Mato Grosso</option>
				<option>Mato Grosso do Sul</option>
				<option>Minas Gerais</option>
				<option>Pará</option>
				<option>Paraíba</option>
				<option>Paraná</option>
				<option>Pernambuco</option>
				<option>Piauí</option>
				<option>Rio de Janeiro</option>
				<option>Rio grande do Norte</option>
				<option>Rio Grande do Sul</option>
				<option>Rondônia</option>
				<option>Roraima</option>
				<option>Santa Catarina</option>
				<option>São Paulo</option>
				<option>Sergipe</option>
				<option>Tocantins</option>
      		  
			</select>
		</div>
		<div class="form-group mb-2">
			<label for="estado" class="col-sm-2 col-form-label col-form-label-sm">CEP</label>
			<input type="text	" style="width: 100px;" class="form-control form-control-sm" name="txtcep" placeholder="CEP">
    	</div>
  </div>
    
    	<br>

  	<button type="submit" class="btn btn-primary">Cadastrar</button>	
    
    
								   
</form>
