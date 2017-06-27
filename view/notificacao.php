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
        <div class="container">
            <div class="col-md-12">
                  <h1>
                    <align=left><a href="../view/areaFornecedor.php"><h5 style="color:rgba(45, 45, 234, 0.98)";>Voltar Página Principal</h5></a></align=left>
                    <center style="margin-bottom: 10%";>Notificações</center>  
                  </h1>
            </div>
        </div>
<div class="container table-responsiv">
                <table class="table table-sm">
                  <thead>
                      <tr>
                        <th  class="text-center" style="font-size: large";>Nome Usuário</th>
                        <th  class="text-center" style="font-size: large";>Telefone</th>
                        <th class="text-center" style="font-size: large";>Categoria</th>
                        <th  class="text-center" style="font-size: large";>Descrição</th>
                        <th  class="text-center" style="font-size: large";>Ação</th>
                      </tr>
                  </thead>

                        <?php

                            include "../model/Servico.class.php";
                             $idUsuario = $_SESSION['idUsuario'];
                              //echo $idUsuario;
                              $obj = new Servico;
                              
                              $resultado = $obj->mostrarServicosNotificacao($idUsuario);
                              
                            if(mysqli_num_rows($resultado)!=0){
                                while($linha=mysqli_fetch_assoc($resultado)){
                                  $nomeUsuario=$linha['nomeUsuario'];
                                  $telefone=$linha['telefone'];
                                  $nomeCategoria=$linha['nomeCategoria'];
                                  $descricao=$linha['descricao']; 
                              
                                  echo "<tr><td class='text-center'>".$nomeUsuario."</td>";
                                  echo "<td class='text-center'>".$telefone."</td>";
                                  echo "<td class='text-center'>".$nomeCategoria."</td>";
                                  echo "<td class='text-center'>".$descricao."</td>";
                                  
                                  echo "<td  class='text-center'><a class='btn btn-success fa fa-check' href=contratarServico.php?idServico=".$linha['idServico'].">CONTRATAR</a>";
                                 
                                  echo "</td></tr>";
                                  }
                                }else{
                                echo"<center><h3 class='text center'>Não foi encontrado nenhum serviço.</h3>
                                </center>";
                    }
                          ?>
                      
                </table>
      </div> 
    </section>
     
      <section id="work-shop" class="section-padding">
       </section>
     <!--Footer-->
    <?php
      include '../view/footer.html';
     ?> 
    <!--/ Footer-->
    </body>

  </html>



