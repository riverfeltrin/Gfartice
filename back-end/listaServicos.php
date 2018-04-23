<?php
require("conexao.php");

if ($conn->connect_error) {
	die("Erro: ".$conn->connect_error);
}

$sql = "SELECT tipoServico, descricao FROM Servico ORDER BY tipoServico ASC";
	$result = array();
	$result = $conn->query($sql);

$conn->close();
?>
