<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inserir Contato</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
</body>
</html>

<?php 
	
$firstname	= $_POST['primeironome'];
$lastname	= $_POST['sobrenome'];
$address	= $_POST['endereco'];
$email   	= $_POST['email'];

echo $firstname."<br>";
echo $lastname."<br>";
echo $address."<br>";
echo $email."<br>";

echo "<br>Dados Adicionados!<br>";

//Conexão com o BD
include_once "conexaobd.php";

//Operação de Inserção
$sql = "INSERT INTO customer (primeiro_nome, segundo_nome, endereco, email)
		VALUES
		('$firstname','$lastname','$address','$email')";

$query = mysql_query($sql);

//Fecha conexão!
mysql_close();

echo "<a href=\"index.php\"> Voltar</a><br>";

?>