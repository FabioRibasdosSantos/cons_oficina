<!DOCTYPE html>
<html>
<head>
	<title>Verifica</title>
	<meta charset="utf-8">
</head>
<body>
<?php 

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
$erro 			 	= 0;

//Verifica se o campo nome não está em branco
if (empty($nome) OR strstr($nome, ' ')==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

//Verifica se o campo cidade está em branco
if (empty($cpf)) {
	echo "Favor digitar seu cpf.<br>";
	$erro = 1;
}

//Verifica se o campo curso está em branco
if (empty($curso)) {
	echo "Favor digitar o seu estado corretamente.<br>";
	$erro = 1;
}

//Verifica se o campo email está preenchido corretamente
if (strlen($email)< 8 || strstr($email, '@')==false) {
	echo "Favor digitar o seu email corretamente.<br>";
	$erro = 1;
}

//Verifica se o campo comentarios está vazio
if (empty($dados_adicionais)) {
	echo "Favor entre com algum comentário.<br>";
	$erro = 1;
}

//Verifica se não houve erro - neste caso chama a include para inserir os dados
if ($erro == 0) {
	echo "Todos os dados foram digitados corretamente.<br>";
	include 'insere.inc';
}

 ?>
</body>
</html>