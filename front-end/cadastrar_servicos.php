<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>


<body style="background-color: black;">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Gfartice</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cadastrar_servicos.php">Serviços</a>
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

  <!--Formulário-->
  <div style="margin-right: 20%; margin-left: 20%; margin-top: 5%; background-color: #DAA520; border-radius:20px;">
  <form style="margin-left: 5%;" method="POST" action="../back-end/inserir_servicos.php">
    Tipo de serviço:&nbsp<input type="text" name="tipoServico">
    <br><br>
    Descrição do serviço:<br>
    <textarea rows="6" cols="80" name="descricao" id="descricao">
    </textarea>
    <input type="submit" name="Cadastrar">

  </form>
  </div>
</body>
</html>