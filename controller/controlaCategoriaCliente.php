<?php
     include '../model/Servico.class.php';
     $obj = new Servico ();
     $resultado= $obj->CarregarServicosCliente($_GET["idCategoria"]);
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
                              echo "<th><input type='submit' class='btn btn-success fa fa-check-square-o' value='TENHO INTERESSE'/></th>";
                              echo "</form>";
                              echo "</div>";
                              echo "<th></th>";
                              echo "<div class='col-sm-12 text-center'>";
                              echo"<th><a class='btn btn-info fa fa-check-square-o' href=../view/avaliarServico.php>AVALIAÇÕES</a></th>";
                              echo "</thead>";
                              echo "</table>";
                              echo "</div><br><br>";
                                
                        }// fecha while
                      } // fecha if
                    ?>