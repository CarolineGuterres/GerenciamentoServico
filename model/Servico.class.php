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
				
				
				//funcao para inserir
				function inserir(){
					$bd = new ConexaoBD();
					$bd->conectar();
					$sql = "INSERT INTO servico (idUsuario,endereco, idCategoria, descricao, valor, data,interesse)
					VALUES ('$this->idUsuario', '$this->endereco','$this->idCategoria', '$this->descricao', '$this->valor','$this->data','0')";
					$bd->query($sql);
					$bd->fechar();
				}
				function mostrarServicos(){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT * FROM servico,categoria WHERE categoria.idCategoria = servico.idCategoria ORDER BY idServico " );
					$bd->fechar();
				}
				//mostrar dados do usaurio para alterar
				function mostrarServicoAlterar($idServico){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT * FROM servico WHERE  idServico='$idServico'");
					$bd->fechar();
				}
				
				//funcao para atualizar dados do aluno
				function atualizarServico(){
					$bd = new ConexaoBD;
					$bd->conectar();
					$bd->query("UPDATE servico SET descricao='$this->descricao', valor='$this->valor' WHERE idServico='$this->idServico'");
					$bd->fechar();
					
				}
				//funcao para excluir
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

				function mostrarServicosNotificacao($idUsuario){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT nomeCategoria, descricao,nomeUsuario, telefone FROM `categoria` INNER JOIN `servico` on categoria.idCategoria = servico.idCategoria INNER JOIN usuario on servico.idUsuario=usuario.idUsuario WHERE servico.idUsuario = '$idUsuario' " );
					$bd->fechar();
				}

				function buscarServicosCat($idCategoria){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT nomeCategoria, descricao FROM `categoria` INNER JOIN `servico` ON categoria.idCategoria=servico.idCategoria WHERE servico.idCategoria = '$idCategoria' " );
					$bd->fechar();
				}

				function atualizarInteresse($idServico){
					$bd = new ConexaoBD;
					$bd->conectar();
					$bd->query("UPDATE servico SET interesse='1' WHERE idServico='$idServico'");
					$bd->fechar();
					
				}

				
				
			}	
				

	?>

	