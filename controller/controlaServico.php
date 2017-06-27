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
			//$data = $_POST["data"];


			$obj = new Servico;
			$obj->idUsuario = $idUsuario;
			$obj->endereco = $endereco;
			$obj->idCategoria = $idCategoria;
			$obj->descricao = $descricao;
			$obj->valor = $valor;
			//$obj->data = $data;
			$obj->inserir();
			
			$_SESSION['mensagem']='Serviço cadastrado com sucesso';
			$_SESSION['local']='../view/areaFornecedor.php';

			echo "<meta http-equiv='refresh' content='0;url=../js/jquerymodal.php?numero=1'>";

	     //editar os dados
		}elseif($operacao == "EDITAR"){
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
			}elseif($operacao == "EXCLUIR"){
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
		}			
?>
