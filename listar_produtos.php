<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Listagem de Produtos</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>
	<div class="container">
	<h3>Lista de Produtos</h3>
	<br>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Nro Produto</th>
      <th scope="col">Nome Produto</th>
      <th scope="col">Categoria</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Fornecedor</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
    
    	<?php
    		include 'conexao.php';
    		$sql = "SELECT * FROM `estoque`";
    		$busca = mysqli_query($conexao,$sql);

    		while ($array = mysqli_fetch_array($busca)){
    			$id_estoque = $array['id_estoque'];
    			$nroproduto = $array['nroproduto'];
    			$nomeproduto = $array['nomeproduto'];
    			$categoria = $array['categoria'];
    			$quantidade = $array['quantidade'];
    			$fornecedor = $array['fornecedor'];
    	?>
    <tr>	
	    <td><?php echo $nroproduto ?></td>
		<td><?php echo $nomeproduto ?></td>
		<td><?php echo $categoria ?></td>
		<td><?php echo $quantidade ?></td>
		<td><?php echo $fornecedor ?></td>
		<td>
			<a class="btn btn-warning btn-sm" style="color: #000;" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><img src="icons/pencil-square.svg" width="15" height="15">
Editar </a>
			<a class="btn btn-danger btn-sm" style="color: #000;" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><img src="icons/trash.svg" width="15" height="15">Excluir </a>
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