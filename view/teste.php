<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
$(function(){
$("#interesse").click(function(){
	$("#cancelar").removeAttr('disabled');
});	
});
</script>
</head>

<body>

   <section id="work-shop" class="section-padding">
      
        <div class="container">
          <div class="row">
            <div class="header-section text-center">
            <div id="servicosDisponiveis">

              <?php
                    include_once "../model/Servico.class.php";
                    $idUsuario = $_SESSION['idUsuario'];
                    //echo $idUsuario;
                    
                    $obj = new Servico;
                    
                    $resultado = $obj->mostrarServicos();

                    
                    if($resultado){
                      while($linha=mysqli_fetch_assoc($resultado)){
                        $idServico=$linha['idServico'];
                        $nomeCategoria=$linha['nomeCategoria'];
                        $descricao=$linha['descricao'];
                        $endereco=$linha['endereco'];
                        $valor=$linha['valor'];
                       
                            echo "<div class='jumbotron'>";
                            echo "<table class='table'>";
                              echo "<thead> <tr>";
                                echo "<th><h4><i class='fa fa-tag' aria-hidden='true'></i>Categoria: " .$nomeCategoria."</h4></th>"; 

                                echo "<th><h4><i class='fa fa-book' aria-hidden='true'></i>Descrição: " .$descricao."</h4></th>";

                                echo "<th><h4><i class='fa fa-map-marker' aria-hidden='true'></i>Endereco: " .$endereco."</h4></th>";

                                echo "<th><h4><i class='fa fa-money' aria-hidden='true'></i>Valor: " .$valor."</h4></th>";
                                    
                                  echo "<div class='row'>";
                                    echo "<div class='col-sm-12 text-center'>";
                                    echo "<form class='form-horizontal center' role='form' method='post' action='../controller/controlaInteresseServico.php'>";
                                   
                                    ?>

                                     <input type="hidden" name="idUsuario" value="<?php echo $idUsuario?>" />

                                    
                                    <?php
                                     echo "<th><input type='hidden' name='idServico' value='$idServico'</th>";
                                     echo "<input type='hidden' name='operacao' value='interesse'/>";
  
                                //  echo "<th><input type='submit' class='btn btn-success fa fa-check-square-o' value='Tenho Interesse'/></th>";
                                    echo"<input type='button' value='Tenho Interesse' id='interesse' />";
									echo"<input type='button' disabled='disabled' id='cancelar' value='Cancelar' />";
                                    echo "</form>";
                                  echo "</div>";

                                 echo "<th></th>";
                                echo "<div class='col-sm-12 text-center'>";
                                      echo"<th><a class='btn btn-danger fa fa-check-square-o' href=../view/avaliarServico.php>Avaliação</a></th>";

                              //=  echo "</div></div>";
                                echo "</thead>";

                                echo "</table>";

                                echo "</div><br><br>";
                                
                        }
                  }

            ?>
          </div>    
        </div>
      </div>
      </div>
  </section>
      <!--/ work-shop-->


  <section id="work-shop" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
                
          </div>
        </div>
      </div>
        <div class="container center">
         </div>
  </section>
  <section id="work-shop" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
                
          </div>
        </div>
      </div>
        <div class="container center">
         </div>
  </section>

</body>
</html>