<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Inserir Contato</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="css/jquery.remodal.css">
	<link rel="stylesheet" href="">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>

<!-- ####### REMODAL ###### -->

	<div class="remodal-bg">
		<div class="remodal" data-remodal-id="modaladd">
		     <?php 
	
				$firstname	= $_POST['primeironome'];
				$lastname	= $_POST['sobrenome'];
				$address	= $_POST['endereco'];
				$email   	= $_POST['email'];

				echo "<h2>Cadastro Efetuado!</h2>";

				echo $firstname."<br>";
				echo $lastname."<br>";
				echo $address."<br>";
				echo $email."<br>";

				//Conexão com o BD
				include_once "conexaobd.php";

				//Operação de Inserção
				$sql = "INSERT INTO customer (primeiro_nome, segundo_nome, endereco, email)
						VALUES
						('$firstname','$lastname','$address','$email')";

				$query = mysql_query($sql);

				//Fecha conexão!
				mysql_close();

				echo "<br><br><a href=\"index.php\" class=\"btn btn-large btn-success\"> Voltar</a><br>";

				?>
		    <br>
		</div>
	</div>
	
	<script type="text/javascript">
    $(document).on('open', '.remodal', function () {
        console.log('open');
    });

    $(document).on('opened', '.remodal', function () {
        console.log('opened');
    });

    $(document).on('close', '.remodal', function () {
        console.log('close');
    });

    $(document).on('closed', '.remodal', function () {
        console.log('closed');
    });

    $(document).on('confirm', '.remodal', function () {
        console.log('confirm');
    });

    $(document).on('cancel', '.remodal', function () {
        console.log('cancel');
    });

    // You can open or close it like this:
    // var inst = $.remodal.lookup[$('[data-remodal-id=modal]').data('remodal')];
    // inst.open();
    // inst.close();

    // Or init in this way:
    var inst = $('[data-remodal-id=modal2]').remodal();
    // inst.open();
</script>

<script src="js/jquery.remodal.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>

