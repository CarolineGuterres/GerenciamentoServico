<?php
		 include_once'../model/ConexaoBD.class.php';
			
			//Classe servico
			class Interesse_Serv{
				public $idInteresseServ;
				public $idUsuario;
				public $idServico;
				
				//funcao para inserir
				function inserir($idUsuario,$idServico){
					$bd = new ConexaoBD();
					$bd->conectar();
					$sql = "INSERT INTO  interesse_serv (idUsuario,idServico) VALUES ('$idUsuario', '$idServico')";
					$bd->query($sql);
					$bd->fechar();
				}

                //mostrar os serviços que os clientes obtiveram interesse
				function mostrarInteresses($idUsuario){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT nomeCategoria, descricao,usuario.idUsuario,interesse_serv.idServico FROM `interesse_serv` INNER JOIN servico ON interesse_serv.idServico=servico.idServico INNER JOIN usuario ON interesse_serv.idUsuario=usuario.idUsuario INNER JOIN categoria on categoria.idCategoria=servico.idCategoria WHERE interesse_serv.idUsuario = '$idUsuario' ORDER BY interesse_serv.idServico DESC " );
					$bd->fechar();
				}

				//funcao para excluir
				function excluirInteresse($idServico){
					$bd = new ConexaoBD;
					$sql = "DELETE FROM interesse_serv WHERE idServico='$idServico'";
					$bd->conectar();
					$bd->query($sql);
					$bd->fechar();
				}
		    }
?>		