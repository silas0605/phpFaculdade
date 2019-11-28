<?php include "index.php"; ?>
<link href="content/geral.css" rel="stylesheet" />
<form class="form-group" name="frm_func" method="get" action="inserir_funcionario.php">
    
        
    <div id=centro>
        
        <center><h1>Cadastro de Relatorios</h1></center> </br>
        
        <div class="form-group row" >
            <label for="nome" class="col-sm-3 col-form-label" >Data da Venda:   </label>   
            <input type="text"  class="form-control" style="width:300px;" class="form-control" name="txtNome">
        </div></br>
       

        <div class="form-group row" >
            <label for="email" class="col-sm-3 col-form-label" >Id do Funcionario:   </label>   
            <input type="text"  class="form-control" style="width:300px;" class="form-control" name="txtEmail">
        </div></br>
       
        

        <div class="form-group row" >
            <label for="End" class="col-sm-3 col-form-label" >Id do Produto:   </label>   
            <input type="text"  class="form-control" style="width:300px;" class="form-control" name="txtEnd">
        </div></br>
       


      <button class="btn btn-primary" type="submit">Button</button>	
        
    </div>
    
</form>
