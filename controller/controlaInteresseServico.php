<?php
				 
				   include '../model/InteresseServico.class.php';
					$operacao = $_POST["operacao"];
					session_start();
					if($operacao=="interesse"){
						$idUsuario=$_POST["idUsuario"];
						$idServico=$_POST["idServico"];
					
						$obj = new Interesse_Serv;
						$obj->inserir($idUsuario,$idServico);
						$_SESSION['mensagem']='Seu interesse foi cadastrado';
						$_SESSION['local']='../view/areaCliente.php';
						echo "<meta http-equiv='refresh' content='0;url=../js/jquerymodal.php?numero=1'>";
					}elseif($operacao == "CANCELAR INTERESSE"){
						$idServico = $_POST["idServico"];
						echo "<meta http-equiv='refresh'content='0;url=../js/jquerymodalInteresse.php?numero=2&codigo=$idServico'>";
						
					//caso escolher 'sim' para excluir
					}elseif ($operacao == "Sim"){
						$codigo = $_POST["codigo"];
						$obj = new Interesse_Serv;
						$obj->excluirInteresse($codigo);
						
						$_SESSION['mensagem']='Interesse excluído com sucesso';
						$_SESSION['local']='../view/interesseServicos.php';
						
						echo "<meta http-equiv='refresh' 
						content='0;url=../js/jquerymodalInteresse.php?numero=1'>";

					}
?>

