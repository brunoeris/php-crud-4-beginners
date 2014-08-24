<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Crud Simples PHP</title>
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
					<form action="" class="navbar-form pull-right">
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


	<div class="container">
		<div class="row">
			<aside class="span3 bs-docs-sidebar">
				<ul class="nav nav-list bs-docs-sidenav">
					<li><a href="tabela_contatos.php"><i class="icon-chevron-right"></i> Tabela de Contatos</a></li>
					<li><a href="add_customer.php"><i class="icon-chevron-right"></i> Adicione um novo contato!</a></li>
				</ul>
				
			</aside>

			<div class="span9">
				<img src="img/email.jpg" class="img-polaroid img-large">
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