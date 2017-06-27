<?php
	include '../model/ConexaoBD.class.php';
		
		//Classe categoria
		class Categoria{
			public $idCategoria;
			public $nomeCategoria;
		
			//mostrar dados do usaurio para alterar
				function mostrarCategorias(){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT * FROM categoria ORDER BY idCategoria");
					// transforma os dados em um array
					$linha = mysql_fetch_assoc($dados);
				    // calcula quantos dados retornaram
					$total = mysql_num_rows($dados);
					$bd->fechar();
				}

				//buscar categorias
				function buscarCategoria(){
					$bd = new ConexaoBD;
					$bd->conectar();
					return $bd->query("SELECT * FROM categoria ");
					$bd->fechar();
				}
			
		}
				
?>