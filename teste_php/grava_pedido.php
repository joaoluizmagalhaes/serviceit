<!doctype html>
<html lang="pt">
	<head>
		<meta charset="UTF-8">
	</head>
	<body>
	<?php
		
		
		$tb = 'joadef1_controle';
		
		require_once("conexao.php");
		$banco = mysql_select_db($tb, $conexao);

		if (!$banco) {

			$mensagem_erro = 'Falha na conexão com Banco de Dados: '. mysql_error();
			
		}

		if(isset($_POST['id_cliente'])){

			$id_cliente = $_POST['id_cliente'];
			$id_produto = $_POST['id_produto'];
			
			$sql = "INSERT INTO Pedido ( id_cliente,
										 id_produto
										) VALUES (
										 '$id_cliente',
										 '$id_produto')";

			mysql_query($sql,$conexao) or die(mysql_error());

			echo "<script language='JavaScript'> window.alert('Pedido registrado com sucesso!'); </script>";

		}
	?>

	</body>
</html>

<script language= "JavaScript">
	location.href="pedido.php"
</script>