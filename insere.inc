<?php 

include '../conecta_mysql.inc';

$nome 		 		= $_POST['nome'];
$cpf	  	 		= $_POST['cpf'];
$curso	  	 		= $_POST['curso'];
$horario  	 		= $_POST['horario'];
$email 			 	= $_POST['email'];
$dados_adicionais  	= $_POST['dados_adicionais'];

$sql = "INSERT INTO cad_aluno VALUES";
$sql .= "('$nome','$cpf', '$curso', '$horario', '$email' , '$dados_adicionais')";

if ($conexao->query($sql) === TRUE) {
	echo  "Usuário incluído com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conexao->error;
}

$conexao->close();

