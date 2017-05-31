
  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Sistema de Gerenciamento de Serviços</title>
      <link rel="stylesheet" type="text/css" href="../css/font.css">
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

                          <li>
                              <div class="navbar-login">
                                  <div class="row">
                                      <div class="col-lg-12 center">
                    <input type="hidden" name="idUsuario" value="<?php echo $rows['idUsuario'] ?>">

                                          <p class="text-center">
                                              <a class="btn btn-primary btn-block btn-sm fa fa-edit" href=editarUsuario.php?idUsuario=<?php echo $_SESSION['idUsuario']; ?>>Atualizar Dados</a>
                                          </p>
                                      </div>

                              </div>
                          </li>
                          <li class="divider"></li>
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
     

     <section id="work-shop" class="section-padding">
        <div class="container">
         <center> <div class="row col-md-12">
            
              <div class="col-md-3 text-success justified">  
                <a href="../view/cadastrarServico.php" class="btn btn-sucess">
                  <i class="text-success fa fa-pencil-square-o fa-5x text-center"></i>
                    <center><h4><strong>Cadastrar Serviço</strong></h4></center>
              </div>

              <div class="col-md-3 text-success justified"> 

                <a href="../view/notificacao.php" class="btn btn-sucess" type="button">
                    <i class="text-success fa fa-bell fa-5x text-center"></i>
                    <h4><strong>Notificações</strong></h4>
                  </a>
              </div>

              <div class="col-md-5 text-success justified"> 
                <a href="../view/gerenciarServico.php" class="btn btn-sucess" type="button">
                    <i class="text-success fa fa-cogs fa-5x text-center"></i>
                    <h4><strong>Gerenciar Serviços</strong></h4>
                  </a>
              </div>
          </div> 
          </center>
        
       </div>
        
      
      </section>
      <!--/ work-shop-->
       <section id="work-shop" class="section-padding">
    
      
      </section>

      <section id="work-shop" class="section-padding">
    
      
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
           
            <script>
              $(function () {
                $('.dropdown-toggle').dropdown();
              }); 
            </script>
                
    </body>
  </html>