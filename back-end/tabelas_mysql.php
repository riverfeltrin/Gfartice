<?php  
require("conexao.php");

if ($conn -> connect_error) {
	die("Erro: ". $conn -> connect_error);
}

/*$sql = "CREATE TABLE Usuario (
		id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nome VARCHAR(30) NOT NULL,
		cpf_cnpj VARCHAR(30) NOT NULL,
		data_de_nascimento VARCHAR(8),
		cep VARCHAR (20),
		endereco VARCHAR (50),
		numero int(8),
		complemento VARCHAR(15),
		cidade VARCHAR (20),
		estado VARCHAR (2),
		telefone VARCHAR (15),
		celular VARCHAR (15),
		email VARCHAR(50),
		senha VARCHAR (40),
		especialidade_ID int(11) NOT NULL
		)";

$sql = "CREATE TABLE Servico (
		id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		tipoServico VARCHAR(20) NOT NULL,
		descricao VARCHAR (300) 
		)";

$sql = "CREATE TABLE Orcamento (
		id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		nomeCliente VARCHAR(30) NOT NULL,
		cpfCnpj VARCHAR (20) NOT NULL,
		cep VARCHAR(20) NOT NULL,
		endereco VARCHAR(50) NOT NULL,
		numero int(8) NOT NULL,
		complemento VARCHAR(15),
		cidade VARCHAR (20) NOT NULL,
		estado VARCHAR (2) NOT NULL,
		telefone VARCHAR (15),
		celular VARCHAR (15),
		email VARCHAR(50),
		tipoServico VARCHAR(20) NOT NULL,
		descricao VARCHAR(300) NOT NULL
		)";



		if ($conn -> query($sql) == TRUE) {
			echo "Table Orcamento criada";
		}else{
			echo "Erro na criação: ". $conn -> erro;
		}
*/
		$conn->close();
?>