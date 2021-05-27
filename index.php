<?php require_once 'php_action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		.tabelaProdutoss{
			width: 50%;
			margin: auto;
		}
		table{
			width:100%;
			margin-top: 20px;
		}

	</style>
</head>
<body>

	<div class="tabelaProdutoss">
		<a href="create.php"><button type="button">Adicionar Produto </button></a>
		<table border="1" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>Nome do produto</th>
					<th>data do produto / validade </th>
					<th>peso do produto</th>
					<th>preço</th>
				</tr>
			</thead>

			<tbody>
				<?php
					$sql = "SELECT * FROM produtoss WHERE ativo = 1";
					$result = $connect -> query($sql);

					if($result -> num_rows > 0){
						while($row = $result -> fetch_assoc()){
							echo "<tr>
								<td>".$row["nome_produto"]."</td>
								<td>".$row["data_validade"]."</td>
								<td>".$row["peso"]."</td>
								<td>".$row["preço"]."</td>
								<td>
									<a href='edit.php?id=".$row['id']."'><button type='button'>Editar</button></a>
									<a href='remove.php?id=".$row['id']."'><button type='button'>Excluir</button></a>
								</tr>";
						}
					}else{
						echo "<tr><td colspan='5'><center>Sem Dados a apresentar</center></td></tr>";
					}
				?>
			</tbody>	
		</table>
	</div>

</body>
</html>