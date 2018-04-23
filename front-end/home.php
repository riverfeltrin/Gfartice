<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
 <!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <link rel="stylesheet" type="text/css" href="../materialize/css/materialize.css">
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
</head>

<body>
  <ul id="dropdown1" class="dropdown-content">
    <?php if ($logado != null) { ?>
    <li><a href="../front-end/consultar_pedidos.php">Consultar serviços</li>
      <li class="divider"></li>
      <li><a href="../front-end/sobre.php">Sobre</a></li>
      <li class="divider"></li>
      <li><a href="../back-end/logout.php">Sair</a></li>
      <?php }else{ ?>
      <li><a href="../front-end/manter_usuario.php">Cadastre-se</a></li>
      <li class="divider"></li>
      <li><a href="../front-end/login.php">Login</a></li>
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
          <li><a href="../front-end/sobre.php">Sobre</a></li>
          <?php if ($logado != null) { ?>
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?php echo "Bem vindo ", $logado;?><i class="material-icons right">arrow_drop_down</i></a></li><?php }else{
            ?>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
            <?php } ?>
            
          </ul>
        </div>
      </nav>


      <div class="slider">
        <ul class="slides">
         <li>
          <img src="../imagens/manutencao.jpg"> 
          <div class="caption left-align">
            <h3 class="corPrincipal"><b>Serviços de marido de aluguel<br> para seu lar</b></h3>
            <h5 class="corPrincipal"><b>Profissionais qualificados.</b></h5>
          </div>
        </li>
        <li>
          <img src="../imagens/eletrica1.jpg"> 
          <div class="caption right-align">
            <h3 class="corPrincipal"><b>Garantia de qualidade</b></h3>
            <h5 class="corPrincipal"><b>Fique tranquilo e deixa<br> que resolvemos para você!</b></h5>
          </div>
        </li>
        <li>
          <img src="../imagens/servicos.jpg"> 
          <div class="caption left-align">
            <h3 class="corPrincipal"><b>Serviços de elétrica, hidráulica, reparos,<br> instalações.</b></h3>
            <h5 class="corPrincipal"><b>Faça seu orçamento sem compromisso!</b></h5>
          </div>
        </li>
      </ul>
    </div>

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
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){
        $('.slider').slider({
          height: 675
        });
      });
    </script>
    <script type="text/javascript">
      $(".dropdown-trigger").dropdown();
      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>

  </body>
  </html>