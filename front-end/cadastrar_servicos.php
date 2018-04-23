<?php  
require("../back-end/listaServicos.php");
require("../back-end/conexao.php");

if ($conn -> connect_error) {
  die("Erro: ". $conn -> connect_error);
}

if ($_SESSION['usuarioLog'] != 'adm') {
  header("location: ../front-end/home.php");
  die();
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastro serviços</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="../materialize/css/materialize.css">

  <?php  
  session_start();
  if (!isset($_SESSION['usuarioLog'])) {
    header("location: ../front-end/home.php");
    die();
  }else{
    $logado = $_SESSION['usuarioLog'];
  }
  ?>

</head>
<body>
  <ul id="dropdown1" class="dropdown-content">
    <?php if ($logado != null) { ?>
      <li><a href="../front-end/consultar_prestadores.php">Consultar prestadores</a></li>
      <li class="divider"></li>
      <li><a href="../back-end/logout.php">Sair</a></li>
      <?php }else{ ?>
      <li class="divider"></li>
      <?php } ?>
    </ul>
    <nav style="background-color: #2bbbad; ">
      <div class="nav-wrapper" >
        <a href="home.php" class="brand-logo"><img src="../imagens/logo.png" style="height: 100px; width: 100px; margin-left: 15%;"></a>
        <ul class="right hide-on-med-and-down">
          <?php if ($logado == null) { ?>  
          <li><a href="../front-end/manter_usuario.php">Trabalhe conosco</a></li>
          <li><a href="../front-end/cadastrar_orcamento.php">Orçamento</a></li>
          <?php } ?>
          <?php if ($logado != null) { ?>
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?php echo "Bem vindo ", $logado;?>
            <i class="material-icons right">arrow_drop_down</i></a></li><?php }else{
              ?>
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
              <?php } ?> 
            </ul>
          </div>
        </nav>

        <div class="container">
          <form method="post" action="../back-end/inserir_servicos.php" class="col s12">
            <div class="row">
              <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate" name="tipoServico">
                <label for="icon_prefix">Tipo Serviço</label>
              </div>
              <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input id="icon_prefix" type="text" class="validate" name="descricao">
                <label for="icon_prefix">Descrição</label>
              </div>
            </div>
            <button style="margin-left: 75%;" class="btn waves-effect waves-light" type="submit" name="submit_enviar">Enviar
              <i class="material-icons right">send</i>
            </button>
          </form>
        </div>

        <div class="container">
          <div class="row">
            <br/>
            <h1> Lista de Serviços</h1>
            <br/>
            <br/>
            <table>
              <?php  
              echo "<tr>";
              echo "<th> Nome </th>";
              echo "<th> Descricão </th>";
              echo "</tr>";

              foreach ($result as $teste)
              {
                echo "<tr>";
                echo "<td>";
                print_r($teste["tipoServico"]);
                echo "</td>";
                echo "<td>";
                print_r($teste["descricao"]);
                echo "</td>";
                echo "</tr>";
              }
              ?>
            </table>
          </div>
        </div>
        <br>
        <br>
        <br>
        <footer class="page-footer" style="background-color: #2bbbad; ">
          <div class="container">
            <div class="row">
              <div class="col l4 s12">
                <img src="../imagens/logo.png">
              </div>
              <p class="grey-text text-lighten-4">A Gfartice é uma rede nacional de franquias especializadas em serviços de reformas e reparos: marido de aluguel, pedreiro, pintor, eletricista, encanador, gesseiro e mais. Confira nossos serviços. Seja Bem-vindo!</p>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
              © 2018 Gfartice/Manutenção e reformas
            </div>
          </div>
        </footer>


        <script src="../materialize/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
        <script type="text/javascript">
          $(".dropdown-trigger").dropdown();
          $(document).ready(function(){
            $('.sidenav').sidenav();
          });
        </script>
      </body>
      </html>