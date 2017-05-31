	<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <title>Sistema de Gerenciamento de Serviços</title>
	    
	     <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
	    <link rel="stylesheet" type="text/css" href="../css/font.css">
	    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	     <link rel="stylesheet" type="text/css" href="../css/menu.min.css">
	     <link rel="stylesheet" type="text/css" href="../css/dropdown-menu.css">
	    <link rel="stylesheet" type="text/css" href="../css/imagehover.min.css">
	    <link rel="stylesheet" type="text/css" href="../css/style.css">
	    <link rel="stylesheet" type="text/css" href="../js/calendario.js">
	    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
		<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
		<link type="text/css" href="../css/jquery.css" rel="stylesheet" />
		<script type="text/javascript" src="../js/jquery.js"></script>
	   <script type="text/javascript" src="../js/jquery-ui.js"></script>
	    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
		<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
		<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	  <link rel="stylesheet" href="/resources/demos/style.css">
	  <link rel='stylesheet' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'/>
	 

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
	
     
   

<section id="work-shop" class="section-padding">
    <div class="container ">
      <div class="row">
        <div class="col-md-12">
              <h1>
               <align=left><a href="../view/areaFornecedor.php"><h5>Voltar Página Principal</h5></a></align> 
                <center>Cadastro Serviço</center>  
              </h1>
              <br>
        </div>
      </div>
    </div>
	      <div class="container text-center">
	        <div class="row col-md-12 ">
	         <div class="header-section ol-md-offset-2" style="text-align:center">

		<form class="form-horizontal" role="form" method="post" action="../controller/controlaServico.php">
						<input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario']; ?>">
						<input type="hidden" name="operacao" value="incluir"/>
							<div class="form-group">
								  <div class="col-sm-2">
									<label for="nomeUsuario" class="control-label">Nome </label>
								   </div>
								<div class="col-sm-2">
		                            <?php echo $nomeUsuario; ?>
								</div>
							</div>
							<div class="form-group">
								  <div class="col-sm-2">
									<label for="endereco" name="endereco" class="control-label">Endereço:</label>
								   </div>
								<div class="col-sm-2">
								<input type="hidden" name="endereco" value="<?php echo $_SESSION['endereco']; ?>">
		                            <?php echo $endereco; ?>
								</div>
							</div>
							<div class="form-group">
								  <div class="col-sm-2">
									<label for="categoria" class="control-label">Categoria:</label>
								   </div>
								<div class="col-sm-2">
								 <select class="btn btn-default btn-xs dropdown-toggle" name="idCategoria">
								  <option value = "NULL" name="idCategoria">Selecione categoria</option>

										<?php
											include "../model/Categoria.class.php";

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
								 <input type="number" step="0.01" class="form-control" id="valor" name="valor"  onkeyup="formataDouble(this)" placeholder="00.00">
								</div>
							</div>
							<div class="form-group">
								  <div class="col-sm-2">
									<label for="calendario" class="control-label">Data:</label>
								   </div>
								<div class="col-sm-4">
								
								<input type="text" id="calendario" name="data" class="form-control"/>

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
      <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
		<script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
		<script>
		  $(function () {
		    $('.dropdown-toggle').dropdown();
		  }); 
		</script>
      
	    
		<script>
				$(function() {
				    $("#calendario").datepicker({
				        dateFormat: 'yy/mm/dd',
				        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
				        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
				        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
				        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
				        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
				    });
				});
		</script>	
		
	    
	  </body>
	</html>