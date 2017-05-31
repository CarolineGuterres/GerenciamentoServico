<?php
	//include '../model/ConexaoBD.class.php';
	include "../model/Categoria.class.php";

	@$action = $_GET['action'];//requisicao acao
	@$action = $_REQUEST['action'];
	if(is_callable($action))
	{
		$action();//verifica funcao
	}
	function getCategorias(){

		header('Content-Type: application/json');
		$nomeCategoria = array();

	    $obj = new Categoria;

	     $resultado = $obj->buscarCategoria();
	 
		if($resultado){
			while($linha=mysqli_fetch_assoc($resultado)){
				$nomeCategoria[]=$linha;
			}
		}
		
		echo json_encode($nomeCategoria);
		
	}

	function getServicos(){

		header('Content-Type: application/json');
		$cat_id= $GET_["cat_id"];
		$cat_id=$_REQUEST["cat_id"];
		echo "$cat_id";
		$servicos= array();

	    $obj = new Servico;

	     $resultado = $obj->buscarServicosCat();
	 
		if($resultado){
			while($linha=mysqli_fetch_assoc($resultado)){
				$servicos[]=$linha;
				echo $servicos;
			}
		}
		
		echo json_encode($idCategoria);
		
	}
	
	
?>