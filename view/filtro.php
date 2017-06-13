<html>
<head>
 <script src='../js/jquery-1.11.2.min.js'></script>


   <script type="text/javascript">
    $(document).ready(function () {
      console.log("ready");
      function carregarservicos(idCategoria){
       if(idCategoria){
      
          $.get( "../controller/controlaCategoriaAjax.php?idCategoria="+idCategoria, 
            function( data ) { $( "#servicosDisponiveis" ).html( data );}
          );
        
        }
      } 

    });
  
 </script>
</head>
<body>
 </div>
             <br>
               
               <select class="btn btn-default btn-xs dropdown-toggle" name="categoria" onchange="carregarservicos(this.value)">
                  <option value = "NULL" name="idCategoria">Selecione categoria</option>

                    <?php
                      include_once "../model/Categoria.class.php";

                              $obj = new Categoria;

                      $resultado = $obj->mostrarCategorias();

                      if($resultado){
                        while($linha=mysqli_fetch_assoc($resultado)){
                          $idCategoria=$linha['idCategoria'];
                          $nomeCategoria=$linha['nomeCategoria'];
                    ?>
                      <option class="form-control" name="idCategoria" value="<?php echo $idCategoria; ?>"><?php echo $nomeCategoria; ?></option>
                    <?php }
                              }
              ?>


                  </select>
                 
            

                       
        </div>
<div id="servicosDisponiveis"></div>

</body>
</html