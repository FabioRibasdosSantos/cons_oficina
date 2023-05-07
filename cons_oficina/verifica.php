<?php 

include_once("conecta_mysql.inc");

$nome 			 	= $_POST['nome'];
$cpf	  	 	 	= $_POST['cpf'];
$endereco	  		= $_POST['endereco'];
$email  		 	= $_POST['email'];
$fabricante 		= $_POST['fabricante'];
$modelo				= $_POST['modelo'];
$ano 				= $_POST['ano'];
$cor 				= $_POST['cor'];
$placa				= $_POST['placa'];
$observacoes	  	= $_POST['observacoes'];
$erro 			 	= 0;

if (empty($nome) OR strstr($nome, ' ')==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

if (empty($cpf) ==false) {
	echo "Favor digitar o seu cpf corretamente.<br>";
	$erro = 1;
}

if (empty($endereco) ==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

if (empty($email) ==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

if (empty($fabricante) ==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

if (empty($modelo) ==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

if (empty($ano) ==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

if (empty($cor) ==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

if (empty($placa) ==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

if (empty($observacoes) ==false) {
	echo "Favor digitar o seu nome corretamente.<br>";
	$erro = 1;
}

 ?>