<?php 
require("conexao.php");
session_start();

if ($conn -> connect_error) {
  die("Erro: ". $conn -> connect_error);
}

$login = $_POST['loginEmail'];
$senha = md5($_POST['loginPassword']);

$query_select = "SELECT * FROM Usuario WHERE email = '$login' AND senha = '$senha'";
$select = $conn->query($query_select);


if ($select->num_rows > 0) {
  while($row = $select->fetch_assoc()) {
        //echo "Id" $row ["id"] "nome" $row["nome"];
  } 

  $_SESSION['usuarioLog'] = $login;
  echo "<script language='javascript' type='text/javascript'>
  var result = confirm('Usuario logado!');
  if (result) {
    window.location.href = 'http://localhost:8081/Gfartice/front-end/home.php';
  }
  </script>";
} else {
  echo "<script language='javascript' type='text/javascript'>
  var result = confirm('Senha ou login incorretos!');
  if (result) {
    window.location.href = 'http://localhost:8081/Gfartice/front-end/login.php';
  }
  </script>";
}
$conn->close();   
?>