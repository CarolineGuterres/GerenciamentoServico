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
    <img src="">
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
											$_SESSION['logado'] = true;
												if (isset($_SESSION['login']) and isset($_SESSION['senha'])){
													echo 'Seja Bem-Vindo ', $_SESSION['login'];
												}


				                           ?>                    </a>
                    </a>

                    <ul style="background-color:white;" class="dropdown-menu">

                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-10">

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

	<div class="section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1><center>Editar Dados </center>  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>
							</h1>
						</div>
					</div>
				</div>
				<div class="container">
      <div class="row">

       <div class="col-md-2">
		</div>
        <div class="col-md-8">
		<form class="form-horizontal" role="form" method="post" action="../controller/controlaUsuario.php">
		<?php

                                        include_once '../model/Usuario.class.php';
										$idUsuario = $_GET['idUsuario'];
                                        //die($idUsuario);
                                        $usuariow = new Usuario();

									   $resultado = $usuariow->mostrarUsuarioAlterar($idUsuario);

										if($resultado){
											 while($linha=mysqli_fetch_assoc($resultado)){
												   $nomeUsuario = $linha['nomeUsuario'];
												   $email = $linha['email'];
												   $telefone = $linha['telefone'];
												   $cidade = $linha['cidade'];
												   $endereco = $linha['endereco'];

											 }
									}

									?>

							<input type="hidden" name="idUsuario" value="<?php echo $idUsuario; ?>">
				<div class="form-group">
				      <div class="col-sm-2">
				        <label for="nomeUsuario" class="control-label">Nome</label>
				       </div>
				    <div class="col-sm-10">
				     <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" placeholder="Informe seu nome completo"  value="<?php echo $nomeUsuario; ?>">
				    </div>
			    </div>
				<div class="form-group">
				      <div class="col-sm-2">
				        <label for="email" class="control-label">E-mail:</label>
				       </div>
				    <div class="col-sm-10">
				     <input type="email" class="form-control" id="email" name="email" placeholder=""  value="<?php echo $email; ?>">
				    </div>
			    </div>
				<div class="form-group">
				      <div class="col-sm-2">
				        <label for="telefone" class="control-label">Telefone:</label>
				       </div>
				    <div class="col-sm-10">
				     <input type="text" class="form-control telefone" id="telefone" name="telefone" placeholder="(99)99999-9999"  value="<?php echo $telefone; ?>">
				    </div>
			    </div>
				<div class="form-group">
				      <div class="col-sm-2">
				        <label for="cidade" class="control-label">Cidade:</label>
				       </div>
				    <div class="col-sm-10">
				     <input type="text" class="form-control" id="cidade" name="cidade" placeholder=""  value="<?php echo $cidade; ?>">
				    </div>
			    </div>
				<div class="form-group">
				      <div class="col-sm-2">
				        <label for="endereco" class="control-label">Endereço:</label>
				       </div>
				    <div class="col-sm-10">
				     <input type="text" class="form-control" id="endereco" name="endereco" placeholder=""  value="<?php echo $endereco; ?>">
				    </div>
			    </div>
				<div class="form-group">
				   <div class="col-sm-offset-2 col-sm-10">
				     <center> 
						<input type="submit" class="btn btn-success"  name="operacao" value="Editar"/>
						<input type="submit" class="btn btn-danger" name="operacao" value="Excluir"/>
					</center> 
				    </div>
				</div>
	    </form>
				<footer >
					<div class="container">

					</div>
				</footer>


		</body></html>
