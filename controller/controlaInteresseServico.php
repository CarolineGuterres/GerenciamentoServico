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
				 
				   include '../model/InteresseServico.class.php';
					$operacao = $_POST["operacao"];
					session_start();
					if($operacao=="interesse"){
						$idUsuario=$_POST["idUsuario"];
						echo $idUsuario;

						//$idServico=$_POST["idServico"];
						//echo $idServico;
						$idUsuario = $_POST["idUsuario"];
					

						$obj = new Interesse_Serv;

						$obj->idUsuario = $idUsuario;
						

						$obj->inserir($idUsuario);
						
						
						$_SESSION['mensagem']='Seu interesse foi cadastrado';
						$_SESSION['local']='../view/areaCliente.php';
						
						echo "<meta http-equiv='refresh' content='0;url=../js/jquerymodal.php?numero=1'>";
					}
				?>

	</body>

</html>