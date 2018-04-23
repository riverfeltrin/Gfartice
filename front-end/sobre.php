 <?php 
 session_start(); 
 if (!isset($_SESSION['usuarioLog'])) {
  //header("location: ../front-end/login.php");
  $logado = null;
}else{
  $logado = $_SESSION['usuarioLog'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sobre</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../materialize/css/materialize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

  <ul id="dropdown1" class="dropdown-content">
    <?php if ($logado != null) { ?>
    <li class="divider"></li>
    <li><a href="../front-end/home.php">Home</li>
      <li class="divider"></li>
      <li><a href="../front-end/consultar_pedidos.php">Consultar serviços</li>
        <li class="divider"></li>
        <li><a href="../back-end/logout.php">Sair</a></li>
        <?php }else{ ?>
        <li class="divider"></li>
        <li><a href="../front-end/manter_usuario.php">Cadastre-se</a></li>
        <li class="divider"></li>
        <li><a href="../front-end/login.php">Login</a></li>
        <li class="divider"></li>
        <?php } ?>
      </ul>

      <nav style="background-color: #2bbbad; " >
        <div class="nav-wrapper" >
          <a href="home.php" class="brand-logo"><img src="../imagens/logo.png" style="height: 100px; width: 100px; margin-left: 15%;"></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="../front-end/home.php">Home</a></li>
            <?php if ($logado != null) { ?>
            <li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?php echo "Bem vindo ", $logado;?><i class="material-icons right">arrow_drop_down</i></a></li><?php }else{
              ?>
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
              <?php } ?>
            </ul>
          </div>
        </nav>

        <h3 style="text-align: center; margin-top: 5%;">Gfartice serviços de instalações, reparos e marido de aluguel.</h3>
        <div style="text-align: center; margin-left: 20%; margin-right: 10%;">
          <p><h6>&nbsp&nbsp A nossa empresa atua no mercado sendo o intermediário entre cliente e fornecedor, onde buscamos atender os nossos clientes com maior qualidade possível mediante avaliações criteriosas na escolha dos profissionais a serem disponibilizados para os serviços.  
          </h6></p>
          <p><h6>&nbsp&nbsp Nossa missão é entregar qualidade e satisfação para os clientes com comodidade para buscar os melhores profissionais e proporcionar oportunidades para prestadores de todo o Brasil para ser nossos colaboradores e assim poder divulgar seus serviços.
          </h6></p>
          <h5><b>Para contato mande para nós um email que responderemos com prazer:<br></b></h5>
          <a href="gfartice@email.com" type="link" style="font-size: 20px;"><b>gfartice@email.com</b></a>
        </div>

        <br><br><br><br><br><br><br><br>
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
