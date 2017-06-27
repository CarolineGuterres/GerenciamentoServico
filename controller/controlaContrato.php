<?php
		 
		   include '../model/Contrato.class.php';
			$operacao = $_POST["operacao"];
			session_start();
			if($operacao=="contratar"){
				$idUsuarioFornecedor = $_POST["idUsuario"];
				$idUsuarioCliente=$_POST["idUsuarioCliente"];
				$idServico=$_POST["idServico"];
				$observacao=$_POST["observacao"];
				//$data=$_POST["data"];
				$idCategoria = $_POST['idCategoria'];
				
				$obj = new Contrato;

				$obj->observacao = $observacao;
				//$obj->data = $data;
			
				$obj->inserir($idUsuarioFornecedor,$idUsuarioCliente,$idServico,$idCategoria);
				
				$_SESSION['mensagem']='Serviço contratado com sucesso';
				$_SESSION['local']='../view/finalizarServico.php';
				
				echo "<meta http-equiv='refresh' content='0;url=../js/jquerymodal.php?numero=1'>";
			}

			

?>
