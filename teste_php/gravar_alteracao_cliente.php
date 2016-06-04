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

		if(isset($_POST['nome'])){

			$id = $_POST['id'];
			$nome = $_POST['nome'];
			$telefone = $_POST['telefone'];
			$email = $_POST['email'];
			

			$sql = "UPDATE Cliente SET nome = '$nome',
									   telefone = '$telefone',
									   email = '$email'
								   WHERE id = '$id'";
			
			mysql_query($sql,$conexao) or die(mysql_error());

			echo "<script language='JavaScript'> window.alert('Cliente Alterado com Sucesso!'); </script>";

		}
?>
</body>
</html>

<script language= "JavaScript">
location.href="cliente.php"
</script>