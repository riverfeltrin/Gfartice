<?php
require("conexao.php");
if ($conn -> connect_error) {
	die("Erro: ". $conn -> connect_error);
}

$nome = $_POST['txtNome'];
$cpf_cnpj = $_POST['txtCpfCnpj'];
$cep = $_POST['txtCep'];
$endereco = $_POST['txtEndereco'];
$numero = $_POST['txtNumero'];
$complemento = $_POST['txtComplemento'];
$cidade = $_POST['txtCidade'];
$estado = $_POST['uf'];
$telefone = $_POST['txtTelefone'];
$celular = $_POST['txtCelular'];
$email = $_POST['txtEmail'];
$tipoServico = $_POST['especialidade'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO Orcamento (nomeCliente,cpfCnpj,cep,endereco,numero,complemento,cidade,estado,telefone,celular,email,tipoServico,descricao)
VALUES ('$nome','$cpf_cnpj','$cep','$endereco','$numero','$complemento','$cidade',
'$estado','$telefone','$celular','$email','$tipoServico','descricao')";
if ($conn->query($sql) == TRUE) {
	echo '<script>alert("Seu pedido de orçamento foi recebido com sucesso!");</script>';  
	echo "<script>window.location = '../front-end/home.php';</script>"; 
}else{
	echo '<script>alert("Solicitação não atendida tente novamente!");</script>'.$conn->error;  
	echo "<script>window.location = '../front-end/cadastrar_orcamento.php';</script>"; 
}
$conn->close();
?>