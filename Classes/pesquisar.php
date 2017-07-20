<?php

	require_once('./db.class.php');

	$db = new db();
	$conn = $db->conecta_mysql();

	if(!empty($_POST['nome'])){
		$res = $conn->query("select * from clientes where nome like '%{$_POST['nome']}%';");
	}
	
?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pesquisar</title>
</head>
<body>

	<br>
	<a href="index.php">Voltar</a>
	<br>

	<h1>Escreva o nome a procurar</h1>

	<form action="#" method="post">	
		<div>
			<label for="nome">Nome a procurar:</label> 
			<input type="text" name="nome" required>
		</div>

		<div>
			<input type="submit" value="Pesquisar" name="">
		</div>
	</form>

	<br>

	<?php
		if(!empty($_POST['nome'])){
	?>
		<div>
			<table border="1">
				<thead>
					<tr>
						<th> Código </th>
						<th> Nome </th>
						<th> Morada </th>
					</tr>
				</thead>
				<tbody>
					<?php 

						for ($i = 0; $i < $res->num_rows; $i++) {
						    $res->data_seek($i);
						    $row = $res->fetch_assoc();
						    ?>
						    <tr>
						    	<td><?php echo $row['id']; ?></td>
						    	<td><?php echo $row['nome']; ?></td>
						    	<td><?php echo $row['morada']; ?></td>
						    </tr> 
						    <?php } ?>
				</tbody>
			</table>
		</div>
	<?php } ?>
</body>
</html>