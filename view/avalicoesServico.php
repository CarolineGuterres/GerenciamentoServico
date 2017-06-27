<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Gerenciamento de Serviços</title>
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="../css/menu.min.css">
    <link rel="stylesheet" type="text/css" href="../css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
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
         <!--Menu Navegação-->
<nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
           <img src="../img/logo.png" width="220" >
        </div>
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
                  <align=right><a href="../view/areaCliente.php"><h5 style="color:rgba(45, 45, 234, 0.98)";>Voltar Página Principal</h5></a></align> 
                <center>AVALIAÇÕES</center>  
                </h1>
          </div>
        </div>
</div><!--Fecha container-->
<br>

<div class="container">
<div class="input-group">        
        
      </div>
    </div>
  </section>  
    <div class="container">     
                <?php
                include "../model/Avaliacao.class.php";

                   $idServico = $_GET['idServico'];
                
                    $obj = new Avaliacao;
                    
                    $resultado= $obj->mostrarAvaliacao($idServico);
                   if(mysqli_num_rows($resultado)!=0) {
                        while($linha=mysqli_fetch_assoc($resultado)){
                          $nota=$linha['nota'];
                          $comentario=$linha['comentario'];

                         echo"<div class='well well-lg'>";
                         echo"<h4><br><i class='fa fa-star' aria-hidden='true'></i>Nota:";
                         echo "<div class='estrelas'>";

                            if($nota==1){
                              echo"<label for='cm_star-4'><i class='fa'></i></label>";
                              }
                             elseif($nota==2){
                              echo "<label for='cm_star-2'><i class='fa'></i><i class='fa'></i></label>";
                              }
                              elseif($nota==3){
                                echo "<label for='cm_star-3' value='3'><i class='fa'></i><i class='fa'></i><i class='fa'></i></label>";
                              } 
                              elseif ($nota==4) {
                                echo"<label for='cm_star-4'><i class='fa'><i class='fa'></i><i class='fa'></i><i class='fa'></i></i></label>";
                              }elseif ($nota==5) {
                                echo"<label for='cm_star-5'><i class='fa'><i class='fa'></i><i class='fa'></i><i class='fa'></i><i class='fa'></i></i></label>";
                             }
                          
                          echo"</div>";
                          echo "</h4>";
                          echo"<h4><i class='fa fa-comment-o' aria-hidden='true'></i>Comentário: ";
                          echo"<br>$comentario</h4>";
                        
                          echo"</div>";
                          
                        }
                    }else{
                      echo"<center><h3 class='text center'>Não foi encontrado nenhuma avaliação.</h3>
                          </center>";
                    }
                    ?>
                    
              </table> <!--Fecha tabela-->
    </div> <!--Fecha container-->
    
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