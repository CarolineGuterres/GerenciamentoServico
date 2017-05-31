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
						$_SESSION['mensagem']='Usuario cadastrado com sucesso';
						$_SESSION['local']='../view/login.php';
						
						echo "<meta http-equiv='refresh' content='0;url=../js/jquerymodal.php?numero=1'>"; 
					
						
					//editar os dados Usuario
					}elseif($operacao == "Editar"){
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
					}elseif($operacao == "Excluir"){
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
	</body>
		
</html>