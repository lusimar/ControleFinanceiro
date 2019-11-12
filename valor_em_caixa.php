<!DOCTYPE HTML>
<html>
    <head>

        <meta charset="UTF-8">
        <title>Valor em caixa</title>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
    </head>

    <body>

        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <!--Menu para telas pequenas-->
                <div class="navbar-header">
	                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
	                <a href="index.php"><img src="imagens/icone_principal.png" /></a>
                </div>
                <!--Menu para telas grandes-->
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="home.php">Home</a></li>
                        <li><a href="sair.php">Sair</a></li>
                    </ul>
                </div>
            </div>

        </nav>

        <div class="container">

            <!-- Mensagem orientação ao usuário -->
            <div class="jumbotron">
                <h1>Informe os valores a receber</h1>
                <p>Organize suas contas!!</p>
            </div>
            <div class="col-md-9">
            <div class="row"></div>
            </div>
            <form>
                <div class="col-md-4">
                    <div class="form-group">
						<input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição"  required="requiored">
                    </div>
                    <div class="form-group">
						<input type="text" class="form-control" id="descricao1" name="descricao1" placeholder="Descrição">
                    </div>
                    <div class="form-group">
						<input type="text" class="form-control" id="descricao2" name="descricao2" placeholder="Descrição" >
                    </div>
                    <div class="form-group">
						<input type="text" class="form-control" id="descricao3" name="descricao3" placeholder="Descrição" >
                    </div>
                    <div class="form-group">
						<input type="text" class="form-control" id="descricao4" name="descricao4" placeholder="Descrição" >
                    </div>
                    <div class="form-group">
						<input type="text" class="form-control" id="descricao5" name="descricao5" placeholder="Descrição">
				    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
						<input type="text" class="form-control" id="data" name="data" placeholder="Data" required="requiored">
                    </div>
                    <div class="form-group">
						<input type="text" class="form-control" id="data1" name="data1" placeholder="Data">
                    </div> 
                    <div class="form-group">
						<input type="text" class="form-control" id="data2" name="data2" placeholder="Data" >
                    </div> 
                    <div class="form-group">
						<input type="text" class="form-control" id="data3" name="data3" placeholder="Data" >
                    </div> 
                    <div class="form-group">
						<input type="text" class="form-control" id="data4" name="data4" placeholder="Data" >
                    </div> 
                    <div class="form-group">
						<input type="text" class="form-control" id="data5" name="data5" placeholder="Data">
                    </div> 
               </div>
                <div class="col-md-4">
                    <div class="form-group">
						<input type="text" class="form-control" id="valor" name="valor" placeholder="Valor" required="requiored">
                    </div> 
                    <div class="form-group">
						<input type="text" class="form-control" id="valor1" name="valor1" placeholder="Valor">
                    </div> 
                    <div class="form-group">
						<input type="text" class="form-control" id="valor2" name="valor2" placeholder="Valor">
                    </div> 
                    <div class="form-group">
						<input type="text" class="form-control" id="valor3" name="valor3" placeholder="Valor">
                    </div> 
                    <div class="form-group">
						<input type="text" class="form-control" id="valor4" name="valor4" placeholder="Valor">
                    </div> 
                    <div class="form-group">
						<input type="text" class="form-control" id="valor5" name="valor5" placeholder="Valor">
                    </div> 
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary form-control">Cadastrar</button>
                </div>
            </form>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </body>
</html>