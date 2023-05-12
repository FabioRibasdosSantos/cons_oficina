<?php

// create a mysqli connection
$conexao = mysqli_connect('localhost', 'root', '', 'concessionaria');

// verify the connection
if (mysqli_connect_errno()) {
    die("Falha ao realizar a conexão: " . mysqli_connect_error);
} 

$nome			= $_POST['nome'];
$cpf 			= $_POST['cpf'];
$endereco 		= $_POST['endereco'];
$email 			= $_POST['email'];
$fabricante 	= $_POST['fabricante'];
$modelo 		= $_POST['modelo'];
$ano 			= $_POST['ano'];
$cor 			= $_POST['cor'];
$placa 			= $_POST['placa'];
$observacoes 	= $_POST['observacoes'];

$sql = "INSERT INTO cad_oficina (nome, cpf, endereco, email, fabricante, modelo, ano, cor, placa, observacoes) VALUES ('$nome', '$cpf', '$endereco', '$email', '$fabricante', '$modelo', '$ano', '$cor', '$placa', '$observacoes')";

if ($conexao->query($sql) === TRUE) {
	echo "Usuário incluído com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

?>
