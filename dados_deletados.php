<?php 
	
	$id = $_GET['id'];

	include_once "conexaobd.php";

	$sql = "DELETE FROM customer WHERE id = $id ";
	$result = mysql_query($sql);

	mysql_close();

	header("location: tabela_contatos.php");

 ?>