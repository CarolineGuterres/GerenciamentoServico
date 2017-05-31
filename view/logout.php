<?php
      session_start(); // Inicia a sessão
      session_destroy(); // Destrói a sessão limpando todos os valores salvos
    
        
        //Redireciona para a página de autenticação
        header('Location:../view/login.php');
  ?>