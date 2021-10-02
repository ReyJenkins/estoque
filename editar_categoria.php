<?php

include 'conexao.php';

echo $id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulário de Edição</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>

<div class="container" id="tamanhoContainer">
	<h4>Formulário de Edição</h4>
	<form action="atualizar_categoria.php" method="post">
		<?php

			$sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
			$buscar = mysqli_query($conexao,$sql);
			while ($array = mysqli_fetch_array($buscar)){
				$id_categoria = $array['id_categoria'];
    			$categoria = $array['categoria'];
		?>
  		<div class="form-group">
    		<label>Nome Categoria</label>
    		<input type="text" name="categoria" class="form-control" value="<?php echo $categoria ?>">
    		<input type="text" name="id" class="form-control" value="<?php echo $id_categoria ?>" style="display:none;">
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