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
    <link rel="stylesheet" type="text/css" href="../css/dropdown-menu.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
  
    <!--/ Navigation bar-->
    <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
              <h1>
             <align=right><a href="../view/areaCliente.php"><h5 style="color:rgba(45, 45, 234, 0.98)";>Voltar Página Principal</h5></a></align> 
                <center>Avaliar Serviço </center>  
              </h1>
              <br>
        </div>
      </div>
    </div>
      <form class="form-horizontal" role="form" method="post" action="../controller/controlaAvaliacao.php">
<fieldset>

              <?php
                    include_once '../model/Servico.class.php';
                        
                        $idServico = $_GET['idServico'];
                        $obj = new Servico();
                        $resultado = $obj->avaliarServico($idServico);
                            if($resultado){
                              while($linha=mysqli_fetch_assoc($resultado)){
                                $idCategoria = $linha['idCategoria'];
                                $nomeCategoria = $linha['nomeCategoria'];
                                //echo $idCategoria;
                              }
                            }
                ?>

            <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario']; ?>">
            <input type="hidden" name="operacao" value="avaliar"/>
            <input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>"/>
             <input type="hidden" name="idServico" value="<?php echo $idServico; ?>"/>
             <input type="hidden" name="idCategoria" value="<?php echo $idCategoria; ?>"/>
           
           <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="categoria">Categoria</label>  
              <div class="col-md-4">
             <input type="text" class="form-control" name="categoria" readonly="true" value="<?php echo $nomeCategoria; ?>">
              </div>
            </div>

             <div class="form-group">
              <label class="col-md-4 control-label" for="nota">Nota</label>  
              <div class="estrelas">
                <input type="radio" id="cm_star-empty" name="nota" checked required />
                <label for="cm_star-1"><i class="fa"></i></label>
                <input type="radio" id="cm_star-1" name="nota" value="1"/>
                <label for="cm_star-2"><i class="fa"></i></label>
                <input type="radio" id="cm_star-2" name="nota" value="2"/>
                <label for="cm_star-3"><i class="fa"></i></label>
                <input type="radio" id="cm_star-3" name="nota" value="3"/>
                <label for="cm_star-4"><i class="fa"></i></label>
                <input type="radio" id="cm_star-4" name="nota" value="4"/>
                <label for="cm_star-5"><i class="fa"></i></label>
                <input type="radio" id="cm_star-5" name="nota" value="5"/>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="comentario">Comentário</label>
              <div class="col-md-4">
               <textarea class="form-control" name="comentario" rows="5" cols="5"></textarea> 
              </div>
            </div>
          
            <!-- Button -->
            <div class="form-group">
              
               <div class="col-sm-offset-4 col-sm-3">
                 <center> <input type="submit" class="btn btn-success" value="AVALIAR"/>
                   <input type="reset" class="btn btn-danger" value="LIMPAR"/></center>
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
    <?php
      include '../view/footer.html';
     ?> 
    
    
    
  </body>
</html>