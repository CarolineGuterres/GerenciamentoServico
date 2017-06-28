<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
        <title>Sistema de Gerenciamento de Serviços</title>
        <link rel="stylesheet" type="text/css" href="../css/font.css">
        <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../css/menu.min.css">
        <link rel="stylesheet" type="text/css" href="../css/imagehover.min.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">  
        <link rel="stylesheet" type="text/css" href="../css/template.css"> 
        <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
        <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script> 
        <script src='../js/jquery-2.1.3.min.js'></script>
        <script src='../js/bootstrap.min.js'></script>   
        <script>
              $(function () {
                $('.dropdown-toggle').dropdown();
              }); 
        </script>   
    </head>
  <body>
    <?php
      include '../view/menuServico.html';
    ?> 

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
                                  <a href='../view/sobreAreaFornecedor.php' class="btn btn-primary btn-block btn-info fa fa-check-square-o'">Sobre</a>
                                </p>
                            </div>
                        </div>
                    </div>
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
         </div>     
    </div>  <!--Fecha container-->
 </nav>  <!--Fecha Menu navegacao-->

 <section id="work-shop" class="section-padding">
    <div class="container ">
      <div class="row">
        <div class="col-md-12">
              <h1>
               <align="left"><a href="../view/areaFornecedor.php"><h5 style="color:rgba(45, 45, 234, 0.98)";>Voltar Página Principal</h5></a></align> 
                <center>Área Fornecedor</center>  
              </h1>
        </div>
      </div>
    </div>
  </section>  
<section id="work-shop" class="section-padding">
  <div class="row">
    <div class="col-lg-12">
      <ul class="mendi-social-networks">
        <li>
          <a href="../view/cadastrarServico.php" class="btn btn-sucess">
            <i class="text-success fa fa-pencil-square-o fa-5x text-center"> </i>
             <p style="color:black; font-size: large;";>Cadastrar Serviço</p>
               <span class="followers"></span>
          </a>
       </li>
    <li>
       <a href="../view/notificacao.php" class="btn btn-sucess" type="button">
          <i class="text-success fa fa-bell fa-5x text-center"> </i>
          <p style="color:black; font-size: large;";>Notificações</p>
          <span class="followers"></span>
      </a>
    </li>
    <li>
       <a href="../view/finalizarServico.php" class="btn btn-sucess" type="button">
        <i class="text-success fa fa-handshake-o fa-5x text-center"> </i>
        <p style="color:black;font-size: large;";>Contratos</p>
        <span class="followers"></span>
      </a>
    </li>
    <li>
      <a href="../view/gerenciarServico.php" class="btn btn-sucess" type="button">
        <i class="text-success fa fa-cogs fa-4x text-center"> </i>
        <p style="color:black;font-size: large;";>Gerenciar Serviços</p>
        <span class="followers"></span>
      </a>
    </li>
  </ul>
  </div>
</div>
  
</section>    
    
      <!--/ work-shop-->
       <section id="work-shop" class="section-padding">
       </section>
      <section id="work-shop" class="section-padding">
      </section>
       <section id="work-shop" class="section-padding">
      </section>
 
     <!--Footer-->
    <?php
      include '../view/footer.html';
     ?> 
                
    </body>
  </html>