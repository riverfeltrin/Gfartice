<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>Login</title>
</head>
<body>
  <nav style="background-color: #1e88e5;">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../front-end/cadastrar_orcamento.php">Orçamento</a></li>
        <li><a href="../front-end/login.php">Login</a></li>
        <li><a href="../front-end/sobre.php">Sobre</a></li>
      </ul>
    </div>
  </nav>

  <div class="row" style="margin-left: 35%;">
    <form method="post" action="" class="col s12">
      <div class="row">
        <div class="input-field col s3">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="loginNome">
          <label for="icon_prefix">Email</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s3">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="password" class="validate" name="loginPassword">
          <label for="icon_prefix">Senha</label>
        </div><br>
      </div>
      <button style="margin-left: 8%;" class="btn waves-effect waves-light" type="submit" name="login">Log In
        <i class="material-icons right">send</i>
      </button><br><br>
      <a style="margin-left: 8%;" href="manter_usuario.php">Cadastre-se</a>
      </div>
      
    </form>


  <script src="../materialize/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
  <script type="text/javascript">
   $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
   });
  </script>
</body>
</html>