<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro de Fornecedor</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
	<div class="container" style="margin-top: 40px;width:500px">
		<h4>Cadastro de Fornecedor</h4>
		<form action="inserir_fornecedor.php" method="post">
			<label>Fornecedor</label>
			<div class="form-group">
				<input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome do Fornecedor" autocomplete="off">			
			</div>
			<div style="text-align: right; margin-top: 10px;">
			<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a> 
			<button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
			</div>
		</form>
	</div>

	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>