<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sobre</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 <?php  
 session_start();
 if (!isset($_SESSION['usuarioLog'])) {
  //header("location: ../front-end/login.php");
   session_destroy();
   $logado = null;
 }else{
  $logado = $_SESSION['usuarioLog'];
}
?>

<nav style="background-color: #2bbbad; " >
  <div class="nav-wrapper">
    <a href="#" class="brand-logo">Logo</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">

      <?php if ($logado != null) { ?>
      <li><?php echo "Bem vindo ", $logado;?></li>
      <li><a href="../back-end/logout.php">Sair</li>
      <li><a href="../front-end/sobre.php">Sobre</a></li>
        <?php 
      } else { ?>
      <li><a href="../front-end/manter_usuario.php">Cadastre-se</a></li>
      <li><a href="../front-end/login.php">Login</a></li>
      <li><a href="../front-end/sobre.php">Sobre</a></li>
      <?php } ?>
    </ul>
  </div>
</nav>

</head>
<body style="background-color: #c1f0ed;">


</body>
</html>