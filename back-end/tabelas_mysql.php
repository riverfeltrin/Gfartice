<?php  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_gfartice";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
	die("Erro: ". $conn -> connect_error);
}

$sql = "CREATE TABLE Usuario (
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
		whatsApp boolean,
		email VARCHAR(50),
		senha VARCHAR (20)
		)";

		if ($conn -> query($sql) == TRUE) {
			echo "Table clientes criada";
		}else{
			echo "Erro na criação: ". $conn -> erro;
		}

		$conn->close();
?>