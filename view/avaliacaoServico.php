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
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/mascaras.js"></script>
    <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
    
   
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
    <!--/ Navigation bar-->
   

    <section id="work-shop" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
              <h1>
                <center>Avaliação Serviço </center>  
              </h1>
              <br>
        </div>
      </div>
    </div>
      <div class="container">
        <div class="row">
          <div class="header-section text-center col-md-offset-4">

            <form class="form-horizontal" role="form" method="post" action="../controller/controlaUsuario.php">
                <input type="hidden" name="operacao" value="incluir"/>
          
          <div class="form-group">
            <div class="col-sm-2">
              <label for="nomeUsuario" class="control-label">Serviço</label>
             </div>
            <div class="col-sm-2">
               <?php echo "Eletricista"?>
            </div>
          </div>
           <div class="form-group">
                  <div class="col-sm-2">
                     <label for="nota" class="control-label">Nota:</label>
                   </div>

                <div class="col-sm-2">
                <?php echo "5"?>
                </div>
              </div>
         <div class="form-group">
                  <div class="col-sm-2">
                    <label for="descricao" class="control-label">Descriçao:</label>
                  </div>
                <div class="col-sm-2">
                 <?php echo "maquiagem"?>
                </div>
          </div>
            
            </div>
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
    
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>