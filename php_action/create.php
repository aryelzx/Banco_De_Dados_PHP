<?php 
	require_once 'db_connect.php';

	if($_POST){
		$nome_produto = $_POST['fname'];
		$data_validade = $_POST['lname'];
		$peso = $_POST['peso'];
		$preço = $_POST['preço'];

		$sql = "INSERT INTO produtoss (nome_produto,data_validade,peso,preço,Ativo) VALUES ('$nome_produto', '$data_validade','$peso','$preço',1)";

		if($connect -> query($sql) === TRUE){
			echo "<p> Novo produto cadastrado com sucesso!</p>";
			echo "<a href='../create.php'><button type='button'>Voltar</button></a>";
			echo "<a href='../index.php'><button type='button'>Home</button></a>";
		}else{
			echo "Erro ".$sql. ' '.$connect -> connect_error;
		}
		$connect -> close();
 	}



?>