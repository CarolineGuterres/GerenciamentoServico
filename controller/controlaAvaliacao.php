<?php

 // echo "<pre>",print_r($_POST);
		 
		   include '../model/Avaliacao.class.php';
			$operacao = $_POST["operacao"];
			session_start();


			$idUsuario=$_POST["idUsuario"];
			$idServico=$_POST["idServico"];
			$idCategoria=$_POST["idCategoria"];
			$nota=$_POST["nota"];
            $comentario=$_POST["comentario"];
			//$data_avaliacao=$_POST["data_avaliacao"];
			
			$obj = new Avaliacao;

			$obj->idUsuario = $idUsuario;
			$obj->idServico = $idServico;
			$obj->idCategoria = $idCategoria;
			$obj->nota = $nota;
			$obj->comentario = $comentario;
			//$obj->data_avaliacao = $data_avaliacao;
			
			$obj->inserir();
			$_SESSION['mensagem']='Avaliacao realizada com sucesso';
			$_SESSION['local']='../view/interesseServicos.php';
			
			echo "<meta http-equiv='refresh' content='0;url=../js/jquerymodal.php?numero=1'>";
				
			

?>
