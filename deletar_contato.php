<?php 
	$id = $_GET['id'];

	include_once "conexaobd.php";

	$sql = "SELECT * FROM customer WHERE id = $id";
	$result = mysql_query($sql);

	$row = mysql_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Deletar Dados?</title>
	<link rel="stylesheet" href="">
</head>

<body>
	<?php 
	echo "<h3>Você deseja deletar esses dados?</h3>";

	echo "id : <b>".$row['id']."<b><br>";
	echo "Nome : <b>".$row['primeiro_nome']."<b><br>";
	echo "Sobrenome : <b>".$row['segundo_nome']."<b><br>";
	echo "Endereço : <b>".$row['endereco']."<b><br>";
	echo "Email : <b>".$row['email']."<b><br>";

	echo "<a href=\"dados_deletados.php?id=".$row['id']."\"> Sim</a>";
	echo "<a href=\"tabela_contatos.php\"> Não</a>";

	mysql_close();

	 ?>
</body>

</html>