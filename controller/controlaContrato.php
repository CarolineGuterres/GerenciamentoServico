<html>
   <head>
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
				 
				   include '../model/Contrato.class.php';
					$operacao = $_POST["operacao"];
					session_start();
					if($operacao=="contratar"){
						$idUsuarioFornecedor = $_POST["idUsuario"];
						$idUsuarioCliente=$_POST["idUsuarioCliente"];
						$idServico=$_POST["idServico"];
						$observacao=$_POST["observacao"];
						$data=$_POST["data"];
						$idCategoria = $_POST['idCategoria'];
						
						$obj = new Contrato;

						$obj->observacao = $observacao;
						$obj->data = $data;
						

						$obj->inserir($idUsuarioFornecedor,$idUsuarioCliente,$idServico,$idCategoria);
						
						$_SESSION['mensagem']='Serviço contratado com sucesso';
						$_SESSION['local']='../view/finalizarServico.php';
						
						echo "<meta http-equiv='refresh' content='0;url=../js/jquerymodal.php?numero=1'>";
					}

				?>

	</body>

</html>