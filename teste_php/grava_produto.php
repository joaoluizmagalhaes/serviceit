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

			$nome = $_POST['nome'];
			$descricao = $_POST['descricao'];
			$preco = $_POST['preco'];


			$sql = "INSERT INTO Produto ( nome,
										  descricao,
										  preco
										) VALUES (
										  '$nome',
										  '$descricao',
										  '$preco')";

			mysql_query($sql,$conexao) or die(mysql_error());

			echo "<script language='JavaScript'> window.alert('Produto registrado com sucesso!'); </script>";

		}
	?>

	</body>
</html>

<script language= "JavaScript">
	location.href="produto.php"
</script>