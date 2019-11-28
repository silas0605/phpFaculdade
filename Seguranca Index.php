<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <link href="content/index.css" rel="stylesheet" />
    <link href="content/loucura.css" rel="stylesheet" />
    <link href="content/bootstrap.css" rel="stylesheet" />  
    <title>Home</title>
</head>
<body>
    <header>
        <nav class="navtop">
            
            <h8> GL.NET  </h8>
			<a href="#" id="af">Quem somos</a>
            <a href="#" id="ao">Fale Conosco</a>
            <span>
                <img src="img/IconesRedesSociais/whatsapp.png" width="15" id="whats" />
                <span class="number"> (11) 970028992 </span> <span class="barra">|</span>
            </span>
            <span>
                <img src="img/IconesRedesSociais/facebook.png" width="15" id="face" />
                <span class="number">Vendas</span> <span class="barra">|</span>
            </span>
            <span>
                <img src="img/IconesRedesSociais/instagram.png" width="17" id="insta" />
                <span class="number">Vendas</span> <span class="barra">|</span>
            </span>
            <span>Email: gl.net@gmail.com</span>
            
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
        </nav>
    </header>
    
   
    <div id=coisas>
         <div class="row mx-md-n5 px-4">
    
            <div class="col p-5 py-3 mt-1 px-2 ">
                <a href="funcionario.php"><img src='img/cad_func.png' width="70%" height="80%"></a>
                <center> <label for="email" class"" "col-form-label" > Cadastro de funcionario   </label></center>
            </div>


            <div class="col p-5 py-3 mt-1 px-2 ">
              <a href="clientes.php"><img src='img/cad_cliente.png' width="70%" height="80%"></a>
              <center> <label for="email"  "col-form-label" > Cadastro de clientes   </label></center> 
            </div>

            <div class="col p-5 py-3 mt-1 px-2 " >
              <a href="produto.php"><img src='img/cad_produtos.png' width="70%" height="80%"></a>
              <center>  <label for="email" "col-form-label" > Cadastro de Produtos   </label> </center> 
            </div>      

            <div class="col p-5 py-3 mt-1 px-2 ">
              <a href="vendas.php"><img src='img/vendas.png' width="70%" height="80%"></a>
              <center>  <label for="email" class"" "col-form-label" > Vendas   </label>  </center>                                                                      
            </div>

            <div class="col p-5 py-3 mt-1 px-2 ">
              <a href="relatorios.php"><img src='img/relatorio.png' width="70%" height="80%"></a>
              <center><label for="email" class"" "col-form-label" > Relatorios    </label> </center> 
            </div>
     </div>      
    </div>
    <div id=banner>
        <div class="row mx-md-n5 px-4">
        <?php
        
            $banner['1'] = "<img src=\"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrUc5OV6vA_BydA74RMBEF4fmRaY5PHbcK6imQTQx2StfCZpHDXA&s\"/>";
            
            $banner['2'] = "<img src=\"https://images6.kabum.com.br/produtos/fotos/99866/monitor-lg-led-23-8-widescreen-full-hd-ips-hdmi-24mk430h__1547830368_gg.jpg\"/>";
        
            $banner['3'] = "<img src=\"https://images6.kabum.com.br/produtos/fotos/99866/monitor-lg-led-23-8-widescreen-full-hd-ips-hdmi-24mk430h__1547830371_gg.jpg\"/>";    
        
            $rand = rand(1,3);
        
        print $banner[$rand] ;

        ?>
        </div>        
    </div>
</body>
</html>
