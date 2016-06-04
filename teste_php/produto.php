<?php

	$tb = 'joadef1_controle';
		
	require_once("conexao.php");
	$banco = mysql_select_db($tb, $conexao);

	if (!$banco) {

		$mensagem_erro = 'Falha na conexão com Banco de Dados: '. mysql_error();
		
	}

	$sql = "SELECT * from Produto";

	$query = mysql_query($sql, $conexao);

	$num_linhas = mysql_num_rows($query);

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Teste PHP -Altran</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
	</head>
	<body>
		<div class="main">
			<?php include 'menu.php'; ?>
			<table class="table table-bordered">
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Preço</th>
					<th>Opção</th>
				</tr>
				<?php if ($num_linhas > 0){
					while($resultado = mysql_fetch_assoc($query)){ ?> 
				
						<tr>
							<td><?php echo $resultado['id']; ?></td>
							<td><?php echo $resultado['nome']; ?></td>
							<td><?php echo $resultado['descricao']; ?></td>
							<td>R$ <?php echo number_format($resultado['preco'],2,",","."); ?></td>
							<td>
								<a href="altera_produto.php?id=<?php echo $resultado['id']; ?>"><input type="button" class="btn btn-warning" value="Alterar"></a>
								<a href="exclui_produto.php?id=<?php echo $resultado['id']; ?>"><input type="button" class="btn btn-danger" value="Excluir"></a>
							</td>
	
						</tr>

					<?php } ?>

				<?php } else { ?>

					<tr>
						<td colspan="5"><center>Não existem resultados</center></td>
					</tr>

				<?php } ?>

			</table>	
 		</div>
 		<script src="js/jquery-2.2.1.min.js"></script>
 		<script src="bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>

