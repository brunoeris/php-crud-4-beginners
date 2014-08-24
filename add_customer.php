<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Adicionar Contato</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="css/formatalayout.css">
	<link rel="stylesheet" href="css/estilos.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>
	
	<nav class="navbar navbar-fixed-top navbar-inverse">
		<div class="navbar-inner">
			<div class="container">
				<buttom class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</buttom>

				<div class="nav-collapse collapse">
					<ul class="nav">
						<li><a href="index.php">HOME</a></li>
					</ul>
					<form action="#" class="navbar-form pull-right">
						<input type="text" class="span2" placeholder="Apenas decorativo! ;)">
							<button class="btn btn-inverse">Buscar</button>
					</form>
				</div>
			</div>
		</div>
	</nav>

	<header class="jumbotron subhead">
		<div class="container">
			<h1>Tabela de Contatos</h1>
			<p>Simples CRUD em PHP</p>
		</div>
	</header>
	<br>
	<div class="container">
		<div class="row-fluid">
			<div class="span12"> 
				<form action="inserir_contato.php" method="post">
				    <fieldset>
					    <legend><h2>Adicione um novo contato:</h2></legend>
						    <label>Nome e Sobrenome:</label>
						    <input type="text" name="primeironome" placeholder="Nome..." required><br>
						    <input type="text" name="sobrenome" placeholder="Sobrenome..." required>
						    <label>Endereço:</label>
						    <textarea name="endereco" cols="30" rows="10" required></textarea><br>
						    <div class="input-prepend">
								<span class="add-on">@</span>
						    	<input type="email" name="email" placeholder="fulano@email.com" required><br>
						    </div><br>
					    <button type="reset" class="btn">Limpar</button>
					    <button type="button" class="btn btn-danger" onclick="location.href='index.php'">Cancelar</button>
					    <button type="submit" class="btn btn-primary">Enviar</button>
				    </fieldset>
			    </form>
			    <br><a href="index.php"> Voltar</a><br>
			</div>    
		</div>	    
	</div>

	<!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p class="pull-right"><a href="#">Voltar ao topo</a></p>
        <p>Material de estudo, contribua em: <a href="https://github.com/brunoeris/CRUD-PHP-SIMPLES" target="_blank">GitHub/CRUD-PHP-SIMPLES</a> // EMAIL: brunoeriss@gmail.com</a>.</p>
      </div>
    </footer>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>