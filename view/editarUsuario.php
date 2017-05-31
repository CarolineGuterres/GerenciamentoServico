<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Gerenciamento de Serviços</title>
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="../css/menu.min.css">
     <link rel="stylesheet" type="text/css" href="../css/dropdown-menu.css">
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
        <div class="navbar-collapse style= collapse in" id="bs-megadropdown-tabs" style="
    padding-left: 0px;
">
<ul class="nav navbar-nav navbar-right">
          
           <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="fa fa-user"></span> 
                 <?php

                      session_start();
                      $login = $_SESSION['login'];
                      $senha = $_SESSION['senha'];
                      $idUsuario = $_SESSION['idUsuario'];
                      $endereco = $_SESSION['endereco'];
                      $nomeUsuario = $_SESSION['nomeUsuario'];


                      $_SESSION['logado'] = true;
                        if (isset($_SESSION['login']) and isset($_SESSION['senha'])){
                          echo 'Seja Bem-Vindo ', $_SESSION['login'];
                        }


                                   ?>   
          <span class="fa fa-chevron-down" aria-hidden="true"></span>                            

                    <ul style="background-color:white;" class="dropdown-menu">    
                                
                  <input type="hidden" name="idUsuario" value="<?php echo $rows['idUsuario'] ?>">

                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12 center">
                                        <p>
                                            <a href='../view/logout.php' class="btn btn-primary btn-danger btn-block fa fa-close">Sair</a>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
            </a>
                  

                    </ul>
                </li>
                </div>
                </li>
          </ul>
          </li>
         </ul>
          </div>
        </div>
        
      </div>
    </nav>
    <!--/ Navigation bar-->
   

    <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
              <h1>
                <center>Editar Usuário</center>  
              </h1>
        </div>
      </div>
    </div>
      <div class="container">
        <div class="row">
          <div class="header-section text-center">

           <form class="form-horizontal" role="form" method="post" action="../controller/controlaUsuario.php">
         <?php

                    include_once '../model/Usuario.class.php';
                      $idUsuario = $_GET['idUsuario'];
                                          
                      $obj = new Usuario();

                       $resultado = $obj->mostrarUsuarioAlterar($idUsuario);

                      if($resultado){
                         while($linha=mysqli_fetch_assoc($resultado)){
                             $nomeUsuario = $linha['nomeUsuario'];
                             $email = $linha['email'];
                             $telefone = $linha['telefone'];
                             $cidade = $linha['cidade'];
                             $endereco = $linha['endereco'];

                         }
                    }

           ?>

              <input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">
        <div class="form-group">
              <div class="col-sm-2">
                <label for="nomeUsuario" class="control-label">Nome</label>
               </div>
            <div class="col-sm-10">
             <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" placeholder="Informe seu nome completo"  value="<?php echo $nomeUsuario; ?>">
            </div>
          </div>
        <div class="form-group">
              <div class="col-sm-2">
                <label for="email" class="control-label">E-mail:</label>
               </div>
            <div class="col-sm-10">
             <input type="email" class="form-control" id="email" name="email" placeholder=""  value="<?php echo $email; ?>">
            </div>
          </div>
        <div class="form-group">
              <div class="col-sm-2">
                <label for="telefone" class="control-label">Telefone:</label>
               </div>
            <div class="col-sm-10">
             <input type="text" class="form-control telefone" id="telefone" name="telefone" placeholder="(99)99999-9999"  value="<?php echo $telefone; ?>">
            </div>
          </div>
        <div class="form-group">
              <div class="col-sm-2">
                <label for="cidade" class="control-label">Cidade:</label>
               </div>
            <div class="col-sm-10">
             <input type="text" class="form-control" id="cidade" name="cidade" placeholder=""  value="<?php echo $cidade; ?>">
            </div>
          </div>
        <div class="form-group">
              <div class="col-sm-2">
                <label for="endereco" class="control-label">Endereço:</label>
               </div>
            <div class="col-sm-10">
             <input type="text" class="form-control" id="endereco" name="endereco" placeholder=""  value="<?php echo $endereco; ?>">
            </div>
          </div>
        <div class="form-group">
           <div class="col-sm-offset-2 col-sm-10">
             <center> 
            <input type="submit" class="btn btn-success"  name="operacao" value="Editar"/>
            <input type="submit" class="btn btn-danger" name="operacao" value="Excluir"/>
          </center> 
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
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
     <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
      <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
      <script>
        $(function () {
          $('.dropdown-toggle').dropdown();
        }); 
      </script>
          
  </body>
</html>