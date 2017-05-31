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
                
          </div>
        </div>
      </div>
        <div class="container center">
         </div>
  </section>
 <form class="form-horizontal">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nomeUsuario">Nome</label>  
  <div class="col-md-4">
  <input name="nomeUsuario" type="text" placeholder="Informe seu nome" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="Enter your email id" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Enter a password" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Contact no.</label>  
  <div class="col-md-4">
  <input id="contact" name="contact" type="text" placeholder="Enter your contact no." class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="blood_group">Blood Group</label>
  <div class="col-md-4">
    <select id="blood_group" name="blood_group" class="form-control">
      <option value="-1">Select</option>
      <option value="1">A+</option>
      <option value="2">B+</option>
      <option value="3">AB+</option>
      <option value="4">O+</option>
      <option value="5">A-</option>
      <option value="6">B-</option>
      <option value="7">AB-</option>
      <option value="8">O-</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="street">Street</label>  
  <div class="col-md-4">
  <input id="street" name="street" type="text" placeholder="Enter your street" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="area">Area</label>  
  <div class="col-md-4">
  <input id="area" name="area" type="text" placeholder="Enter your area" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City</label>  
  <div class="col-md-4">
  <input id="city" name="city" type="text" placeholder="Enter your city" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dist">District</label>  
  <div class="col-md-4">
  <input id="dist" name="dist" type="text" placeholder="Enter your district" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="signup"></label>
  <div class="col-md-4">
    <button id="signup" name="signup" class="btn btn-success">Sign Up</button>
  </div>
</div>

</fieldset>
</form>

     
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
   
    </body>
  </html>

