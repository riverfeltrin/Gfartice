<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
 <!--Import Google Icon Font-->
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



</head>
<style>
.slider .indicators .indicator-item.active {
  background-color: #79807a;
}


.slider .slides {   
  position: absolute !important;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}


</style>

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
      <li><a href="../front-end/sobre.php">Sobre</a></li>
      <?php } ?>
    </ul>

    <nav style="background-color: #2bbbad; ">
      <div class="nav-wrapper" >
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="../front-end/cadastrar_orcamento.php">Orçamento</a></li>
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
            <img src="../imagens/pintura.jpg"> 
            <div class="caption center-align">
              <h3>This is our big Tagline!</h3>
              <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
            </div>
          </li>
          <li>
            <img src="../imagens/eletrica.jpg"> 
            <div class="caption left-align">
              <h3 class="black-text">Left Aligned Caption</h3>
              <h5 class="black-text">Here's our small slogan.</h5>
            </div>
          </li>
        </ul>
      </div>

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