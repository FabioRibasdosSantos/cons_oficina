<?php 

include_once("conecta_mysql.inc");

$nome 		 = $_POST['nome'];
$cpf	  	 = $_POST['cpf'];
$endereco	 = $_POST['endereco'];
$email  	 = $_POST['email'];
$fabricante  = $_POST['fabricante'];
$modelo		 = $_POST['modelo'];
$ano 		 = $_POST['ano'];
$cor 		 = $_POST['cor'];
$placa		 = $_POST['placa'];
$observacoes = $_POST['observacoes'];
$erro 		 = 0;

if (empty($nome) || strstr($nome, ' ') == false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

if (empty($cpf) || !is_numeric($cpf) || strlen($cpf) != 11) {
	echo "Favor digitar o seu CPF corretamente.<br>";
	$erro = 1;
}

if (empty($endereco)) {
	echo "Favor digitar o seu endereço corretamente.<br>";
	$erro = 1;
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
	echo "Favor digitar o seu e-mail corretamente.<br>";
	$erro = 1;
}

if (empty($fabricante)) {
	echo "Favor digitar o fabricante do veículo corretamente.<br>";
	$erro = 1;
}

if (empty($modelo)) {
	echo "Favor digitar o modelo do veículo corretamente.<br>";
	$erro = 1;
}

if (empty($ano) || !is_numeric($ano) || strlen($ano) != 4) {
	echo "Favor digitar o ano do veículo corretamente.<br>";
	$erro = 1;
}

if (empty($cor)) {
	echo "Favor digitar a cor do veículo corretamente.<br>";
	$erro = 1;
}

if (empty($placa)) {
	echo "Favor digitar a placa do veículo corretamente.<br>";
	$erro = 1;
}

if (empty($observacoes)) {
	echo "Favor digitar as observações corretamente.<br>";
	$erro = 1;
}

if ($erro == 0) {
	$sql = "INSERT INTO cad_oficina VALUES ('$nome','$cpf','$endereco','$email','$fabricante','$modelo','$ano','$cor','$placa','$observacoes')";

	if ($conexao->query($sql) === true) {
		echo "Usuário incluído com sucesso!";
	} else {
		echo "Erro ao incluir usuário: " . $conexao->error;
	}
}

$conexao->close();
?>
