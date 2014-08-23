<?php 

	$id = $_POST['id'];
	$firstname = $_POST['primeironome'];
	$lastname = $_POST['sobrenome'];
	$address = $_POST['endereco'];
	$email = $_POST['email'];

	include_once "conexaobd.php";

	$sql = "UPDATE customer SET primeiro_nome = '$firstname', segundo_nome = '$lastname', endereco = '$address', email = '$email'
			WHERE id = $id";

	$result = mysql_query($sql);

	mysql_close();

	header("location: tabela_contatos.php");
 ?>
