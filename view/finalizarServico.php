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
    <div class="container">
                 
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
                 <align="left">
                    <a href="../view/areaFornecedor.php"><h4 style="color:rgba(45, 45, 234, 0.98)";>Voltar Página Principal</h4></a>
                  <center style="margin-bottom: 5%;" >Serviços Contratados</center> 
                 </align="left">  
              </h1>
        </div>
     </div>
    </div>  <!--Fecha container-->
<div class="container center table-responsive">           
      <table class="table">
                  <thead>
                  <tr>
                    <th  class="text-center" style="font-size: large">Categoria</th>
                    <th  class="text-center" style="font-size: large">Cliente</th>
                    <th class="text-center" style="font-size: large">Telefone</th>
                    <th  class="text-center" style="font-size: large">E-mail</th>
                    <th  class="text-center" style="font-size: large">Ação</th>
                  </tr>
                  </thead>

              <?php
                  include "../model/Contrato.class.php";
                   $idUsuario = $_SESSION['idUsuario'];

                    $obj = new Contrato;
                    
                    $resultado = $obj->mostrarServicosFinalizar($idUsuario);
                    
                    if($resultado){
                      while($linha=mysqli_fetch_assoc($resultado)){
                        $nomeCategoria=$linha['nomeCategoria'];
                        $nomeUsuario=$linha['nomeUsuario'];
                        $telefone=$linha['telefone'];
                        $email=$linha['email']; 
                        $idServico=$linha['idServico'];
                  ?>

                  <?php

                   include_once "../model/Usuario.class.php";
                   $idUsuario = $_SESSION['idUsuario'];

                    $objUser = new Usuario;
                    
                    $dados = $objUser->mostrarUsuarioAlterar($idUsuario);
                    
                     if(mysqli_num_rows($dados)!=0){
                      while($linha=mysqli_fetch_assoc($dados)){
                        $nomeUsuarioForn=$linha['nomeUsuario'];
                        
                        //echo "<tr><td class='text-center'>".$nomeUsuarioForn."</td>";
                        echo "<tr><td class='text-center'>".$nomeCategoria."</td>";
                        echo "<td class='text-center'>".$nomeUsuario."</td>";
                        echo "<td class='text-center'>".$telefone."</td>";
                        echo "<td class='text-center'>".$email."</td>";
                       
                        echo "<td class='text-center'><a id='btSubmit' class='btn btn-danger fa fa-check-circle' href=http://localhost/carolineLab/php-email/enviar-email.php?email=".$email."&nomeCategoria=".$nomeCategoria."&nomeUsuarioForn=".$nomeUsuarioForn.">FINALIZAR</a>";//ao clicar enviar mensagem por email
                        echo "</td></tr>";
                        }
                      }
                    }
                  }else{
                          echo"<center><h3 class='text center'>Não foi encontrado nenhum serviço.</h3>
                          </center>";
                    }
                ?>
                      
        </table> <!--Fecha tabela-->
  </div>  <!--Fecha container-->
  </section>
 
 <section id="work-shop" class="section-padding">
      </section>
       <!--Footer
    <?php
    //  include '../view/footer.html';
     ?> -->
  
                     
    </body>
  </html>



