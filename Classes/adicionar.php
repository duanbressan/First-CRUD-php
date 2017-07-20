<?php

	require_once('./db.class.php');

	$db = new db();
	$conn = $db->conecta_mysql();

	if(!empty($_POST['id'])){
		$r = $conn->query("insert into clientes (id,nome,morada) values ('{$_POST['id']}', '{$_POST['nome']}', '{$_POST['morada']}');");
		if($r){
			echo "Adcionado '{$_POST['nome']}'";
		}
		else{
			echo "Tente novamente";
		}
	}
	
?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adicionar</title>
</head>
<body>

	<br>
	<a href="index.php">Voltar</a>
	<br>

	<h1>Novo Cliente</h1>

	<form action="#" method="post">	
		<div>
			<label for="id">Código de Cliente:</label>
			<br>
			<input type="number" name="id" required>
		</div>

		<div>
			<label for="nome">Nome:</label>
			<br>
			<input type="text" name="nome" required>
		</div>

		<div>
			<label for="morada">Morada:</label>
			<br>
			<input type="text" name="morada" required>
		</div>

		<br>

		<div>
			<input type="submit" value="Adicionar" name="">
		</div>
	</form>
</body>
</html>
