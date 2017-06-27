<?php
		 include_once'../model/ConexaoBD.class.php';
			
			//Classe contratp
			class Contrato{
				public $idContrato;
				public $idUsuarioFornecedor;
				public $idUsuarioCliente;
				public $idServico;
				public $observacao;
				public $data;
				
				//funcao para inserir
				function inserir($idUsuarioFornecedor,$idUsuarioCliente,$idServico, $idCategoria){
					$bd = new ConexaoBD();
					$bd->conectar();
					$sql = "INSERT INTO contrato (idUsuarioFornecedor, idUsuarioCliente, idServico,idCategoria, observacao, data)
					VALUES ('$idUsuarioFornecedor', '$idUsuarioCliente','$idServico', '$idCategoria', '$this->observacao', now())";
					$bd->query($sql);
					$bd->fechar();
				}

				//mostrar serviços contratado
				function mostrarServicosFinalizar($idUsuario){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT nomeUsuario, email, telefone, nomeCategoria, idServico FROM `contrato` INNER JOIN usuario ON contrato.idUsuarioCliente=usuario.idUsuario INNER JOIN categoria ON contrato.idCategoria=categoria.idCategoria WHERE contrato.idUsuarioFornecedor = '$idUsuario'");
					$bd->fechar();
				}




				

				
			}
?>