<?php
			//classe controlar o fluxo do sistema
				include '../model/Usuario.class.php';
				$operacao = $_POST["operacao"];
				session_start();
				
				//incluir os dados
				if($operacao == "incluir"){
					$nomeUsuario = $_POST["nomeUsuario"];
					$email = $_POST["email"];
					$telefone = $_POST["telefone"];
					$cidade = $_POST["cidade"];
					$endereco = $_POST["endereco"];
					$login = $_POST["login"];
					$senha = sha1($_POST["senha"]);
					$tipo = $_POST["tipo"];
					
					$obj = new Usuario;
					
					$obj->nomeUsuario = $nomeUsuario;
					$obj->email = $email;
					$obj->telefone = $telefone;
					$obj->cidade = $cidade;
					$obj->endereco = $endereco;
					$obj->login = $login;
					$obj->senha = $senha;
					$obj->tipo = $tipo;
					
					 $obj->inserir();

				   $_SESSION['mensagem']='Usuário cadastrado com sucesso';
				   $_SESSION['local']='../view/login.php';
					
					echo "<meta http-equiv='refresh' content='0;url=../js/jquerymodal.php?numero=1'>";


				//editar os dados Usuario
				}elseif($operacao == "EDITAR"){
					 $idUsuario = $_POST["idUsuario"];
					 $nomeUsuario = $_POST["nomeUsuario"];
					 $email = $_POST["email"];
					 $telefone = $_POST["telefone"];
					 $cidade = $_POST["cidade"];
					 $endereco = $_POST["endereco"];
					
					 $obj = new Usuario;
					 
					 $obj->idUsuario =  $idUsuario;
					 $obj->nomeUsuario = $nomeUsuario;
					 $obj->email = $email;
					 $obj->telefone = $telefone;
					 $obj->cidade = $cidade;
					 $obj->endereco = $endereco;
					 $obj->atualizarUsuario();
					 
					 $_SESSION['mensagem']='Usuário alterado com sucesso';
					 $_SESSION['local']='../view/areaFornecedor.php';
						
					echo "<meta http-equiv='refresh' content='0;url=../js/jquerymodal.php?numero=1'>"; 
					
				//excluir os dados
				}elseif($operacao == "EXCLUIR"){
				$idUsuario = $_POST["idUsuario"];
				
				echo "<meta http-equiv='refresh'content='0;url=../js/jquerymodal.php?numero=2&codigo=$idUsuario'>";
				
				//caso escolher 'sim' para excluir
				}elseif ($operacao == "Sim"){
					$codigo = $_POST["codigo"];
					$obj = new Usuario;
					$obj->excluirUsuario($codigo);
					
					$_SESSION['mensagem']='Usuario excluído com sucesso';
					$_SESSION['local']='../view/login.php';
					
					echo "<meta http-equiv='refresh' 
					content='0;url=../js/jquerymodal.php?numero=1'>";
				}
?>
	