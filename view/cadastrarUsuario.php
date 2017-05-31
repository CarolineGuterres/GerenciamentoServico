<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Gerenciamento de Serviços</title>
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/mascaras.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    
   
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
        <ul class="nav navbar-nav navbar-right">  
          <li class="btn-trial"><a href="../view/login.php">Login</a></li>
        </ul>
        </div>
      </div>
    </nav>
    <!--/ Navigation bar-->
   

 <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
              <h1>
                <center>Cadastro Usuário</center>  
              </h1>
              <br>
        </div>
      </div>
    </div>
      <div class="container">
        <div class="row">
          <div class="header-section text-center ol-md-offset-4">

           <form class="form-horizontal" role="form" method="post" action="../controller/controlaUsuario.php">
                <input type="hidden" name="operacao" value="incluir"/>
            
                  <div class="form-group">
                    <div class="col-sm-2">
                       <label for="nomeUsuario" class="control-label">Nome</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" placeholder="Informe seu nome completo" required>
                    </div>
                  </div>
            
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="email" class="control-label">E-mail:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" placeholder="" nblur="validacaoEmail(f1.email)"  maxlength="60" size='40' required>
                    </div>
                  </div>
            
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="telefone" class="control-label">Telefone:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" class="form-control telefone" id="campotelefone" name="telefone" placeholder="(99)99999-9999" required>
                    </div>
                  </div>
            
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="cidade" class="control-label">Cidade:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="cidade" name="cidade" placeholder="" required>
                    </div>
                  </div>
            
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="endereco" class="control-label">Endereço:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="endereco" name="endereco" placeholder="" required>
                    </div>
                  </div>
            
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="login" class="control-label">Login:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="login" name="login" placeholder="" required>
                    </div>
                  </div>
            
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="senha" class="control-label">Senha:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="camposenha" name="senha" placeholder="" maxlength="10" required> <p>*Mínimo 6 Caracteres e Máximo 8 Caracteres</p>  
                    </div>
                  </div>
            
                  <div class="form-group">
                    <div class="col-sm-2">
                      <label for="senha" class="control-label">Você é:</label>
                    </div>
                    <div class="col-sm-2">
                      <input type="radio" name="tipo" id="tipo" value="cliente" required>Cliente
                      <input type="radio" name="tipo" id="tipo" value="fornecedor" required>Fornecedor<br>
                    </div>
                  </div>
            
                  <div class="form-group">
                    <div class="col-sm-12">
                        <input type="submit" class="btn btn-success" id="logar" value="Cadastrar"/>
                        <input type="reset" class="btn btn-danger" value="Limpar"/>
                    </div>
                  </div>
       
               </form>
            </div>
      </div>
    </div>
</section>
    <!--/ work-shop-->
   
    <!--Footer-->
    <footer id="footer" class="footer">
      <div class="container text-center">
    
        ©2017 Caroline Guterres
        
      </div>
    </footer>
    <!--/ Footer-->
    
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>