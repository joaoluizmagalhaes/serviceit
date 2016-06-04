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
			$descricao = $_POST['descricao'];
			$preco = $_POST['preco'];
			

			$sql = "UPDATE Produto SET nome = '$nome',
									   descricao = '$descricao',
									   preco = '$preco'
								   WHERE id = '$id'";
			
			mysql_query($sql,$conexao) or die(mysql_error());

			echo "<script language='JavaScript'> window.alert('Produto Alterado com Sucesso!'); </script>";

		}
?>
</body>
</html>

<script language= "JavaScript">
location.href="produto.php"
</script>