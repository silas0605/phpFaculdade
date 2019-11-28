<?php include "index.php"; ?>
<link href="content/geral.css" rel="stylesheet" />
<form class="form-group" name="frm_func" method="get" action="inserir_funcionario.php">
    
        
    <div id=centro>
        
        <div class="form-group row" >
            <label for="nome" class="col-sm-2 col-form-label" >Nome:   </label>   
            <input type="nome" readonly class="form-control" style="width:500px;" class="form-control" name="txtNome"></br>
        </div>
       

        <div class="form-group row" >
            <label for="email" class="col-sm-2 col-form-label" >email:   </label>   
            <input type="email" readonly class="form-control" style="width:500px;" class="form-control" name="txtEmail"></br>
        </div>
       
        

        <div class="form-group row" >
            <label for="End" class="col-sm-2 col-form-label" >Endereço:   </label>   
            <input type="End" readonly class="form-control" style="width:500px;" class="form-control" name="txtEnd"></br>
        </div>
       

         <div class="form-group row" >
            <label for="Tel" class="col-sm-2 col-form-label" >Telefone:   </label>   
            <input type="Tel" readonly class="form-control" style="width:500px;" class="form-control" name="txtTel"></br>
        </div>
       
        <div class="form-group row" >
            <label for="Cpf" class="col-sm-2 col-form-label" >CPF:   </label>   
            <input type="Cpf" readonly class="form-control" style="width:500px;" class="form-control" name="txtCpf"></br>
        </div>

      <button class="btn btn-primary" type="submit">Button</button>	
        
    </div>
    
</form>
