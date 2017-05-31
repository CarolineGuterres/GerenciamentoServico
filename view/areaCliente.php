  <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Sistema de Gerenciamento de Serviços</title>
      
      <link rel="stylesheet" type="text/css" href="css/font.css">
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
        <div class="row">
          <div class="col-md-12">
                <h1>
                  <center>Serviços Disponíveis</center>  
                </h1>
          </div>
        </div>
      </div>
        <div class="container">
          <div class="row">
            <div class="header-section text-center">

              <?php
                    include_once "../model/Servico.class.php";
                    $idUsuario = $_SESSION['idUsuario'];
                    //echo $idUsuario;
                    
                    $obj = new Servico;
                    
                    $resultado = $obj->mostrarServicos();

                    
                    if($resultado){
                      while($linha=mysqli_fetch_assoc($resultado)){
                        //$idUsuario=$linha['idUsuario'];
                        $idServico=$linha['idServico'];
                        $nomeCategoria=$linha['nomeCategoria'];
                        $descricao=$linha['descricao'];
                        $endereco=$linha['endereco'];
                        $valor=$linha['valor'];
                      //  $idUsuario=$dados['idUsuario'];
                      //  echo $idUsuario;

                       
                        echo "<div class='jumbotron'>";
                        echo "<table class='table'>";
                          echo "<thead> <tr>";
                            echo "<th><h4><i class='fa fa-tag' aria-hidden='true'></i>Categoria: " .$nomeCategoria."</h4></th>"; 

                            echo "<th><h4><i class='fa fa-book' aria-hidden='true'></i>Descrição: " .$descricao."</h4></th>";

                            echo "<th><h4><i class='fa fa-map-marker' aria-hidden='true'></i>Endereco: " .$endereco."</h4></th>";

                            echo "<th><h4><i class='fa fa-money' aria-hidden='true'></i>Valor: " .$valor."</h4></th>";
                                
                              echo "<div class='row'>";
                                echo "<div class='col-sm-12 text-center'>";
                                //echo "<form class='form-horizontal center' role='form' method='post' action='../controller/controlaServico.php'>";
                                echo "<input type='hidden' name='operacao' value='interesse'/>";

                                 echo "<th><input type='hidden' name='idServico' value='$idServico'/></th>";
                                ?>

                                 <input type="hidden" name="idUsuario" value="<?php echo $idUsuario?>" />
                                
                                <?php
                                echo "<th><input type='submit' class='btn btn-success fa fa-check-square-o' onsubmit='btn.disabled=true'  id='button' onclick='desativa('button2')' value='Tenho Interesse'/></th>";
                                //echo "</form>";
                              echo "</div>";

                            //  echo "<th></th>";
                              echo "<div class='col-sm-12 text-center'>";
                                   echo"<th><a class='btn btn-danger fa fa-check-square-o' href=../view/avaliacaoServico.php>Avaliação</a></th>";

                            echo "</div></div>";
                            echo "</thead>";

                            echo "</table>";

                            echo "</div><br><br>";
                            
                }
              }

            ?>
                
          </div>
        </div>
        </div>
      </section>
      <!--/ work-shop-->


  <section id="work-shop" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
                
          </div>
        </div>
      </div>
        <div class="container center">
         </div>
  </section>
  <section id="work-shop" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
                
          </div>
        </div>
      </div>
        <div class="container center">
         </div>
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
   
    <script>
          $(function() {

          $('#button').click(function(){
            $('#button').prop('disabled', true);
            window.setTimeout(function() {
              $('#button').prop('disabled', false);
            }, 9000);
          });
                
          });
    </script>  

    <script>
         function desativa(id){
          document.getElementById(id).disabled=true;
          setTimeout(function() {
            document.getElementById(id).disabled=false;
          }, 5000);
        }

    </script>          
      
      
    </body>
  </html>