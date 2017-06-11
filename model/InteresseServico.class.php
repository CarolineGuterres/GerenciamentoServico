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
		    }
?>		