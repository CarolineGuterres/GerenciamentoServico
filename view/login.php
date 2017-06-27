<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Gerenciamento de Serviços</title>
    
    <link rel="stylesheet" type="text/css" href="../css/font.css">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
   
  </head>
  <body>
     <!--Menu navegacao-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
       <img src="../img/logo.png" width="220">
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        
        </div>
      </div>
    </nav>
    <!--/ Fecha menu navegacao-->
   
<section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">     
        </div>
      </div>
    </div>
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
           <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">      
                <div class="panel panel-info" >
                        <div class="panel-heading">
                            <div class="panel-title"><center><h4>Logar no Sistema</h4></center></div>
                        </div> 
                        
             <section class="login-form">         
                        <div style="padding-top:30px" class="panel-body" >
                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div> 
                            <!-- formulario entrada de dados-->  
                            <form id="loginform" class="form-horizontal" role="form" action="../controller/controlaLogin.php" method="POST">
                                <input type="hidden" name="operacao" value="LOGAR"/> 
                                   <input type="hidden" name="idUsuario" id="idUsuario"/>
                     
                                  <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                      <input id="login-username" type="text" id="login" class="form-control" name="login" placeholder="Login" required/>                                        
                                  </div>
                                      
                                  <div style="margin-bottom: 25px" class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                      <input id="login-password" type="password" id="senha" class="form-control" name="senha" placeholder="Senha" required/>
                                  </div>
                                  
                                  <!--Botões-->
                                  <div style="margin-top:10px" class="form-group">
                                    <div class="form-group">
                                      <div class="col-sm-12">
                                        <input type="submit" class="btn btn-success " id="logar" value="LOGAR"/>
                                        <input type="reset" class="btn btn-danger " value="LIMPAR"/>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  <div class="form-group">
                                    <div class="col-md-12 control">
                                     <div style="border-top: 1px solid#888; padding-top:15px; font-size:100%">
                                        Não possui uma conta?
                                          <a href="../view/cadastrarUsuario.php"<h5>Cadastre aqui</h5>
                                          </a>
                                     </div>
                                    </div>
                                  </div>    
                                </form>     
                </section>
           </div>                     
         </div>  
      </div>
    </div>
  </div>
</section>

  <section id="work-shop" class="section-padding">
    
  </section>
                            
  <!--Footer-->
    <?php
      include '../view/footer.html';
     ?> 
  <!--/ Footer-->
     
  </body>
</html>