<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<title>Login</title>
</head>
<body style="background-color: black;">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">Gfartice</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="manter_servicos.php">Serviços</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="manter_usuario.php">Cadastrar-se</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="sobre.php">Sobre</a>
      </li>
    </ul>
  </div>
</nav>
	<div style="margin-left: 20%; margin-right: 20%; margin-top: 5%; background-color: #DAA520; border-radius: 20px;">
	<form style="margin-left: 5%;" method="POST" action="verificar_login.php">
	<label>Login:</label><br><input type="text" name="login" id="login"><br>
	<label>Senha:</label><br><input type="password" name="senha" id="senha"><br><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<input style="margin-left: 10%;" type="submit" value="entrar" id="entrar" name="entrar"><br>
	&nbsp&nbsp
	<a style="margin-left: 10%;" href="manter_usuario.php">Cadastre-se</a>
	</form>
	</div>
</body>
</html>