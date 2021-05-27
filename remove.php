<?php 
require_once 'php_action/db_connect.php';

if($_GET['id']){
	$id = $_GET['id'];

	$sql = "SELECT * FROM produtoss WHERE id = {$id}";
	$result = $connect->query($sql);
	$data = $result->fetch_assoc();

	$connect->close();

?>

<html>
<head>
	<title>Remover Produtos</title>
</head>
<body>
	<h3> Você realmente deseja remover o produto?!</h3>
	<form action="php_action/remove.php" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
		<button type="submit">Confirmar</button>
		<a href="index.php"><button type="button">Voltar</button></a>
	</form>
</body>
</html>

<?php

}

?>