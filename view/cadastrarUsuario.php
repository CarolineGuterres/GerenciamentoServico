 <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Sistema de Gerenciamento de Serviços</title>
      
      <link rel="stylesheet" type="text/css" href="css/font.css">
      <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
       <link rel="stylesheet" type="text/css" href="../css/menu.min.css">
       <link rel="stylesheet" type="text/css" href="../css/dropdown-menu.css">
      <link rel="stylesheet" type="text/css" href="../css/imagehover.min.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      
      <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
      <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
      <script type="text/javascript" src="../js/mascaras.js"></script>


     
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
          <a class="navbar-brand" href="index.html">Serviços<br><span></span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">  
         <li class="btn-conta"><a href="../view/cadastrarUsuario.php">Criar Conta</a></li>
          <li class="btn-trial"><a href="../view/login.php">Login</a></li>
        </ul>
        </div>
        <div class="navbar-collapse style= collapse in" id="bs-megadropdown-tabs" style="
    padding-left: 0px;
">
<ul class="nav navbar-nav navbar-right">
          
          
         </ul>
          </div>
        </div>
        
      </div>
    </nav>
    
 <section id="work-shop" class="section-padding">
    <div class="container ">
      <div class="row">
        <div class="col-md-12">
              <h1>
               <align=left><a href="../view/areaFornecedor.php"><h5>Voltar Página Principal</h5></a></align> 
                <center>Cadastro Usuario</center>  
              </h1>
              <br>
        </div>
      </div>
    </div>


 <form class="form-horizontal" role="form" method="post" action="../controller/controlaUsuario.php">
      
<fieldset>

            <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario']; ?>">
            <input type="hidden" name="operacao" value="incluir"/>
            <div class="form-group">
              <label class="col-md-4 control-label" for="nomeUsuario">Nome</label>  
              <div class="col-md-4">
              <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" placeholder="Informe seu nome completo" required>
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="endereco">E-mail</label>  
              <div class="col-md-4">
             <input type="email" class="form-control" id="email" name="email"  placeholder="examplo@gmail.com" nblur="validacaoEmail(f1.email)"  maxlength="60" size='40' required>
              </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="telefone">Telefone</label>
              <div class="col-md-4">
                <input type="text" class="form-control telefone" id="telefone" name="telefone" placeholder="(99)99999-9999">   
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="cidade">Cidade</label>  
              <div class="col-md-4">
             <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe sua cidade" required>
                
              </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="endereco">Endereço</label>
              <div class="col-md-4">
                  <input type="text" class="form-control"  name="endereco" placeholder="Informe seu endereço" required>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="login">Login</label>  
              <div class="col-md-4">
             <input type="text" class="form-control" name="login" placeholder="Informe seu login" required>
              </div>
            </div>
              <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="senha">Senha:</label>  
              <div class="col-md-4">
             <input type="password" class="form-control"  name="senha" placeholder="Informe uma senha" maxlength="10" required> <p>*Mínimo 6 Caracteres e Máximo 8 Caracteres</p>  
              </div>
            </div>
              <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="tipo">Voce é:</label>  
              <div class="col-md-4">
             <input type="radio" name="tipo" id="tipo" value="cliente" required>Cliente
              <input type="radio" name="tipo" id="tipo" value="fornecedor" required>Fornecedor<br>
              </div>
            </div>

            
            <!-- Button -->
            <div class="form-group">
              
               <div class="col-sm-offset-4 col-sm-3">
                 <center> <input type="submit" class="btn btn-success" value="Cadastrar"/>
                   <input type="reset" class="btn btn-danger" value="Limpar"/></center>
                </div>
            </div>

            </fieldset>
  </form>

<section id="work-shop" class="section-padding">
    <div class="container ">
      <div class="row">
        
      </div>
    </div>
</section>    
     
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
      <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
      <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>   
   
    </body>
  </html>

