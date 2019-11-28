<?php include "index.php"; ?>
<link href="content/geral.css" rel="stylesheet" />
<form class="form-group" name="frm_func" method="get" action="inserir_clientes.php">
    
        
    <div id=centro>
        
        <center><h1> Cadastro de Clientes </h1></center> </br>
        
        <div class="form-group row" >
            <label for="nome" class="col-sm-2 col-form-label" >Nome:   </label>   
            <input type="text"  class="form-control" style="width:500px;" class="form-control" name="txtNome"></br>
        </div>
       

        <div class="form-group row" >
            <label for="email" class="col-sm-2 col-form-label" >E-mail:   </label>   
            <input type="text"  style="width:500px;" class="form-control" name="txtEmail"></br>
        </div>
               
        <div class="form-group row" >
            <label for="End" class="col-sm-2 col-form-label" >Endereço:   </label>   
            <input type="text"  class="form-control" style="width:500px;" class="form-control" name="txtEndereco"></br>
        </div>
       

         <div class="form-group row" >
            <label for="Tel" class="col-sm-2 col-form-label" >Telefone:   </label>   
            <input type="text"  class="form-control" style="width:500px;" class="form-control" name="txtTelefone"></br>
        </div>
       
        <div class="form-group row" >
            <label for="Cpf" class="col-sm-2 col-form-label" >CPF:   </label>   
            <input type="text"  class="form-control" style="width:500px;" class="form-control" name="txtCpf"></br>
        </div>

      <button class="btn btn-primary" type="submit">Cadastrar</button>	
        
    </div>
    
</form>
