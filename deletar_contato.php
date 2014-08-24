
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Deletar Dados?</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="css/jquery.remodal.css">
	<link rel="stylesheet" href="">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>

<!-- ####### REMODAL ###### -->

	<div class="remodal-bg">
		<div class="remodal" data-remodal-id="modaldel">

			<?php 
				$id = $_GET['id'];

				include_once "conexaobd.php";

				$sql = "SELECT * FROM customer WHERE id = $id";
				$result = mysql_query($sql);

				$row = mysql_fetch_array($result);

			?>

		    <?php 
				echo "<h3>Você deseja deletar esses dados?</h3>";

				echo "id : <b>".$row['id']."<b><br>";
				echo "Nome : <b>".$row['primeiro_nome']."<b><br>";
				echo "Sobrenome : <b>".$row['segundo_nome']."<b><br>";
				echo "Endereço : <b>".$row['endereco']."<b><br>";
				echo "Email : <b>".$row['email']."<b><br><br>";

				echo "<a href=\"dados_deletados.php?id=".$row['id']."\" class=\"btn btn-large btn-success\"> Sim</a>&nbsp;&nbsp;";
				echo "<a href=\"tabela_contatos.php\" class=\"btn btn-large btn-warning\"> Não</a>";

				mysql_close();

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