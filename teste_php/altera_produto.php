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
		<title>Teste PHP -Altran</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
	</head>
	<body>
		<div class="main">
			<?php include 'menu.php'; ?>
			<?php if($num_linhas > 0) { ?>
			<form method="POST" action="gravar_alteracao_produto.php">
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="form-group">
					<label>Nome produto: </label><input type="text" name="nome" id="nome" data-validation="required" class="form-control" data-validation-help='Ex: Tv 40"' data-validation-error-msg="Você não digitou o nome!" value="<?php echo $resultado['nome'];?>"></input>
				</div>
				<div class="form-group">
					<label>Descrição produto: </label><input type="text" name="descricao" id="descricao" data-validation="required" class="form-control" data-validation-help="Ex: Tv 40 polegadas LG" data-validation-error-msg="Você não digitou a descrição!" value="<?php echo $resultado['descricao'];?>"></input>
				</div>
				<div class="form-group">
					<label>Preço do produto: </label><input type="text" name="preco" id="preco" data-validation="required" class="form-control" data-validation-help="Ex: 2000,00" data-validation-error-msg="Você não digitou o preço!" value="<?php echo number_format($resultado['preco'],2,",",".");?>"></input>
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
