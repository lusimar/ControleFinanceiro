<?php
    session_start();
    $nome    = $_SESSION['nome'];
    $usuario = $_SESSION['usuario'];
    if(!isset($_SESSION['usuario'])){
        header('Location: index.php?erro=1');
    }
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Controle Financeiro</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

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
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
                <!-- <li><a href="valor_em_caixa.php">Receitas</a></li>
                <li><a href="contas_a_pagar.php">Contas a Pagar</a></li>
                <li><a href="consulta_seu_saldo">Consulta seu saldo</a></li>
                <li><a href="consulta_suas_contas">Consulta suas contas</a></li> -->
                <li><a href="home.php">Home</a></li>
	            <li><a href="sair.php">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


        <div class="container">
	        <div class="jumbotron">
	            <h1>Bem vindo <?=$nome?></h1>
	            <p>Se organize!!</p>
	        </div>
            <div class="clearfix"></div>
		</div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>