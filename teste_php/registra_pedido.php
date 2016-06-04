<?php

	$tb = 'joadef1_controle';
		
	require_once("conexao.php");
	$banco = mysql_select_db($tb, $conexao);

	if (!$banco) {

		$mensagem_erro = 'Falha na conexão com Banco de Dados: '. mysql_error();
		
	}

	$sql_cliente = "SELECT * from Cliente";

	$query_cliente = mysql_query($sql_cliente, $conexao);

	$num_linhas_cliente = mysql_num_rows($query_cliente);


	$sql_produto = "SELECT * from Produto";

	$query_produto = mysql_query($sql_produto, $conexao);

	$num_linhas_produto = mysql_num_rows($query_produto);

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
			<form method="POST" action="grava_pedido.php">
				<div class="form-group">
					<label>Cliente: </label> 
					<select class="form-control" name="id_cliente" id="id_cliente">
				
						<?php if ($num_linhas_cliente > 0){
				
							while($resultado_cliente = mysql_fetch_assoc($query_cliente)){ ?> 
				
								<option value="<?php echo $resultado_cliente['id']; ?>"><?php echo $resultado_cliente['nome'];?></option>	
						
							<?php } ?>

						<?php } else { ?>

							<option>Não existem clientes cadastrados!</option>

						<?php } ?>

					</select>
				</div>
				<div class="form-group">
					<label>Produto: </label> 
					<select class="form-control" name="id_produto" id="id_produto">

						<?php if ($num_linhas_produto > 0){

							while($resultado_produto = mysql_fetch_assoc($query_produto)){ ?> 

								<option value="<?php echo $resultado_produto['id']; ?>"><?php echo $resultado_produto['nome'];?></option>

							<?php } ?>

						<?php } else { ?>

							<option>Não existem produtos cadastrados!</option>
				
						<?php } ?>
	
					</select>
				</div>
				<button class="btn btn-default" type="submit">Enviar</button>
			</form>
		</div>
		<script src="js/jquery-2.2.1.min.js"></script>
 		<script src="bootstrap/dist/js/bootstrap.min.js"></script>

 		<script src="jQuery-Form-Validator-master/form-validator/jquery.form-validator.min.js"></script>		
		<script>
		  $.validate({
		    validateOnBlur : false, // disable validation when input looses focus
		    errorMessagePosition : 'top', // Instead of 'element' which is default
		    scrollToTopOnError : false, // Set this property to true if you have a long form
		    lang : 'pt'
		  });

		</script>

	</body>
</html>