<?php 

include_once("conecta_mysql.inc");

?>

<html>
<head>
    <title> Consulta Oficina </title>
</head>
<body>
    <table align="center" border="1" style='width:50%'>
    <tr>
        <th>Cliente</th>
        <th>CPF</th>
        <th>Endereço</th>
        <th>E-mail</th>
        <th>Fabricante</th>
        <th>Modelo</th>
        <th>Ano</th>
        <th>Cor</th>
        <th>Placa</th>
        <th>Observações</th>
    </tr>

<?php
$sql ="SELECT * FROM cons_oficina"

$resultado = mysqli_query($conexao,$sql) or die("Erro ao retornar dados");

while ($registro = mysqli_fetch_array($resultado))

{
$nome = $nome['nome'];
$cpf = $cpf['cpf'];
$endereco = $endereco['endereco'];
$email = $email['email'];
$fabricante = $fabricante['fabricante'];
$modelo	= $modelo['modelo'];
$ano = $ano['ano'];
$cor = $cor['cor'];
$placa = $placa['placa'];
$observacoes = $observacoes['observacoes'];
echo "<tr>";
echo "<td>".$nome."<td>";
echo "<td>".$cpf."<td>";
echo "<td>".$endereco."<td>";
echo "<td>".$email."<td>";
echo "<td>".$fabricante."<td>";
echo "<td>".$modelo."<td>";
echo "<td>".$ano."<td>";
echo "<td>".$cor."<td>";
echo "<td>".$placa."<td>";
echo "<td>".$observacoes."<td>";
echo "<tr>";
}

mysqli_close($conexao);
echo "<table>";
 ?>

</body>
</html>