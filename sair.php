<?php

    session_start();

   unset( $_SESSION['usuario']);
   unset($_SESSION['email']);
   
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Controle Financeiro</title>
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="js/script.js"></script>
		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">	
		
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <a href="index.php"><img src="imagens/icone_principal.png" /></a>
                </div>
                
                <!--/.nav-collapse -->
	            <div id="navbar" class="navbar-collapse collapse">
	                <ul class="nav navbar-nav navbar-right">
                        <li><a href="inscrevase.php">Criar Conta</a></li>
                        <li><a href="index.php">Entrar</a></li>
	                </ul>
	            </div>
	        </div>
	    </nav>

	    <div class="container">
	        <div class="jumbotron">
	            <h1 style="color:limegreen">Esperamos você em breve!!!</h1>
	            <p>Não deixe de organizar suas contas!!</p>
	        </div>
            <div class="clearfix"></div>
		</div>
	    
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>