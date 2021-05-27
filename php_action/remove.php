<?php 
require_once 'db_connect.php';

if($_POST){
	$id = $_POST['id'];

	$sql = "UPDATE produtoss SET Ativo = 0 WHERE id = {$id}";
	if($connect->query($sql) === TRUE){
		echo "<p>PRODUTO removido com sucesso!</p>";
		echo "<a href='../index.php'><button type='button'>Voltar</button></a>";
	}else{
		echo "Erro ao excluir o registro: ".$connect->error;
	}

	$connect->close();
}
?>