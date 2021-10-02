<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro</title>
	<!--Bootstrap via cdn
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
-->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>

<div class="container" id="tamanhoContainer">
	<h4>Formulário de Cadastro</h4>
	<form action="inserir_produto.php" method="post">
  		<div class="form-group">
    		<label>Nro do Produto</label>
    		<input type="number" name="nroproduto" class="form-control" placeholder="Insira o numero do produto" autocomplete="off">
    	</div>
    	<div class="form-group">
    		<label>Nome do Produto</label>
    		<input type="text" name="nomeproduto" class="form-control" placeholder="Insira o nome do produto" autocomplete="off">
    	</div>
    	<div class="form-group">
    		<label>Categoria</label>
    		<select class="form-control" name="categoria">

    			<?php 
    			include 'conexao.php';
    			$sql = "SELECT * FROM categoria order by categoria ASC";
    			$buscar = mysqli_query($conexao,$sql);

    			while ($array = mysqli_fetch_array($buscar)){
    				$id_categoria = $array['id_categoria'];
    				$categoria = $array['categoria'];

    			?>	

    			<option><?php echo $categoria ?></option>

    			<?php } ?>
    		</select>
    	</div>
    	<div class="form-group">
    		<label>Quantidade</label>
    		<input type="number" name="quantidade" class="form-control" placeholder="Insira a quantidade produto" autocomplete="off">
    	</div>
    	<div class="form-group">
    		<label>Fornecedor</label>
    		<select class="form-control" name="fornecedor">

    			<?php 
    			include 'conexao.php';
    			$sql2 = "SELECT * FROM fornecedor";
    			$buscar2 = mysqli_query($conexao,$sql2);

    			while ($array2 = mysqli_fetch_array($buscar2)){
    				$id_fornecedor = $array2['id_forn'];
    				$nome_fornecedor = $array2['nome_forn'];

    			?>
    			<option><?php echo $nome_fornecedor ?></option>

    			<?php } ?>
    		</select>
    	</div>
    	<div style="text-align: right; margin-top: 10px;">
    	<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    	<button type="submit" id="botao" class="btn btn-sm">Cadastrar</button>
    	</div>
	</form>
</div>



<script type="text/javascript" src="js/bootstrap.js"></script>

<!--Scripts Javascript via cdn 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
-->
</body>
</html>
