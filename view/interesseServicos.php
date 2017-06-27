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
    <script type="text/javascript">
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
    </div>
                     
</div>
 </nav>
  <section id="work-shop" class="section-padding">
        <div class="container">
         
            <div class="col-md-12">
                  <h1>
                    <align=right><a href="../view/areaCliente.php"><h5 style="color:rgba(45, 45, 234, 0.98)";>Voltar Página Principal</h5></a></align=right>
                    <center>Meus Interesses</center>  
                  </h1>
          </div>
      </div>
    <br>
<div class="container">
    
                <table class="table">
                  <thead>
                  <tr>
                    <th class="text-center"><h4>Categoria</h4></th>
                    <th  class="text-center"><h4>Descrição</h4></th>
                    <th  class="text-center"><h4>Ação</h4></th>
                  </tr>
                  </thead>

              <?php
                  include "../model/InteresseServico.class.php";
                   $idUsuario = $_SESSION['idUsuario'];
                    //echo $idUsuario;
                    $obj = new Interesse_Serv;
                    
                    $resultado = $obj->mostrarInteresses($idUsuario);
                     if(mysqli_num_rows($resultado)!=0){
                      while($linha=mysqli_fetch_assoc($resultado)){
                        $nomeCategoria=$linha['nomeCategoria'];
                        $descricao=$linha['descricao']; 
                        $idServico=$linha['idServico'];
                       // echo $idServico;
                       
                        echo "<td class='text-center'>".$nomeCategoria."</td>";
                        echo "<td class='text-center'>".$descricao."</td>";
                       
                       echo "<form class='form-horizontal' role='form' method='post' action='../controller/controlaInteresseServico.php'>";
                       
                      echo "<input type='hidden' name='idServico' value='$idServico'>";
                        echo "<td  class='text-center'><input type='submit' class='btn btn-danger' name='operacao' value='CANCELAR INTERESSE'/>";
                        echo"<a class='btn btn-info fa fa-check-square-o' href=avaliarServico.php?idServico=".$linha['idServico'].">AVALIAR</a></th>";
                        echo "</form>";
                       
                        echo "</td></tr>";
                        }
                      }else{
                          echo"<center><h3 class='text center'>Não foi encontrado nenhum serviço.</h3>
                          </center>";
                    }
                ?>
                      
                </table>
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
      </div>
     </div>   
    </section>
      <!--/ work-shop-->
    
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



