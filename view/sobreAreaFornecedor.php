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
<div class="container">
        <div class="row">
          <div class="col-md-12">
                <h1>
                  <center>Sobre</center>  
                </h1>
                <br>
          </div>
        </div>
</div><!--Fecha container-->
<br>

<div class="container">
	<div class="row"> <!-- 6 + 6 = 12 -->
	    <div class="col-md-2"> </div>
	    <div class="col-md-3 text-success fa fa-pencil-square-o fa-5x text-center" style="font-size: x-large">Cadastrar Servico </div>
	    <div class="col-md-5"><p align='justify'>Esta função está relacionada ao cadastro de um novo serviço.</p> </div>
	</div>
</div>
<br><br>
<div class="container">
	 <div class="col-md-2"> </div>
	    <div class="col-md-3 text-success fa fa-bell fa-5x text-center" style="font-size: x-large">Notificações </div>
	    <div class="col-md-5"><p align='justify'>Esta função refere-se aos serviços os quais os clientes demonstraram interesse.</p> </div>
	</div>
</div>	
<br><br>
<div class="container">
	 <div class="col-md-2"> </div>
	    <div class="col-md-3 text-success fa fa-handshake-o fa-5x text-center" style="font-size: x-large">Contratos </div>
	    <div class="col-md-5"><p align='justify'>Esta função é sobre todos os serviços que foram realizados contrato</p></div>
	</div>
</div>	
<br><br>	
<div class="container">
	 <div class="col-md-2"> </div>
	    <div class="col-md-3 text-success fa fa-cogs fa-4x text-center" style="font-size: x-large">Gerenciar Serviços </div>
	    <div class="col-md-5"><p align='justify'>Esta função permite alterar dados do serviço ou excluir.</p> </div>
	</div>
</div>	

</section>

<section id="work-shop" class="section-padding">
 </section>
     
    
  </body>
   
</html>