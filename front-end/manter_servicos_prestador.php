<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$bdName = "bd_gfartice";


	//criar conexão
	$conn = new mysqli($servername, $username, $password, $bdName);

	if ($conn -> connect_error) {
		die("Erro: ". $conn -> connect_error);
	}else{
		echo "Conectado";
	}

	$sql = "DROP DATABASE bd_gfartice";
	if ($conn -> query($sql) == TRUE) {
		echo "Banco de dados EXCLUIDO";
	}else{
		echo "Erro na EXCLUSÃO ". $conn ->error;
	}

	$conn -> close();
	
  ?>