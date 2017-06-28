	<!DOCTYPE html>
	<html lang="en">
	  <head>
	   <meta charset="utf-8">
	    <title>Sistema de Gerenciamento de Serviços</title>
	    
	    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
		    <link rel="stylesheet" type="text/css" href="../css/font.css">
		    <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
		    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		    <link rel="stylesheet" type="text/css" href="../css/imagehover.min.css">
		    <link rel="stylesheet" type="text/css" href="../css/style.css">
		    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
		    <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
		    <script src='../js/jquery-2.1.3.min.js'></script>
		    <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>
		     <script src='../js/bootstrap.min.js'></script>
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
    <div class="container ">
      <div class="row">
        <div class="col-md-12">
               <h1>
	               <align=left><a href="../view/areaFornecedor.php"><h5 style="color:rgba(45, 45, 234, 0.98)";>Voltar Página Principal</h5></a></align> 
	                <center>Cadastro de Serviço</center>  
                 </align=left>
        	   </h1>   
        </div>
      </div>
   </div>
 </section>
	
<div class="container ">	 
		 <form class="form-horizontal" role="form" method="post" action="../controller/controlaServico.php">
		<fieldset>

		        <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario']; ?>">
		           <input type="hidden" name="operacao" value="incluir"/>

		            <!--input nome--> 
		            <div class="form-group">
		              <label class="col-md-4 control-label" readonly="true" for="nomeUsuario">Nome</label> <div class="col-md-4">
		                 <?php echo $nomeUsuario; ?>   
		              </div>
		            </div>

		            <!-- input endereco-->
		            <div class="form-group">
		              <label class="col-md-4 control-label" readonly="true" for="endereco">Enderco</label>
		              <div class="col-md-4">
			              <input type="hidden" name="endereco" value="<?php echo $_SESSION['endereco']; ?>">
			                   <?php echo $endereco; ?>
			              </div>
		            </div>

		            <!-- input categoria-->
		            <div class="form-group">
		              <label class="col-md-4 control-label" for="password">Categoria</label>
		                <div class="col-md-4">
		                 <select class="btn btn-default btn-xs dropdown-toggle" name="idCategoria">
		                 <!--opçoes de categoria-->
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
		            </div> <!--fecha div categoria-->

		            <!-- input descricao-->
		            <div class="form-group">
		              <label class="col-md-4 control-label" for="descricao">Descrição</label>  
		              <div class="col-md-4">
		                <textarea class="form-control" name="descricao" rows="5" cols="5" required></textarea>  
		              </div>
		            </div>

		            <!--input valor -->
		            <div class="form-group">
		              <label class="col-md-4 control-label" for="valor">Valor</label>
			              <div class="col-md-4">
			                <input type="number" step="0.01" class="form-control" id="valor" name="valor"  onkeyup="valida_numero(this)" placeholder="00.00" required>
			              </div>
		            </div>

		            <!-- Botões -->
		            <div class="form-group">
		               <div class="col-sm-offset-4 col-sm-3">
		                    <center> 
				                 <input type="submit" class="btn btn-success" value="Cadastrar"/>
				                  <input type="reset" class="btn btn-danger" value="Limpar"/>
				             </center>
			            </div>
		            </div>
		     </fieldset>
		  </form><!-- Fecha form -->
</div><!-- fecha div container-->

  <section id="work-shop" class="section-padding">
    <div class="container ">
      <div class="row">
        
      </div>
    </div>
  </section>  
	   
	 <!--Footer-->
    <?php
      include '../view/footer.html';
     ?> 
    <!--/ Footer-->  
    <script type="text/javascript">
		function valida_numero() {
		   var num = document.getElementById('numero').value;
		   if ( isNaN( num ) ) { // isNaN = is not a number
		      alert('Não é um número!');
		      return false; // bloqueia submissão/envio ao php
		   }
		   alert('Manda pro php porque é número sim!');
		   return true; // prossegue o envio
		}
  </script>  
	    
	  </body>
</html>