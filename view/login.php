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
     <!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Serviços<span></span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
   

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
                            <div class="panel-title"><center>Logar no Sistema</center></div>
                
                        </div> 
                        

                 
             <section class="login-form">         
              
                        <div style="padding-top:30px" class="panel-body" >

                            <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                
                            <form id="loginform" class="form-horizontal" role="form" action="../controller/controlaLogin.php" method="POST">
                              <input type="hidden" name="operacao" value="logar"/> 
                  
                                 <input type="hidden" name="idUsuario" id="idUsuario"/>
                   
                                <div style="margin-bottom: 25px" class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input id="login-username" type="text" id="login" class="form-control" name="login" placeholder="Login" required/>                                        
                                        </div>
                                    
                                <div style="margin-bottom: 25px" class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input id="login-password" type="password" id="senha" class="form-control" name="senha" placeholder="Senha" required/>
                                        </div>
                                  

                                <div style="margin-top:10px" class="form-group">
                                        <!-- Button -->

                                  <div class="form-group">
                                    <div class="col-sm-12">
                                        <input type="submit" class="btn btn-success" id="logar" value="Logar"/>
                                         <input type="reset" class="btn btn-danger" value="Limpar"/>
                                    </div>
                                  </div>
                                </div>


                                    <div class="form-group">
                                        <div class="col-md-12 control">
                                            <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                                Não possui uma conta?
                                            <a href="../view/cadastrarUsuario.php"<h5> Cadastre aqui</h5>
                                            </a>
                                            </div>
                                        </div>
                                    </div>    
                                </form>     
                           </section>
        

                            </div>                     
                        </div>  
                </div>
            </section>
            </div>
            </div>
            
                              
    <!--/ work-shop-->
   
    <!--Footer-->
    <footer id="footer" class="footer">
      <div class="container text-center">
    
        ©2017 Caroline Guterres
        
      </div>
    </footer>
    <!--/ Footer-->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>