<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Produto</title>
</head>

	<style type="text/css">
		fieldset{
			margin:auto;
			margin-top: 100px;
			width:50%;
		}

		table tr th{
			padding-top: 20px;
		}

	</style>
<body bgcolor="pink">
	<fieldset>
		<legend>Adicionar Produto</legend>
		<form action="php_action/create.php" method="post">
			<table cellspacing="0" cellpadding="0">
				<tr>
					<th>Nome do Produto</th>
					<td><input type="text" name="fname" placeholder="produto"></td>
				</tr>
				<tr>
					<th>validade do produto</th>
					<td><input type="text" name="lname" placeholder="validade"></td>
				</tr>
				<tr>
					<th>peso do produto</th>
					<td><input type="text" name="peso" placeholder="peso"></td>
				</tr>
				<tr>
					<th>preço do produto</th>
					<td><input type="text" name="preço" placeholder="preço"></td>
				</tr>
				<tr>
					<td><button type="submit">Salvar Dados</button></td>
					<td><a href="index.php"><button type="button">Voltar</button></a></td>
				</tr>
			</table>

		</form>

	</fieldset>

</body>
</html>