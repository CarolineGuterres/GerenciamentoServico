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
				
				//funcao para inserir
				function inserir(){
					$bd = new ConexaoBD();
					$bd->conectar();
					$sql = "INSERT INTO servico (idUsuario,endereco, idCategoria, descricao, valor, data)
					VALUES ('$this->idUsuario', '$this->endereco','$this->idCategoria', '$this->descricao', '$this->valor',now())";
					$bd->query($sql);
					$bd->fechar();
				}

				//funcao mostrar serviços
				function mostrarServicos(){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT * FROM servico,categoria WHERE categoria.idCategoria = servico.idCategoria ORDER BY idServico DESC " );
					$bd->fechar();
				}

				//mostrar dados do servico para alterar
				function mostrarServicoAlterar($idServico){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT nomeCategoria, descricao,valor FROM servico INNER JOIN categoria on servico.idCategoria=categoria.idCategoria WHERE  idServico='$idServico'");
					$bd->fechar();
				}
				
				//funcao para atualizar dados do servico
				function atualizarServico(){
					$bd = new ConexaoBD;
					$bd->conectar();
					$bd->query("UPDATE servico SET descricao='$this->descricao', valor='$this->valor' WHERE idServico='$this->idServico'");
					$bd->fechar();
				}

				//funcao para excluir servico
				function excluirServico($idServico){
					$bd = new ConexaoBD;
					$sql = "DELETE FROM servico WHERE idServico='$idServico'";
					$bd->conectar();
					$bd->query($sql);
					$bd->fechar();
				}

				//funcao para buscar Servico
				function buscarServico(){
					$bd = new ConexaoBD;
					return $bd->query("SELECT * FROM servico ");
					$bd->fechar();
				}
                
                //funcao para mostrar servicos que tiverem interesse
				function mostrarServicosNotificacao($idUsuario){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT nomeCategoria, descricao,nomeUsuario, telefone,interesse_serv.idServico FROM `interesse_serv` INNER JOIN servico ON interesse_serv.idServico=servico.idServico INNER JOIN usuario ON interesse_serv.idUsuario=usuario.idUsuario  INNER JOIN categoria on categoria.idCategoria=servico.idCategoria WHERE servico.idUsuario = '$idUsuario' " );
					$bd->fechar();
				}
                
                //buscar categoria pelo filtro
				function buscarServicosCat($idCategoria){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT nomeCategoria, descricao FROM `categoria` INNER JOIN `servico` ON categoria.idCategoria=servico.idCategoria WHERE servico.idCategoria = '$idCategoria' " );
					$bd->fechar();
				}
                
                //atualizar interesse respectivo servico
				function atualizarInteresse($idServico){
					$bd = new ConexaoBD;
					$bd->conectar();
					$bd->query("UPDATE servico SET interesse='1' WHERE idServico='$idServico'");
					$bd->fechar();
					
				}

				//mostrar dados de servico contratado
				function mostrarServicoContratar($idServico){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT nomeUsuario, usuario.idUsuario, categoria.nomeCategoria, servico.idCategoria FROM `interesse_serv` INNER JOIN servico ON servico.idServico=interesse_serv.idServico INNER JOIN usuario ON interesse_serv.idUsuario=usuario.idUsuario INNER JOIN categoria ON servico.idCategoria=categoria.idCategoria WHERE servico.idServico = '$idServico'");
					$bd->fechar();
				}
                
                //funcao de filtro
				function CarregarServicos($idCategoria){
				    $bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT nomeCategoria, descricao 
						FROM `categoria` INNER JOIN `servico` ON categoria.idCategoria=servico.idCategoria 
						WHERE servico.idCategoria = '$idCategoria' " );
					$bd->fechar();
			
		        }
                
                //carregar servicos que cliente demonstrou interesse
		        function CarregarServicosCliente($idCategoria){
				    $bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT nomeCategoria, descricao, endereco, valor, idServico FROM servico  INNER JOIN
						categoria ON categoria.idCategoria=servico.idCategoria
						WHERE servico.idCategoria = '$idCategoria' " );
					$bd->fechar();
			
		        }

		        //funcao mostrar serviços
				function avaliarServico($idServico){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT nomeCategoria, categoria.idCategoria FROM servico INNER JOIN categoria ON categoria.idCategoria = servico.idCategoria WHERE idServico='$idServico'  " );
					$bd->fechar();
				}



			}	
				
?>

	