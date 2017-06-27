<?php
	include_once '../model/ConexaoBD.class.php';

		//Classe login
		class Login{
			public $idUsuario;
			public $login;
			public $senha;
			public $nomeUsuario;
			public $email;
			public $telefone;
			public $cidade;
			public $endereco;
			public $tipo;

			//mostrar dados do usuario para logar
				 function buscaUser($login, $senha) {
                      //echo $login;
					$bd = new ConexaoBD();
					$bd->conectar();
					$sql = "SELECT * FROM usuario WHERE login='$login' AND senha='$senha'";
					return $bd->query($sql);
					$bd->fechar();
                }
				//mostrar dados do usuario para alterar
				function mostrarUsuario($idUsuario){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT idUsuario, nome, endereco,tipo FROM usuario WHERE  idUsuario='$idUsuario'");
					$bd->fechar();
				}

				//consultar tipo
				function consultarTipo($idUsuario){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT tipo FROM usuario WHERE  idUsuario='$idUsuario'");
					$bd->fechar();
				}
		}
?>
