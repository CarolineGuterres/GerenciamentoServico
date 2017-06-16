  <?php
       include '../model/Servico.class.php';
       $obj = new Servico ();
       $resultado= $obj->CarregarServicosCliente($_GET["idCategoria"]);
  	   if($resultado){
  		     while($linha=mysqli_fetch_assoc($resultado)){
  		          echo "<div class='jumbotron'><table class='table'><thead> <tr>";
                    echo "<th><h4><i class='fa fa-tag' aria-hidden='true'></i>Categoria:" .$linha['nomeCategoria']."</h4></th>";
                    echo "<th><h4><i class='fa fa-book' aria-hidden='true'></i>Descrição: " .$linha['descricao']."</h4></th>";
                    echo "<th><h4><i class='fa fa-map-marker' aria-hidden='true'></i>Endereco: "  .$linha['endereco']."</h4></th>";
                    echo "<th><h4><i class='fa fa-money' aria-hidden='true'></i>Valor: " .$linha['valor']."</h4></th>";
                   //  echo "<th><h4><i class='fa fa-money' aria-hidden='true'></i>Valor: " .$linha['idServico']."</h4></th>";
                   echo "<div class='row'>";
                                      echo "<div class='col-sm-12 text-center'>";
                                      echo "<form class='form-horizontal center' role='form' method='post' action='../controller/controlaInteresseServico.php'>";
                                     
                                      ?>

                                       <input type="hidden" name="idUsuario" value="<?php echo $idUsuario?>" />

                                      
          <?php
                               echo "<th><input type='hidden' name='idServico' value= ' ".$linha['idServico']."'</th>";
                               echo "<input type='hidden' name='operacao' value='interesse'/>";
                              echo "<th><input type='submit' class='btn btn-success fa fa-check-square-o' value='Tenho Interesse'/></th>";
                              echo "</form>";
                            echo "</div>";

                            echo "<div class='col-sm-12 text-center'>";
                                 echo"<th><a class='btn btn-danger fa fa-check-square-o' href=../view/avaliarServico.php>Avaliação</a></th>";

                          echo "</div></div>";
                          echo "</thead>";

                          echo "</table>";

                          echo "</div><br><br>";
                          
                          }
                    }

              ?>