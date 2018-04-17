<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>


<body>
  <nav style="background-color: #2bbbad;">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="../front-end/cadastrar_orcamento.php">Orçamento</a></li>
        <li><a href="../front-end/login.php">Login</a></li>
        <li><a href="../front-end/sobre.php">Sobre</a></li>
      </ul>
    </div>
</nav>
  <!--Formulário-->
 <div style="margin-right: 30%; margin-left: 5%; margin-top: 5%; background-color: white; border-radius: 20px;">
  <div class="row">
    <form method="post" action="../back-end/inserir_servicos.php" class="col s12">
      <div class="input-field col s6">
          <input type="text" class="validate" name="tipoServico">
          <label>Tipo de serviço</label>
      </div> 
      <div class="input-field col s6">
          <textarea id="textarea1" class="materialize-textarea" name="descricao"></textarea>
          <label for="textarea1">Descreva o serviço</label>
      </div>
      <button style="margin-left: 75%;" class="btn waves-effect waves-light" type="submit" name="submit_enviar">Enviar
        <i class="material-icons right">send</i>
      </button>
    </form>  
 </div>
</div>


<script src="../materialize/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script type="text/javascript">
   $(document).ready(function() {
    $('input#input_text, textarea#textarea2').characterCounter();
   });
</script>
  
  </form>
  </div>
</body>
</html>