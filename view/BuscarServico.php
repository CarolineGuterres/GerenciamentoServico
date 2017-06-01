<?php
		 include_once'../model/ConexaoBD.class.php';
			
			//Classe servico
			class Servico{
				public $idServico;
				public $idUsuario;
				public $endereco;
				public $idCategoria;
				public $descricao;
				public $valor;
				public $data;
				public $interesse;
				

            function buscarServicosCat($idCategoria){
				    $bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT nomeCategoria, descricao FROM `categoria` INNER JOIN `servico` ON categoria.idCategoria=servico.idCategoria WHERE servico.idCategoria = '$idCategoria' " );
					$bd->fechar();
			}
?>