<?php include "index.php"; ?>
<link href="content/geral.css" rel="stylesheet" />
<form class="form-group" name="frm_func" method="get" action="inserir_funcionario.php">
    
        
    <div id=centro>
        
        <center><h1>Cadastro de Produtos</h1></center> </br>
        
        <div class="form-group row" >
            <label for="nome" class="col-sm-3 col-form-label" >Id Produto:   </label>   
            <input type="nome"  class="form-control" style="width:400px;" class="form-control" name="txtid_prod"></br>
        </div>
       

        <div class="form-group row" >
            <label for="email" class="col-sm-3 col-form-label" >Id Fornecedor:   </label>   
            <input type="email"  class="form-control" style="width:400px;" class="form-control" name="txtid_forn"></br>
        </div>
       
        

        <div class="form-group row" >
            <label for="End" class="col-sm-3 col-form-label" >Nome do Produto:   </label>   
            <input type="End"  class="form-control" style="width:400px;" class="form-control" name="txtnome_prod"></br>
        </div>
       

         <div class="form-group row" >
            <label for="Tel" class="col-sm-3 col-form-label" >Modelo:   </label>   
            <input type="Tel"  class="form-control" style="width:400px;" class="form-control" name="txtmodelo"></br>
        </div>
       
        <div class="form-group row" >
            <label for="Cpf" class="col-sm-3 col-form-label" >Lote:   </label>   
            <input type="Cpf"  class="form-control" style="width:400px;" class="form-control" name="txtlote"></br>
        </div>
        
        <div class="form-group row" >
            <label for="nome" class="col-sm-3 col-form-label" >Preço:   </label>   
            <input type="nome"  class="form-control" style="width:400px;" class="form-control" name="txtpreco"></br>
        </div>
       

        <div class="form-group row" >
            <label for="email" class="col-sm-3 col-form-label" >Quantidade:   </label>   
            <input type="email"  class="form-control" style="width:400px;" class="form-control" name="txtqtd"></br>
        </div>
       

      <button class="btn btn-primary" type="submit">Cadastrar</button>	
        
    </div>
    
</form>
