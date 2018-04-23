<?php
require("conexao.php");

if ($conn->connect_error) {
	die("Erro: ".$conn->connect_error);
}

$sql = "SELECT nomeCliente, cep, endereco, numero, complemento, cidade, estado, telefone, celular, email, tipoServico, descricao FROM Orcamento ORDER BY cidade ASC";
	$result = array();
	$result = $conn->query($sql);

$conn->close();
?>