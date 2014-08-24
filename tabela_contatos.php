<?php 

	include_once "conexaobd.php";

	$sql = "SELECT * FROM customer";
	$result = mysql_query($sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Tabela Contatos</title>
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
						<li><a href="add_customer.php">ADD CONTATO</a></li>
						<li><a href="tabela_contatos.php">TABELA CONTATOS</a></li>
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
		<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12"> 
				
				<table class="table table-hover table-bordered">
					<caption><h2>Lista de Contatos</h2></caption>
					<thead>
						<tr>
							<td>#ID</td>
							<td>Nome</td>
							<td>Sobreome</td>
							<td>Endereço</td>
							<td>Email</td>
							<td></td>
							<td></td>
						</tr>
					</thead>
					<?php 
						while($row = mysql_fetch_array($result)){
							echo "<tbody>";
							echo "<tr>";
							echo	"<td>".$row['id']."</td>";
							echo	"<td>".$row['primeiro_nome']."</td>";
							echo	"<td>".$row['segundo_nome']."</td>";
							echo	"<td>".$row['endereco']."</td>";
							echo	"<td>".$row['email']."</td>";
							echo	"<td><a href=\"editar_contato.php?id=".$row['id']."\">Editar</a></td>";
							echo	"<td><a href=\"deletar_contato.php?id=".$row['id']."#modaldel\">Deletar</a></td>";
							echo "</tr>";
							echo "</tbody>";
						}
					?>
				</table>

				<br><a href="index.php"> Voltar</a><br>

			</div>    
		</div>	
		</div>		 
	</div>

	<!-- Footer
    ================================================== -->
    <footer class="footer">
      <div class="container">
        <p>Material de estudo, contribua em: <a href="https://github.com/brunoeris/CRUD-PHP-SIMPLES" target="_blank">GitHub/CRUD-PHP-SIMPLES</a> // EMAIL: brunoeriss@gmail.com.</p>
      	<br><p class="pull-right"><a href="#">Voltar ao topo</a></p>
      </div>
    </footer>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

<?php mysql_close(); ?>