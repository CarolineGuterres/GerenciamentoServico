 <!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Sistema de Gerenciamento de Serviços</title>
      <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../css/imagehover.min.css">
      <link rel="stylesheet" type="text/css" href="../css/style.css">    
      <script type="text/javascript" src="../js/jquery.maskedinput.js"></script>
      <script type="text/javascript" src="../js/mascaras.js"></script>
      <script type="text/javascript" src="../js/modal.js"></script> 

    </head>
<body>
                 
       <!--Menu de navegaçao-->
 <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
         <img src="../img/logo.png" width="220"> 
      </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">  
            <li class="btn-conta"><a href="../view/cadastrarUsuario.php">Criar Conta</a></li>
            <li class="btn-trial"><a href="../view/login.php">Login</a></li>
          </ul>
        </div>
        <div class="navbar-collapse style= collapse in" id="bs-megadropdown-tabs" style="padding-left: 0px;">
            <ul class="nav navbar-nav navbar-right">
            </ul>
         </div>
    </div>  <!--Fecha container -->
  </nav>   <!--Fecha menu de navegacao-->
    
 <section id="work-shop" class="section-padding">
    <div class="container ">
      <div class="row">
        <div class="col-md-12">
              <h1>
                 <align="left">
                    <a href="../view/login.php"><h4 style="color:rgba(45, 45, 234, 0.98)";>Voltar Página Principal</h4></a>
                  <center style="margin-bottom: 5%;" >Cadastrar Usuário</center> 
                 </align="left">  
              </h1>
        </div>
     </div>

<!--Formulario-->
    <form class="form-horizontal"  role="form" method="post" action="../controller/controlaUsuario.php">
                <fieldset>

                  <input type="hidden" name="idUsuario" value="<?php echo $_SESSION['idUsuario']; ?>">
                    <input type="hidden" name="operacao" value="incluir"/>
                      
                      <!--input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="nomeUsuario">Nome</label>  
                          <div class="col-md-4">
                             <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" placeholder="Informe seu nome completo" required>
                          </div>
                      </div>

                      <!--input-->
                      <div class="form-group">
                         <label class="col-md-4 control-label" for="endereco">E-mail</label>  
                           <div class="col-md-4">
                              <input type="email" class="form-control" id="email" name="email"  placeholder="examplo@gmail.com" onBlur="validarEmail(this.value, 'validacao');" maxlength="60" size='40' required>
                            </div>
                      </div>

                      <!--input-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="telefone">Telefone</label>
                          <div class="col-md-4">
                            <input type="text" class="form-control telefone" id="telefone" name="telefone" placeholder="(99)99999-9999"  maxlength="11" required>   
                          </div>
                      </div>

                      <!--input-->
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="cidade">Cidade</label>  
                            <div class="col-md-4">
                              <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Informe sua cidade" required>
                            </div>
                      </div>

                      <!-- input -->
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="endereco">Endereço</label>
                            <div class="col-md-4">
                              <input type="text" class="form-control"  name="endereco" placeholder="Informe seu endereço" required>
                            </div>
                      </div>

                      <!--input-->
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="login">Login</label>  
                            <div class="col-md-4">
                              <input type="text" class="form-control" name="login" placeholder="Informe seu login" required>
                            </div>
                      </div>

                        <!--input-->
                      <div class="form-group">
                          <label class="col-md-4 control-label" for="senha">Senha:</label>  
                          <div class="col-md-4">
                             <input type="password" class="form-control"  name="senha" placeholder="Informe uma senha"  minlength="6" maxlength="8" 
                             required> <p>*Mínimo 6 Caracteres e Máximo 8 Caracteres</p>  
                          </div>
                      </div>

                        <!--Select-->
                      <div class="form-group">
                        <label class="col-md-4 control-label" for="tipo">Voce é:</label>  
                          <div class="col-md-4">
                            <input type="radio" name="tipo" id="tipo" value="cliente" required>Cliente
                            <input type="radio" name="tipo" id="tipo" value="fornecedor" required>Fornecedor<br>
                          </div>
                      </div>

                      <!-- Botões -->
                      <div class="form-group">
                         <div class="col-sm-offset-4 col-sm-3">
                           <center>
                              <input type="submit" class="btn btn-success medio"  value="CADASTRAR"/>
                              <input type="reset" class="btn btn-danger medio" value="LIMPAR"/>
                            </center>
                          </div>
                      </div>

                 </fieldset>
      </form> 
   </div>
</section>

<section id="work-shop" class="section-padding">
    <div class="container ">
      <div class="row">
        
      </div>
    </div>
</section>    
     
     <!--Footer-->
    <?php
      include '../view/footer.html';
     ?> 
    <!--/ Footer-->

    <?php include '../view/modal.php'; ?>

      <script src='http://code.jquery.com/jquery-2.1.3.min.js'></script>
      <script src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'></script>   

      <script type="text/javascript">
          function validarEmail(email, validacao) {
          
            var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            var valid = document.getElementById(validacao);
          
            result = ck_email.test(email);
                if (!result) {
                  valid.innerHTML = "Endereço de e-mail inválido";
                } else {
                  valid.innerHTML = "Endereço de e-mail válido";
                  }
            return result;
        }
   </script>  

   <script type="text/javascript">
     function mascara(o,f){
        v_obj=o
        v_fun=f
        setTimeout("execmascara()",1)
    }
    function execmascara(){
        v_obj.value=v_fun(v_obj.value)
    }
    function mtel(v){
        v=v.replace(/D/g,"");             //Remove tudo o que não é dígito
        v=v.replace(/^(d{2})(d)/g,"($1) $2"); //Coloca parênteses em volta dos dois primeiros dígitos
        v=v.replace(/(d)(d{4})$/,"$1-$2");    //Coloca hífen entre o quarto e o quinto dígitos
        return v;
    }
    function id( el ){
        return document.getElementById( el );
    }
    window.onload = function(){
        id('telefone').onkeypress = function(){
            mascara( this, mtel );
        }
    }
   </script>
  </body>
</html>

