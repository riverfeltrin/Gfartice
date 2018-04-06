<?php

	$servername = "localhost";
	$username = "root";
	$password = "";

	//criar conexão
	$conn = new mysqli($servername, $username, $password);

	//Verificar
	if ($conn -> connect_error) {
		die("Erro: ". $conn -> connect_error);
	}else{
		echo "Conectado";
	}

	$sql = "CREATE DATABASE bd_gfartice";
	if ($conn -> query($sql) == TRUE) {
		echo "Banco de dados criado";
	}else{
		echo "Erro na criação: ". $conn ->error;
	}

	$conn -> close();
  ?>