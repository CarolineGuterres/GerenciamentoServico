<?php
	include_once '../model/ConexaoBD.class.php';
		
		//Classe avaliacao servico
		class Avaliacao{
			public $idAvalicao;
			public $idUsuario;
			public $idServico;
			public $idCategoria;
			public $nota;
			public $comentario;
			public $data_avaliacao;
			
			//funcao para inserir
			function inserir(){
				$bd = new ConexaoBD;
				$sql = "INSERT INTO avaliacao (idUsuario, idServico, idCategoria, nota, comentario, data_avaliacao)
				VALUES ('$this->idUsuario', '$this->idServico', '$this->idCategoria', '$this->nota','$this->comentario', now())";
				$bd->conectar();
				$bd->query($sql);
				$bd->fechar();
			}

			//funcao para mostrar avaliacao
			function mostrarAvaliacao($idServico){
				$bd = new ConexaoBD;
				$bd->conectar();
				return $bd->query("SELECT * FROM avaliacao WHERE  idServico='$idServico'");
				$bd->fechar();

			}
		}
?>

			