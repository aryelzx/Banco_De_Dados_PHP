<?php 
require_once 'db_connect.php';

if($_POST){
	$nome_produto = $_POST['nome_produto'];
	$data_validade= $_POST['data_validade'];
	$peso = $_POST['peso'];
	$preço = $_POST['preço'];

	$id = $_POST['id'];

	$sql = "UPDATE produtoss SET nome_produto = '$nome_produto', data_validade = '$data_validade', peso = '$peso', preço = '$preço', Ativo = 1 WHERE id = '$id'";

	if($connect -> query($sql) === TRUE){

		echo "<p> Atualização realizada com sucesso!</p>";
		echo "<a href='../edit.php?id=".$id."'><button type='button'>Editar</button>";
		echo "<a href='../index.php'><button type='button'>Voltar</button>";
	}
	else{
		echo "Erro ao atualizar os dados: ". $connect->error;
	}
	$connect->close();
}
?>