<?php

	$tb = 'joadef1_controle';
		
	require_once("conexao.php");
	$banco = mysql_select_db($tb, $conexao);

	if (!$banco) {

		$mensagem_erro = 'Falha na conexão com Banco de Dados: '. mysql_error();
		
	}

	
	if(isset($_GET['id'])){

		$id = $_GET['id'];

		$sql = "SELECT * from Produto where id = $id";

		$query = mysql_query($sql, $conexao);

		$num_linhas = mysql_num_rows($query);

		if($num_linhas > 0) {
			$resultado = mysql_fetch_assoc($query);
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Teste PHP -Service IT</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
	</head>
	<body>
		<div class="main">
			<?php include 'menu.php'; ?>
			<?php if($num_linhas > 0) { ?>
			<form method="POST" action="gravar_alteracao_cliente.php">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="form-group">
					<label>Nome cliente: </label><input type="text" name="nome" id="nome" data-validation="required" class="form-control" data-validation-help="Ex: Jose da Silva" data-validation-error-msg="Você não digitou o nome!" value="<?php echo $resultado['nome'];?>"></input>
				</div>
				<div class="form-group">
					<label>Telefone cliente: </label><input type="text" name="telefone" id="telefone" data-validation="required" class="form-control" data-validation-help="Ex: xx xxxx-xxxx" data-validation-error-msg="Você não digitou o telefone!" value="<?php echo $resultado['telefone'];?>"></input>
				</div>
				<div class="form-group">
					<label>E-mail cliente: </label><input type="text" name="email" id="email" data-validation="required email" class="form-control" data-validation-help="Ex: email@email.com.br" data-validation-error-msg="Você não digitou o e-mail!" value="<?php echo $resultado['email'];?>"></input>
				</div>
				<button class="btn btn-default" type="submit">Enviar</button>
			</form>	
			<?php } ?>
			</div>
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
