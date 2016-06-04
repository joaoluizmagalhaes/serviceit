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
			<form method="POST" action="grava_cliente.php">
				<div class="form-group">
					<label>Nome cliente: </label><input type="text" name="nome" id="nome" data-validation="required" class="form-control" data-validation-help="Ex: Jose da Silva" data-validation-error-msg="Você não digitou o nome!"></input>
				</div>
				<div class="form-group">
					<label>Telefone cliente: </label><input type="text" name="telefone" id="telefone" data-validation="required" class="form-control" data-validation-help="Ex: xx xxxx-xxxx" data-validation-error-msg="Você não digitou o telefone!"></input>
				</div>
				<div class="form-group">
					<label>E-mail cliente: </label><input type="text" name="email" id="email" data-validation="required email" class="form-control" data-validation-help="Ex: email@email.com.br" data-validation-error-msg="Você não digitou o e-mail!"></input>
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