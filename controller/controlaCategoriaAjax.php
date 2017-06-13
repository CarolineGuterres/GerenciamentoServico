<?php
     include '../model/Servico.class.php';
     $obj = new Servico ();
     $resultado= $obj->CarregarServicos($_GET["idCategoria"]);
	   if($resultado){
		     while($linha=mysqli_fetch_assoc($resultado)){
		          echo "<div class='jumbotron'><table class='table'><thead> <tr>";
                  echo "<th><h4><i class='fa fa-tag' aria-hidden='true'>Categoria: " .$linha['nomeCategoria']."</h4></th>";
                  echo "<th><h4><i class='fa fa-book' aria-hidden='true'>Descrição: " .$linha['descricao']."</h4></th>";
                  echo"</tr></thead></table>";
                  echo "</div> ";
		      }
	   }
?>