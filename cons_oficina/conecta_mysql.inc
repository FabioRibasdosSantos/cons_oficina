<?php
		//cria a conexao mysqli_connect('localizacao BD', 'usuario de acesso', 'senha', 'banco de dados')
		$conexao = mysqli_connect('localhost', 'root', '', 'concessionaria');

		//ajusta o charset de comunicação entre a aplicação e o banco de dados
		mysqli_set_charset($conexao, 'utf8');

		//verifica a conexão
		if (mysqli_connect_errno()) {
    		$mensagem = "Não foi possível conectar ao banco de dados: " . mysqli_connect_error();
    		die($mensagem);
} 

?>