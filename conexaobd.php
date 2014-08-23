
<?php
// Conexão com o Banco de Dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "git_crud_php";
$conectaMysql = @mysql_connect($servidor,$usuario,$senha) or die ("Não foi possível conectar ao banco!");

//Seleciona o Banco de Dados
$conectabd = @mysql_select_db($banco,$conectaMysql) or die ("Não foi possível localizar o banco!");