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
               
              
<div id="servicosDisponiveis"></div>

</body>
</html