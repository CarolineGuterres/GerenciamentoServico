   <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Sistema de Gerenciamento de Serviços</title>
      
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
      <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="../css/imagehover.min.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <script type="text/javascript" src="jquery-1.3.2.min.js"></script>
      <link rel="stylesheet" type="text/css" href="../css/animate.css"> 
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
        <div class="col-md-12">
           
        </div>
             <br>
               
               <center>

                  <select class="selectpicker" data-width="75%" name="categoria" onchange="carregarservicos(this.value)">
                  <option value = "NULL" name="idCategoria">Selecione categoria</option>

                    <?php
                      include_once "../model/Categoria.class.php";

                              $obj = new Categoria;

                      $resultado = $obj->mostrarCategorias();

                      if($resultado){
                        while($linha=mysqli_fetch_assoc($resultado)){
                          $idCategoria=$linha['idCategoria'];
                          $nomeCategoria=$linha['nomeCategoria'];
                    ?>
                      <option class="form-control" name="idCategoria" value="<?php echo $idCategoria; ?>"><?php echo $nomeCategoria; ?></option>
                    <?php }
                              }
              ?>


                  </select>
                 </center>
                       
        </div>
      </div>
      <section id="work-shop" class="section-padding">
      
        <div class="container">
          <div class="row">
            <div class="header-section text-center">
            <div id="servicosDisponiveis">

              <?php
                    include_once "../model/Servico.class.php";
                    $idUsuario = $_SESSION['idUsuario'];
                    //echo $idUsuario;
                    
                    $obj = new Servico;
                    
                    $resultado = $obj->mostrarServicos();

                    
                    if($resultado){
                      while($linha=mysqli_fetch_assoc($resultado)){
                        $idServico=$linha['idServico'];
                        $nomeCategoria=$linha['nomeCategoria'];
                        $descricao=$linha['descricao'];
                        $endereco=$linha['endereco'];
                        $valor=$linha['valor'];
                       
                            echo "<div class='jumbotron'>";
                            echo "<table class='table'>";
                              echo "<thead> <tr>";
                                echo "<th><h4><i class='fa fa-tag' aria-hidden='true'></i>Categoria: " .$nomeCategoria."</h4></th>"; 

                                echo "<th><h4><i class='fa fa-book' aria-hidden='true'></i>Descrição: " .$descricao."</h4></th>";

                                echo "<th><h4><i class='fa fa-map-marker' aria-hidden='true'></i>Endereco: " .$endereco."</h4></th>";

                                echo "<th><h4><i class='fa fa-money' aria-hidden='true'></i>Valor: " .$valor."</h4></th>";
                                    
                                  echo "<div class='row'>";
                                    echo "<div class='col-sm-12 text-center'>";
                                    echo "<form class='form-horizontal center' role='form' method='post' action='../controller/controlaInteresseServico.php'>";
                                   
                                    ?>

                                     <input type="hidden" name="idUsuario" value="<?php echo $idUsuario?>" />

                                    
                                    <?php
                                     echo "<th><input type='hidden' name='idServico' value='$idServico'</th>";
                                     echo "<input type='hidden' name='operacao' value='interesse'/>";
  
                                  echo "<th><input type='submit' class='btn btn-success fa fa-check-square-o' value='Tenho Interesse'/></th>";
                                  echo "<th><input type='submit' class='btn btn-danger fa fa-check-square-o' value='Cancelar'/></th>";
                                    echo "</form>";
                                  echo "</div>";

                                 echo "<th></th>";
                                echo "<div class='col-sm-12 text-center'>";
                                      echo"<th><a class='btn btn-info fa fa-check-square-o' href=../view/avaliarServico.php>Avaliação</a></th>";

                              //=  echo "</div></div>";
                                echo "</thead>";

                                echo "</table>";

                                echo "</div><br><br>";
                                
                        }
                  }

            ?>
          </div>    
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
    
    <!--/ Footer-->
      
      <!-- dropdown-->
    <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
    <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
            <script>
        $(function () {
          $('.dropdown-toggle').dropdown();
        }); 
      </script>

 <!-- filtro-->
  <script src='../js/jquery-1.11.2.min.js'></script>

    <script type="text/javascript">
      function chamar(){
      
      }
      function carregarservicos(idCategoria){
       if(idCategoria){
      
          $.get( "../controller/categoriaAreaCliente.php?idCategoria="+idCategoria, 
            function(data) { 
              $( "#servicosDisponiveis" ).addClass('animated fadeOutLeft');
          
              setTimeout(function(){
                $( "#servicosDisponiveis" ).html( data );
                $( "#servicosDisponiveis" ).removeClass('animated fadeOutLeft').addClass('animated fadeInRight');
              },500);
            }
          );
        
        }
      } 
    </script> 
         
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
      <script type="text/javascript">
      $(function(){
      $("#novo").click(function(){
        $("#salvar").removeAttr('disabled');
      }); 
      });
      </script>        
      
      
    </body>
  </html>