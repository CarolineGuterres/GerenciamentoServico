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
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>   
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
                <center>Contratar Serviço<br></center>  
              </h1>
        </div>
      </div>
    </div>
      <div class="container">
        <div class="row">
          <div class="header-section text-center">

           <form class="form-horizontal" role="form" method="post" action="../controller/controlaContrato.php">
            <input type="hidden" name="operacao" value="contratar"/>
         <?php

                    include_once '../model/Servico.class.php';
                      $idServico = $_GET['idServico'];
                      
                      $obj = new Servico();

                       $resultado = $obj->mostrarServicoContratar($idServico);

                      if($resultado){
                         while($linha=mysqli_fetch_assoc($resultado)){
                             $nomeUsuario = $linha['nomeUsuario'];
                             $idUsuario = $linha['idUsuario'];
                             $nomeCategoria = $linha['nomeCategoria'];
                             $idCategoria = $linha['idCategoria'];

                         }
                    }

           ?>

             
        
      
       <fieldset>
 
            <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario']; ?>">
            <input type="hidden" name="idServico" value="<?php echo $idServico; ?>">

            <div class="form-group">
              <label class="col-md-4 control-label" for="nomeUsuario">Categoria</label>  
              <div class="col-md-4">
              <input type="text" class="form-control" readonly="true" id="nomeCategoria" name="nomeCategoria" value="<?php echo $nomeCategoria; ?>">
              <input type="hidden" name="idCategoria" value="<?php echo $idCategoria; ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="nomeUsuario">Nome Cliente</label>  
              <div class="col-md-4">
              <input type="text" class="form-control" readonly="true" id="nomeUsuario" name="nomeUsuario" value="<?php echo $nomeUsuario; ?>">
              <input type="hidden" name="idUsuarioCliente" value="<?php echo $idUsuario; ?>">
              </div>
            </div>
    
            
            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="observacao">Observação</label>
              <div class="col-md-4">
                  <textarea class="form-control" name="observacao" rows="5" cols="5"></textarea>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="data">Data</label>  
              <div class="col-md-4">
            <input type="text" id="calendario" name="data" class="form-control" />
              </div>
            </div>

           
            <!-- Button -->
            <div class="form-group">
              
               <div class="col-sm-offset-4 col-sm-3">
                 <center> <input type="submit" class="btn btn-success" value="Contratar"/>
                   <input type="reset" class="btn btn-danger" value="Limpar"/></center>
                </div>
            </div>

            </fieldset>
  </form>
    <!--/ work-shop-->
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

   
    <!--/ Footer-->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
     
      <script>
        $(function() {
            $("#calendario").datepicker({
                dateFormat: 'yy/mm/dd',
                dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
            });
        });
    </script> 
      

     <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
      <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
      <script>
        $(function () {
          $('.dropdown-toggle').dropdown();
        }); 
      </script>
          
  </body>
</html>