<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Gerenciamento de Serviços</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
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
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          
          <li class="btn-trial"><a href="../view/login.php">Login</a></li>
        </ul>
        </div>
      </div>
    </nav>
    
    <div class="section">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h1>
                  
                </h1> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>
                
                </div>
              </div>
            </div>
      <div class="section">
          <div class="container">
          <div class="row">
            <div class="col-md-12">
            
              <div class="section">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <h1>
                  <center>Serviços Disponíveis</center>  
                </h1> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>
                
                </div>
              </div>
            </div>
              <?php
              include "../model/Servico.class.php";
              
              $obj = new Servico;
              
              $resultado = $obj->mostrarServicos();
              
              if($resultado){
                while($linha=mysqli_fetch_assoc($resultado)){
                  $categoria=$linha['categoria'];
                  $descricao=$linha['descricao'];
                  $valor=$linha['valor'];
                  echo "<div class='jumbotron'><p>Categoria: " .$categoria."</p>";
                  echo "<p>Descrição: " .$descricao."</p>";
                  echo "<p> Valor: " .$valor."</p>";
                  echo "</div><br>";
                  
                }
              }
              ?>
              
             
            
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
            
            </div>
          </div>
          </div>
        </div>
        
             <footer>
                  <div class="container">
                  
          
            </div>
      </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="contactform/contactform.js"></script>
    
  </body>
</html>