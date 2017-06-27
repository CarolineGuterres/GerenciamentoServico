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
        <img src="../img/logo.png" width="220" >
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
<section id="work-shop" class="section-padding">
<div class="container">
        <div class="row">
          <div class="col-md-12">
                <h1>
                  <center>Serviços Disponíveis</center>  
                </h1>
          </div>
        </div>
</div><!--Fecha container-->
<br>
<div class="search-text"> 
  <div class="container">
      <div class="row text-center">
          <div class="form">
                <i class="fa fa-search fa-2x" aria-hidden="true"></i>
                     <select class="selectpicker" data-width="50%" name="categoria" onchange="carregarservicos(this.value)">
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
            </div>
          </div>         
       </div>     
  </div>
<div class="container">
<div class="input-group">        
        <div class="row">
                         
      </div>
  <div class="row">    
    <div class="col-md-12"> 
        <br>
            
        </div>
      </div>
    </div>
  </section>  
  <div class="container">
    <div class="row">
     <div class="header-section text-center">
        <div id="servicosDisponiveis">

            <?php

              include_once "../model/Servico.class.php";
              
              $obj = new Servico;
              
              $resultado = $obj->mostrarServicos();
              
                if($resultado){
                  while($linha=mysqli_fetch_assoc($resultado)){
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
            ?>
              
        </div>
      </div>
    </div>
  </div>
     <!--/ work-shop-->
       <section id="work-shop" class="section-padding">
       </section>
      <section id="work-shop" class="section-padding">
      </section>
       <section id="work-shop" class="section-padding">
      </section>
 
    <!--Footer-->
    <?php
      include '../view/footer.html';
     ?> 
    <!--/ Footer-->
    
  </body>
  <script src='../js/jquery-1.11.2.min.js'></script>

    <script type="text/javascript">
      function chamar(){
        alert('aqui');
      }
      function carregarservicos(idCategoria){
       if(idCategoria){
      
          $.get( "../controller/controlaCategoriaAjax.php?idCategoria="+idCategoria, 
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
</html>