<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listagem de Produtos</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
	<div class="container" style="margin-top:40px;width:500px">
	<h3>Lista de Produtos</h3>
	<br>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome Categoria</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
    
    	<?php
    		include 'conexao.php';
    		$sql = "SELECT * FROM `categoria`";
    		$busca = mysqli_query($conexao,$sql);

    		while ($array = mysqli_fetch_array($busca)){
    			$id_categoria = $array['id_categoria'];
    			$categoria = $array['categoria'];
    	?>
    <tr>
		<td><?php echo $categoria ?></td>
		<td>
			<a class="btn btn-warning btn-sm" style="color: #000;" href="editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><img src="icons/pencil-square.svg" width="15" height="15">
Editar </a>
			<a class="btn btn-danger btn-sm" style="color: #000;" href="deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><img src="icons/trash.svg" width="15" height="15">Excluir </a>
		</td>
	</tr>
    	<?php }?>
    
</table>

	<div style="text-align: right;">
		<a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
	</div>

	</div>



<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html>