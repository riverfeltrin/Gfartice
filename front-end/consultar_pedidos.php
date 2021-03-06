<?php
require("../back-end/listaOrcamentos.php");
session_start();
if (!isset($_SESSION['usuarioLog'])) {
	header("location: ../front-end/home.php");
	session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Consultar Pedidos</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../materialize/css/materialize.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<?php  
	if (!isset($_SESSION['usuarioLog'])) {
		session_destroy();
		$logado = null;
	}else{
		$logado = $_SESSION['usuarioLog'];
	}
	?>
</head>
<body>
	<!-- Navbar -->
	<ul id="dropdown1" class="dropdown-content">
		<?php if ($logado != null) { ?>
		<li class="divider"></li>
		<li><a href="../back-end/logout.php">Sair</a></li>
		<?php }else{ ?>
		<li class="divider"></li>
		<?php } ?>
	</ul>
	<nav style="background-color: #2bbbad; " >
		<div class="nav-wrapper" >
			<a href="home.php" class="brand-logo"><img src="../imagens/logo.png" style="height: 100px; width: 100px; margin-left: 15%;"></a>
			<ul class="right hide-on-med-and-down">
				<li><a href="../front-end/home.php">Home</a></li>
				<li><a href="../front-end/sobre.php">Sobre</a></li>
				<?php if ($logado != null) { ?>
				<li><a class="dropdown-trigger" href="#!" data-target="dropdown1"><?php echo "Bem vindo ", $logado;?><i class="material-icons right">arrow_drop_down</i></a></li><?php }else{
					?>
					<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
					<?php } ?>
				</ul>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<br/>

				<br/>
				<br/>
				<br/>
				<h1> LISTA DE ORCAMENTOS</h1>
				<br/>
				<br/>

				<?php
				?>
				<table>
					<?php

					echo "<tr>";
					echo "<th> Nome </th>";
					echo "<th> Cep </th>";
					echo "<th> Endereco </th>";
					echo "<th> Numero </th>";
					echo "<th> Complemento </th>";
					echo "<th> Cidade </th>";
					echo "<th> Estado </th>";
					echo "<th> Telefone </th>";
					echo "<th> Celular </th>";
					echo "<th> Email </th>";
					echo "<th> Área do serviço </th>";
					echo "<th> Descricão </th>";

					echo "</tr>";

					foreach ($result as $teste)
					{
						echo "<tr>";
						echo "<td>";
						print_r($teste["nomeCliente"]);
						echo "</td>";
						echo "<td>";
						print_r($teste["cep"]);
						echo "</td>";
						echo "<td>";
						print_r($teste["endereco"]);
						echo "</td>";
						echo "<td>";
						print_r($teste["numero"]);
						echo "</td>";
						echo "<td>";
						print_r($teste["complemento"]);
						echo "</td>";
						echo "<td>";
						print_r($teste["cidade"]);
						echo "</td>";
						echo "<td>";
						print_r($teste["estado"]);
						echo "</td>";
						echo "<td>";
						print_r($teste["telefone"]);
						echo "</td>";
						echo "<td>";
						print_r($teste["celular"]);
						echo "</td>";
						echo "<td>";
						print_r($teste["email"]);
						echo "</td>";
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
	</body>
	<script src="../materialize/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
	<script type="text/javascript">
		$(".dropdown-trigger").dropdown();
		$(document).ready(function(){
			$('.sidenav').sidenav();
		});
	</script>
	</html>