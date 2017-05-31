			<html><head>
						<meta charset="utf-8">
						<meta name="viewport" content="width=device-width, initial-scale=1">
						<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
						<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
						<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
						<link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
					</head>

					<body>
						<div>
							<?php

							//classe controlar o fluxo do sistema
								include '../model/Login.class.php';

								session_start();

								$senha = sha1($_POST["senha"]);
								$login = $_POST["login"];
								$idUsuario= $_POST["idUsuario"];
								$nomeBanco = null;
								$senhaBanco = null;
								$idBanco = null;
								$nomeUsuarioBanco = null;
								$enderecoBanco=null;
								$tipoBanco = null;

							
								$l = new Login();

								
								$resultado = $l->buscaUser($login, $senha);

								while ($linha = mysqli_fetch_assoc($resultado)) {
									

									$idBanco=$linha['idUsuario'];
									$nomeBanco = $linha['login'];
		                            $nomeUsuarioBanco = $linha['nomeUsuario'];
		                            $enderecoBanco = $linha['endereco'];
									$senhaBanco = $linha['senha'];
									$tipoBanco = $linha['tipo'];
									
								}//fecha while
							
								if ($login == $nomeBanco) {
									if ($senha == $senhaBanco) {
										
										$_SESSION['idUsuario']=$idBanco;
										$_SESSION['login'] = $nomeBanco;
										$_SESSION['senha'] = $senhaBanco;
		                                $_SESSION['nomeUsuario'] = $nomeUsuarioBanco;
		                                $_SESSION['endereco'] = $enderecoBanco;
		                                $_SESSION['tipo'] = $tipoBanco;
		                                
		                                if($tipoBanco=='cliente'){

		                                	header ("Location: ../view/areaCliente.php");
		           						}//fehca if tipobanco
				    						else{
						
												header ("Location: ../view/areaFornecedor.php");
										    }//fecha else

									}//fecha segundo if senha
										

								} //fecha if login
										else {
									   			$_SESSION['mensagem']='Nome e/ou Senha incorreto';
								       			$_SESSION['local']='../view/login.php';
								    			echo "<meta http-equiv='refresh' content='0;url=../js/jquerymodal.php?numero=1'>";
								}

								?>

					</div>
				</body>

			</html>
