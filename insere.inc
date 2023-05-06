<?php 

include_once '../conecta_mysql.inc';

$nome 			 	= $_POST['nome'];
$cpf	  	 	 	= $_POST['cpf'];
$endereco	  		= $_POST['endereco'];
$email  		 	= $_POST['email'];
$fabricante 		= $_POST['fabricante'];
$modelo				= $_POST['modelo']
$ano 				= $_POST['ano']
$cor 				= $_POST['cor']	
$placa				= $_POST['placa']
$observacoes	  	= $_POST['observacoes'];

$sql = "INSERT INTO cad_aluno VALUES";
$sql = "('$nome','$cpf', '$curso', '$endereco', '$email', '$fabricante', '$modelo', '$ano', '$cor', '$placa', '$observacoes')";

if ($conexao->query($sql) === TRUE) {
	echo  "Usuário incluído com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

?>