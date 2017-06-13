<?php
		 include_once'../model/ConexaoBD.class.php';
		 echo "<pre>"; 
		 //echo "POST".print_r($_POST);
		 echo "GET".print_r($_GET);
		$idCategoria=$_GET['idCategoria'];
			
				

           
            	   echo "aqui".$idCategoria;
				    $bd = new ConexaoBD;
					$bd->conectar();
					//echo $bd;
					echo "aqui 2".$bd;
				//	return $bd->query("SELECT nomeCategoria, descricao FROM `categoria` INNER JOIN `servico` ON categoria.idCategoria=servico.idCategoria WHERE servico.idCategoria = '$idCategoria' " );
				return $bd->query("SELECT * FROM categoria" );
					$bd->fechar();

		
?>


