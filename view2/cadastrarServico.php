<html>
	  <head>
	   <meta charset="utf-8">
		<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
	    <link rel="stylesheet" href="../css/font-awesome.min.css">
	    <link rel="stylesheet" href="css/style.css">
	    <link rel="stylesheet" href="../css/fileinput.css">
	    <link rel="stylesheet" href="../css/bootstrapLogin.css">
	    <link rel="stylesheet" href="../css/bootstrapUsuario.css">
		<link rel="stylesheet" href="../css/fonts/">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
		<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
		<link rel="stylesheet" href="../css/menuLateral.css">
		<link rel="stylesheet" href="/vendor/bootstrap-combobox/css/bootstrap-combobox.css">
        <script src="/vendor/bootstrap-combobox/js/bootstrap-combobox.js"></script>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="../css/menu.min.css">
     <link rel="stylesheet" type="text/css" href="../css/dropdown-menu.css">
    <link rel="stylesheet" type="text/css" href="../css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

       


  <title>Gerenciamento de Serviços - Cadastro de Serviço</title>


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
    <!--/ Navigation bar-->


		<div class="section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>
								<center>Cadastro Serviço</center>  
							</h1> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>
							
							</div>
						</div>
					</div>
		<div class="container">
		  <div class="row">

			<div class="col-md-2"></div>
			<center><div class="col-md-10">
			<form class="form-horizontal" role="form" method="post" action="../controller/controlaServico.php">
				<input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario']; ?>">
				<input type="hidden" name="operacao" value="incluir"/>
					<div class="form-group">
						  <div class="col-sm-2">
							<label for="nomeUsuario" class="control-label">Nome </label>
						   </div>
						<div class="col-sm-10">
                            <?php echo $nomeUsuario; ?>
						</div>
					</div>
					<div class="form-group">
						  <div class="col-sm-2">
							<label for="endereco" class="control-label">Endereço:</label>
						   </div>
						<div class="col-sm-10">
                            <?php echo $endereco; ?>
						</div>
					</div>
					<div class="form-group">
						  <div class="col-sm-2">
							<label for="categoria" class="control-label">Categoria:</label>
						   </div>
						<div class="col-sm-2">
						 <select class="btn btn-default btn-xs dropdown-toggle" name="categoria">
						  <option value = "NULL" name="categoria">Selecione categoria</option>

								<?php
									include "../model/Categoria.class.php";

					                $obj = new Categoria;

									$resultado = $obj->mostrarCategorias();

									if($resultado){
										while($linha=mysqli_fetch_assoc($resultado)){
											$nomeCategoria=$linha['nomeCategoria'];
								?>
									<option class="form-control" name="categoria" value="<?php echo $nomeCategoria; ?>"><?php echo $nomeCategoria; ?></option>
								<?php }
					                }
				  ?>


							</select>
						</div>
					</div>

					<div class="form-group">
						  <div class="col-sm-2">
							<label for="descricao" class="control-label">Descriçao:</label>
						   </div>
						<div class="col-sm-6">
						 <textarea class="form-control" name="descricao" rows="5" cols="5"></textarea>
						</div>
					</div>
					<div class="form-group">
						  <div class="col-sm-2">
							<label for="valor" class="control-label">Valor:</label>
						   </div>

						<div class="col-sm-2">
						 <input type="text" class="form-control" id="valor" name="valor"  onkeyup="formataDouble(this)" placeholder="00.00">
						</div>
					</div>
					<div class="form-group">
						  <div class="col-sm-2">
							<label for="calendario" class="control-label">Data:</label>
						   </div>
						<div class="col-sm-4">
						
						<input type="text" id="data" name="data" class="form-control"/>

						</div>
					</div>
					<div class="form-group">
					  <div class="col-sm-offset-4 col-sm-3">
						  <input type="submit" class="btn btn-success" value="Cadastrar"/>
						   <input type="reset" class="btn btn-danger" value="Limpar"/>
						</div>
					</div>
		</form>	
		</center>
		</div>	


			</form>
		
         <footer id="footer" class="footer">
      <div class="container text-center">
    
        ©2017 Caroline Guterres
        
      </div>


					 <script>
							$(function() {
								$("#data").datepicker({
									dateFormat: 'yy/dd/mm',
									dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
									dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
									dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
									monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
									monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
								});
							});

							$(function formataDouble(obj) {
						var expressao = /^([0-9]+)(\.([0-9]+)?)?$/;
						if(!expressao.test(obj.value)) {
								if(obj.value.indexOf(".") > 0) {
										var value = obj.value.split(".");
										obj.value = value[0] + "." + value[1];
	                }
	        }
})
                    </script>




			</body>
		</html>
