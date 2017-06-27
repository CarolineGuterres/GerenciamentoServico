<?php
	include_once '../model/ConexaoBD.class.php';
		
		//Classe usuario
		class Usuario{
			public $idUsuario;
			public $nomeUsuario;
			public $email;
			public $telefone;
			public $cidade;
			public $endereco;
			public $login;
			public $senha;
			public $tipo;
			
			//funcao para inserir
			function inserir(){
				$bd = new ConexaoBD;
				$sql = "INSERT INTO usuario (nomeUsuario, email, telefone, cidade, endereco, login, senha,tipo)
				VALUES ('$this->nomeUsuario', '$this->email', '$this->telefone', '$this->cidade','$this->endereco', '$this->login','$this->senha','$this->tipo')";
				$bd->conectar();
				$bd->query($sql);
				$bd->fechar();
			}
			
		   //mostrar dados do usaurio para alterar
			function mostrarUsuarioAlterar($idUsuario){
				$bd = new ConexaoBD;
				$bd->conectar();
				return $bd->query("SELECT * FROM usuario WHERE  idUsuario='$idUsuario'");
				$bd->fechar();
			}

			//funcao para excluir
			function excluirUsuario($idUsuario){
				$bd = new ConexaoBD;
				$sql = "DELETE FROM usuario WHERE idUsuario='$idUsuario'";
				$bd->conectar();
				$bd->query($sql);
				$bd->fechar();
			}

			//funcao para atualizar dados do usuario
			function atualizarUsuario(){
				$bd = new ConexaoBD;
				$bd->conectar();
				$bd->query("UPDATE usuario SET nomeUsuario='$this->nomeUsuario', email='$this->email', telefone='$this->telefone',cidade='$this->cidade', endereco='$this->endereco' WHERE idUsuario='$this->idUsuario'");
				$bd->fechar();
				
			}
			//funcao para verificar login e senha do usuario
			function verificaUsuario($login, $senha) {

				$bd = new ConexaoBD();
				$bd->conectar();
				$sql = "SELECT * FROM usuario WHERE login='{$login}' AND senha='{$senha}';";
				return $bd->query($sql);
				$bd->fechar();
            }

			//mostrar dados do usuario para login
			function consultar($idUsuario){
				$bd = new ConexaoBD;
				$bd->conectar();
				return $bd->query("SELECT * FROM usuario WHERE  login='$login'");
				$bd->fechar();
			}
			//mostrar dados do usuario para alterar
			function mostrarUsuario($idUsuario){
				$bd = new ConexaoBD;
				$bd->conectar();
				return $bd->query("SELECT idUsuario, nome, endereco FROM usuario WHERE  idUsuario='$idUsuario'");
				$bd->fechar();
			}

		
		}

?>