<html>
  <head>
   <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="../css/menuLateral.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gerenciamento de Serviços </title>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="../css/fileinput.css">

</head>

<body>

<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    <img src="../img/logo.png">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="navbar-collapse style= collapse in" id="bs-megadropdown-tabs" style="
    padding-left: 0px;
"><ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      <span class="fa fa-user"></span> 
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
			        </a>
                    

                    <ul style="background-color:white;" class="dropdown-menu">

                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-10">
									<input type="hidden" name="idUsuario" value="<?php echo $rows['idUsuario'] ?>">

                                        <p class="text-left">
                                            <a class="btn btn-primary btn-block btn-sm fa fa-edit" href=editarUsuario.php?idUsuario=<?php echo $_SESSION['idUsuario']; ?>>Atualizar Dados</a>
                                        </p>
                                    </div>

                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <p>
                                              <a href='../view/logout.php' class="btn btn-primary btn-danger btn-block fa fa-close">Sair</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
         <div class="container">
			 <div class="col-md-6 text-success justified">
					<div class="col-md-4"></div>
            <div class="col-md-4">
          <a href=cadastrarServico.php class="btn btn-sucess">
            		<i class="text-success fa fa-pencil-square-o fa-5x text-center"></i>
                <center><h4><strong>Cadastrar Serviço</strong></h4></center>
						
					</a>
          </div>
					<div class="col-md-4"></div>
				</div>
			
				<div class="col-md-6 text-success justified">
    			<div class="col-md-4"></div>
          <div class="col-md-4">
          		<a href="" class="btn btn-sucess" type="button">
    						<i class="text-success fa fa-bell fa-5x text-center"></i>
                <h4><strong>Notificações</strong></h4>
    					</a>
              </div>
              <div class="col-md-4"></div>
					
				</div>
			</div>	
	  
					
							
				 <footer>
                <div class="container">
		            
				
			    </div>
		</footer>

	</body>
</html>
