	<html>
		  <head>
		   <meta charset="utf-8">
				 <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	        <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	        <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
	        <link rel="stylesheet" href="../css/bootstrap.min.css">
		    <link rel="stylesheet" href="../css/font-awesome.min.css">
		    <link rel="stylesheet" href="css/style.css">
		    <link rel="stylesheet" href="../css/fileinput.css">
		    <link rel="stylesheet" href="../css/bootstrapLogin.css">
		    <link rel="stylesheet" href="../css/bootstrapUsuario.css">
			<link rel="stylesheet" href="../css/fonts/">
			<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
			<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
			<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
			<script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
			<link rel="stylesheet" href="../css/index.css">
	        <link rel="stylesheet" href="../css/menuLateral.css">
	        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
		    <link rel="stylesheet" type="text/css" href="/template/css/font-awesome.min.css">
		    <link rel="stylesheet" type="text/css" href="/template/css/bootstrap.min.css">
		    <link rel="stylesheet" type="text/css" href="/template/css/imagehover.min.css">
		    <link rel="stylesheet" type="text/css" href="/template/css/style.css">

	  <title>Gerenciamento de Serviços - Serviços</title>


		</head>
		<body>
		<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Serviços<span></span></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          
          <li class="btn-trial"><a href="../view/login.php">Login</a></li>
        </ul>
        </div>
      </div>
    </nav>


			<div class="section">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<h1>
									<center>Serviços Disponíveis</center>  
								</h1> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>
								
								</div>
							</div>
						</div>
			<div class="section">
				  <div class="container">
					<div class="row">
					  <div class="col-md-12">
						
						  
						  <?php
							include "../model/Servico.class.php";
							
							$obj = new Servico;
							
							$resultado = $obj->mostrarServicos();
							
							if($resultado){
								while($linha=mysqli_fetch_assoc($resultado)){
									$categoria=$linha['categoria'];
									$descricao=$linha['descricao'];
									$valor=$linha['valor'];
									echo "<div class='jumbotron'><p>Categoria: " .$categoria."</p>";
									echo "<p>Descrição: " .$descricao."</p>";
									echo "<p> Valor: " .$valor."</p>";
									echo "</div><br>";
									
								}
							}
						  ?>
						  
						 
						
					  </div>
					</div>
					<div class="row">
					  <div class="col-md-12">
						
					  </div>
					</div>
				  </div>
				</div>
				
	           <footer>
	                <div class="container">
			            
					
				    </div>
			</footer>


				</body>
			</html>
