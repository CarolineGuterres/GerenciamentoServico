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
             
     <!--Navigation bar-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Serviços<br><span></span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">  
         <li class="btn-conta"><a href="../view/cadastrarUsuario.php">Criar Conta</a></li>
          <li class="btn-trial"><a href="../view/login.php">Login</a></li>
        </ul>
        </div>
        <div class="navbar-collapse style= collapse in" id="bs-megadropdown-tabs" style="
    padding-left: 0px;
">
<ul class="nav navbar-nav navbar-right">
          
          
         </ul>
          </div>
        </div>
        
      </div>
    </nav>
			<div>
			
	  <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
           
        <form class="form-horizontal center" role="form" method="post" action="../view/filtrar.php">
          
          <input type="hidden" name="operacao" value="filtrar"/>
              <select class="btn btn-default btn-xs dropdown-toggle" name="idCategoria">
                <option value = "NULL" name="idCategoria">Selecione categoria</option>

                <?php
                  include "../model/Categoria.class.php";
                  $idCategoria = $_POST['idCategoria'];


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
              <input type="submit" class="btn btn-success" value="Filtrar"/>
             </form> 
          </div>   
                       
        </div>
      </div>
    </div>
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
         
            <?php

				//classe controlar o fluxo do sistema
					include '../model/Servico.class.php';
					$operacao = $_POST["operacao"];
					session_start();

					if($operacao == "filtrar"){
						$idCategoria = $_POST["idCategoria"];
						//echo $idCategoria;
					
                         $obj = new Servico;
					     $resultado = $obj->buscarServicosCat();
					      
							if($resultado){
								while($linha=mysqli_fetch_array($resultado)){
									//$idServico=$linha['idServico'];
								    $nomeCategoria=$linha['nomeCategoria'];
									$descricao=$linha['descricao'];
			                        echo "<div class='jumbotron'><table class='table'><thead> <tr>";
				                    echo "<th><h4><i class='fa fa-tag' aria-hidden='true'>Categoria: " .$nomeCategoria."</h4></th>"; 
				                    echo "<th><h4><i class='fa fa-book' aria-hidden='true'>Descrição: " .$descricao."</h4></th>";
				                    echo"</tr></thead></table>";
				                    echo "</div> ";
				             
				                   echo "<br><br>"; 
                                }
                             }
                     }
										
			?>                  
                 
              
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