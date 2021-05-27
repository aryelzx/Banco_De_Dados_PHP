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

	<style type="text/css">
			fieldset{
				width: 50%;
				margin: auto;
				margin-top:100px;
			}
			table tr th{
				margin-top: 20px;
			}
	</style>
	<title></title>
</head>
<body>

	<fieldset>
		<legend>Edição de Produtos</legend>

		<form action="php_action/update.php" method="post">
		<table cellspacing='0' cellpadding="0">
			<tr>
				<th>Nome do novo produto</th>
				<td><input type="text" name="nome_produto" placeholder="Nome do produto" value="<?php echo $data['nome_produto']?>"></td>
			</tr>

			<tr>
				<th>nome do novo produto</th>
				<td><input type="text" name="data_validade" placeholder="data do produto" value="<?php echo $data['data_validade']?>"></td>
			</tr>

			<tr>
				<th>peso do novo produto</th>
				<td><input type="text" name="peso" placeholder="peso do novo produto" value="<?php echo $data['peso']?>"></td>
			</tr>

			<tr>
				<th>preço do novo produto</th>
				<td><input type="text" name="preço" placeholder="preço new produto" value="<?php echo $data['preço']?>"></td>
			</tr>

			<tr>
				<input type="hidden" name="id" value="<?php echo $data['id'] ?>"/>
				<td><button type="submit">Salvar Alterações</button></td>
				<td><a href="index.php"><button type="button">Voltar</button></a></td>
			</tr>
			</table>
			</form>
			</fieldset>


</body>
</html>

<?php
	
	}

?>


