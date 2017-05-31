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
					include '../model/Servico.class.php';
					$operacao = $_POST["operacao"];
					session_start();

					//incluir os dados
					if($operacao == "incluir"){
						$idUsuario = $_POST["idUsuario"];
						$endereco = $_POST["endereco"];
						$idCategoria = $_POST["idCategoria"];
                        $descricao = $_POST["descricao"];
						$valor = $_POST["valor"];
						$data = $_POST["data"];


						$obj = new Servico;

						$obj->idUsuario = $idUsuario;
						$obj->endereco = $endereco;
						$obj->idCategoria = $idCategoria;
						$obj->descricao = $descricao;
						$obj->valor = $valor;
						$obj->data = $data;
						

						$obj->inserir();
						
						$_SESSION['mensagem']='Serviço cadastrado com sucesso';
						$_SESSION['local']='../view/areaFornecedor.php';

						echo "<meta http-equiv='refresh' content='0;url=../js/jquerymodal.php?numero=1'>";
					}elseif($operacao == "Editar"){
						 $idServico = $_POST["idServico"];
						 $descricao = $_POST["descricao"];
						 $valor = $_POST["valor"];
						 
						 
						 $obj = new Servico;
						 
						 $obj->idServico =  $idServico;
						 $obj->descricao = $descricao;
						 $obj->valor = $valor;
						 
						 
						 $obj->atualizarServico();
						 
						 $_SESSION['mensagem']='Serviço alterado com sucesso';
						 $_SESSION['local']='../view/gerenciarServico.php';
							
						echo "<meta http-equiv='refresh' content='0;url=../js/jquerymodalServico.php?numero=1'>"; 
						
							//excluir os dados
						}elseif($operacao == "Excluir"){
						$idServico = $_POST["idServico"];
						
						echo "<meta http-equiv='refresh'content='0;url=../js/jquerymodalServico.php?numero=2&codigo=$idServico'>";
						
						//caso escolher 'sim' para excluir
					}elseif ($operacao == "Sim"){
						$codigo = $_POST["codigo"];
						$obj = new Servico;
						$obj->excluirServico($codigo);
						
						$_SESSION['mensagem']='Servico excluído com sucesso';
						$_SESSION['local']='../view/gerenciarServico.php';
						
						echo "<meta http-equiv='refresh' 
						content='0;url=../js/jquerymodalServico.php?numero=1'>";
					}elseif($operacao=="interesse"){
						//$idUsuarioCliente=$_POST["idUsuario"];
						//echo $idUsuarioCliente;
						$idServico=$_POST["idServico"];
						//echo $idServico;
						$obj = new Servico;
						$obj->atualizarInteresse($idServico);
						$_SESSION['mensagem']='Seu interesse foi cadastrado';
						$_SESSION['local']='../view/areaCliente.php';
						
						echo "<meta http-equiv='refresh' content='0;url=../js/jquerymodal.php?numero=1'>";
					}elseif($operacao == "filtrar"){
						$idCategoria = $_POST["idCategoria"];
					
						header("../view/inde2.php");
						
                         
				    }//fecha elseif			
			?>

	</body>

</html>
