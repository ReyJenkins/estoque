<?php

include 'conexao.php';

echo $id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Cadastro</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>

<div class="container" id="tamanhoContainer">
	<h4>Formulário de Cadastro</h4>
	<form action="atualizar_produto.php" method="post">
		<?php

			$sql = "SELECT * FROM `estoque` WHERE id_estoque = $id";
			$buscar = mysqli_query($conexao,$sql);
			while ($array = mysqli_fetch_array($buscar)){
				$id_estoque = $array['id_estoque'];
    			$nroproduto = $array['nroproduto'];
    			$nomeproduto = $array['nomeproduto'];
    			$categoria = $array['categoria'];
    			$quantidade = $array['quantidade'];
    			$fornecedor = $array['fornecedor'];
		?>
  		<div class="form-group">
    		<label>Nro do Produto</label>
    		<input type="number" name="nroproduto" class="form-control" value="<?php echo $nroproduto ?>"disabled>
    		<input type="number" name="id" class="form-control" value="<?php echo $id ?>" style="display: none;">
    	</div>
    	<div class="form-group">
    		<label>Nome do Produto</label>
    		<input type="text" name="nomeproduto" class="form-control" value="<?php echo $nomeproduto ?>">
    	</div>
    	<div class="form-group">
    		<label>Categoria</label>
    		<select class="form-control" name="categoria">
    			<option>Periféricos</option>
    			<option>Hardware</option>
    			<option>Software</option>
    			<option>Celulares</option>
    		</select>
    	</div>
    	<div class="form-group">
    		<label>Quantidade</label>
    		<input type="number" name="quantidade" class="form-control" value="<?php echo $quantidade ?>">
    	</div>
    	<div class="form-group">
    		<label>Fornecedor</label>
    		<select class="form-control" name="fornecedor">
    			<option>Fornecedor A</option>
    			<option>Fornecedor B</option>
    			<option>Fornecedor C</option>
    			<option>Fornecedor D</option>
    		</select>
    	</div>
    	<div style="text-align: right; margin-top: 10px;">
    	<button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
    	</div>
    <?php } ?>
	</form>
</div>



<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>
