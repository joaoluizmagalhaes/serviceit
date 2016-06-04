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
	if(isset($_GET['id'])){

		$id = $_GET['id'];

		$sql = "DELETE FROM Produto WHERE id = $id";

		$query = mysql_query($sql, $conexao) or die (mysql_error());

		echo "<script language='JavaScript'> window.alert('Produto Excluido com Sucesso!'); </script>";

	}

?>
</body>
</html>
<script language= "JavaScript">
	location.href="produto.php"
</script>