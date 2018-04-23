<?php
require("conexao.php");

if ($conn->connect_error) {
	die("Erro: ".$conn->connect_error);
}

$sql = "SELECT nome, cep, endereco, numero, complemento, cidade, estado, telefone, celular, email, especialidade FROM Usuario ORDER BY nome ASC";
$result = array();
$result = $conn->query($sql);
$conn->close();
?>