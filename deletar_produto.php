<?php

include 'conexao.php';

$id = $_GET['id'];

$sql = "DELETE FROM `estoque` WHERE id_estoque = $id";

$deletar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<div class="container" style="width: 400px;">
		<center>
			<h3>Deletado com Sucesso!</h3>
			<a href="listar_produtos.php" class="btn btn-sm btn-warning" style="color:#fff">Voltar</a>
		</center>
	</div>