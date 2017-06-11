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
         
            <div class="col-md-12">
                  <h1>
                    <align=left><a href="../view/areaFornecedor.php"><h5>Voltar Página Principal</h5></a></align> 
                    <center>Notificações</center>  
                  </h1>
          </div>
        </div>
          <div class="container center">
           
    </section>
     
     <section id="work-shop" class="section-padding">
    
                <table class="table">
                  <thead>
                  <tr>
                    <th  class="text-center">Categoria</th>
                    <th  class="text-center">Cliente</th>
                    <th class="text-center">Telefone</th>
                    <th  class="text-center">E-mail</th>
                    <th  class="text-center">Ação</th>
                  </tr>
                  </thead>

              <?php
                  include "../model/Contrato.class.php";
                   $idUsuario = $_SESSION['idUsuario'];
                    //echo $idUsuario;
                    $obj = new Contrato;
                    
                    $resultado = $obj->mostrarServicosFinalizar($idUsuario);
                    
                    if($resultado){
                      while($linha=mysqli_fetch_assoc($resultado)){
                        $nomeCategoria=$linha['nomeCategoria'];
                        $nomeUsuario=$linha['nomeUsuario'];
                        $telefone=$linha['telefone'];
                        $email=$linha['email']; 
                    
                        echo "<tr><td class='text-center'>".$nomeCategoria."</td>";
                        echo "<td class='text-center'>".$nomeUsuario."</td>";
                        echo "<td class='text-center'>".$telefone."</td>";
                        echo "<td class='text-center'>".$email."</td>";
                       

                        echo "<td class='text-center'><a class='btn btn-danger fa fa-star' href=avaliarServico.php?idServico>Finalizar</a>";//ao clicar enviar mensagem por email
                        echo "</td></tr>";
                        }
                      }
                ?>
                      
                </table>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                
                </div>
              </div>
              </div>
            </div>   
              
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



