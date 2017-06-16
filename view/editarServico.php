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
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/mascaras.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
   
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
               <align=left><a href="../view/areaFornecedor.php"><h5>Voltar Página Principal</h5></a></align> 
                <center>Editar Serviço</center>  
              </h1>
        </div>
      </div>
    </div>
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
   
 <form class="form-horizontal" role="form" method="post" action="../controller/controlaServico.php">
<fieldset>

              <?php
                            include_once '../model/Servico.class.php';
                                $idServico = $_GET['idServico'];
                                                 
                                  $obj = new Servico();
                               $resultado = $obj->mostrarServicoAlterar($idServico);
                              if($resultado){
                                 while($linha=mysqli_fetch_assoc($resultado)){
                                    $nomeCategoria = $linha['nomeCategoria'];
                                     $descricao = $linha['descricao'];
                                     $valor = $linha['valor'];
                                     
                                 }
                            }
                      ?>

           <input type="hidden" name="idServico" value="<?php echo $idServico; ?>">
           <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="categoria">Categoria</label>  
              <div class="col-md-4">
            <input type="text" class="form-control" readonly="true" name="categoria" rows="5" cols="5" value="<?php echo $nomeCategoria; ?>">
              </div>
            </div>
           
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="descricao">Descrição</label>  
              <div class="col-md-4">
            <textarea class="form-control" id ="descricao" name="descricao" rows="5" cols="5"><?php echo $descricao; ?></textarea>
                
              </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="valor">Valor</label>
              <div class="col-md-4">
                  <input type="text" class="form-control" id="valor" name="valor"  onkeyup="formataDouble(this)" placeholder="00.00" value="<?php echo $valor; ?>">
                
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              
               <div class="col-sm-offset-4 col-sm-3">
                 <center>
                   <input type="submit" class="btn btn-success"  name="operacao" value="Editar"/>
                  <input type="submit" class="btn btn-danger" name="operacao" value="Excluir"/>
                  </center>
                </div>
            </div>

            </fieldset>
  </form>
 </div>
 </div>
 </div> 

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
    <!--/ Footer-->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
      <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
      <script>
        $(function () {
          $('.dropdown-toggle').dropdown();
        }); 
      </script>
          
  </body>
</html>