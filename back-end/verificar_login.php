<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_gfartice";

session_start();

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn -> connect_error) {
  die("Erro: ". $conn -> connect_error);
}

$login = $_POST['loginEmail'];
$senha = md5($_POST['loginPassword']);

$query_select = "SELECT * FROM Usuario WHERE email = '$login' AND senha = '$senha'";
$select = $conn->query($query_select);

//contar quantos campos foram selecionados
//var_dump($select);


if ($select->num_rows > 0) {
  while($row = $select->fetch_assoc()) {
        //echo "Id" $row ["id"] "nome" $row["nome"];
  } 

  $_SESSION['login'] = $login;
  $_SESSION['senha'] = $senha;
  setcookie("login",$login);
  echo "<script language='javascript' type='text/javascript'>
  var result = confirm('Usuario logado!');
  if (result) {
    window.location.href = 'http://localhost:8081/Gfartice/front-end/home.php';
  }
  </script>";
} else {
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  echo "<script language='javascript' type='text/javascript'>
  var result = confirm('Senha errada!');
  if (result) {
    window.location.href = 'http://localhost:8081/Gfartice/front-end/login.php';
  }
  </script>";
}
$conn->close();   
?>