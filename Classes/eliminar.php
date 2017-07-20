<?php

	require_once('./db.class.php');

	$db = new db();
	$conn = $db->conecta_mysql();

	if(!empty($_POST['id'])){
		$r = $conn->query("delete from clientes where id = '{$_POST['id']}';");
		if($r){
			echo "Removido cliente '{$_POST['id']}'";
		}
		else{
			echo "tente de novo";
		}
	}
	
?>	

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eliminar</title>
</head>
<body>

	<br>
	<a href="index.php">Voltar</a>
	<br>

	<h1>Eliminar um Cliente</h1>

	<p>Introduza o código do clinte a eliminar:</p>

	<form action="#" method="post">	
		<div>
			<label for="id">Código de cliente:</label> 
			<input type="number" name="id" required>
		</div>

		<div>
			<input type="submit" value="Eliminar" name="">
		</div>
	</form>
</body>
</html>