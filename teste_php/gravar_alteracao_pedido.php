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

			$id = $_POST['id'];
			$id_cliente = $_POST['id_cliente'];
			$id_produto = $_POST['id_produto'];
			

			$sql = "UPDATE Pedido SET id_cliente = '$id_cliente',
									   id_produto = '$id_produto'

								   WHERE id = '$id'";
			
			mysql_query($sql,$conexao) or die(mysql_error());

			echo "<script language='JavaScript'> window.alert('Pedido Alterado com Sucesso!'); </script>";

		}
?>
</body>
</html>

<script language= "JavaScript">
location.href="pedido.php"
</script>