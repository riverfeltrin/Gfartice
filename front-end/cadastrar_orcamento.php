<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Orçamento</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
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

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_gfartice";

$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn -> connect_error) {
		die("Erro: ". $conn -> connect_error);
	}
?>

<div style="margin-right: 20%; margin-left: 20%; margin-top: 5%; background-color: #DAA520; border-radius: 20px;">
	<form style="margin-left: 5%;" method="POST" action="../back-end/inserir_orcamento.php">
		Nome:<br> <input type="text" name="txtnome"><br>
		Cpf/Cnpj:<br> <input type="text" name="txtCpfCnpj"><br>
		CEP:<br><input type="text" name="txtCep"><br>
		Endereço:<br><input type="text" name="txtEndereco"><br>
		Número:<br><input type="text" name="txtNumero"><br>
		Complemento:<br><input type="text" name="txtComplemento"><br>
		Cidade:<br><input type="text" name="txtCidade"><br><br>

		Estado:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<select name="uf" id="uf">
			<option value="">Selecione</option>
			<option value="AC">AC</option>
			<option value="AL">AL</option>
			<option value="AM">AM</option>
			<option value="AP">AP</option>
			<option value="BA">BA</option>
			<option value="CE">CE</option>
			<option value="DF">DF</option>
			<option value="ES">ES</option>
			<option value="GO">GO</option>
			<option value="MA">MA</option>
			<option value="MG">MG</option>
			<option value="MS">MS</option>
			<option value="MT">MT</option>
			<option value="PA">PA</option>
			<option value="PB">PB</option>
			<option value="PE">PE</option>
			<option value="PI">PI</option>
			<option value="PR">PR</option>
			<option value="RJ">RJ</option>
			<option value="RN">RN</option>
			<option value="RS">RS</option>
			<option value="RO">RO</option>
			<option value="RR">RR</option>
			<option value="SC">SC</option>
			<option value="SE">SE</option>
			<option value="SP">SP</option>
			<option value="TO">TO</option>
 		</select><br><br>
		Telefone:<br><input type="text" name="txtTelefone"><br>
		Celular:<br><input type="text" name="txtCelular"><br><br>
		Email:<br><input type="text" name="txtEmail"><br>
		<select id="especificacaoServico">
			<option value="">Selecione a opção</option>
			<?php  
			$resultEspecialidade = "SELECT * FROM Servico";
			$resultadoEspecialidade = mysqli_query($conn, $resultEspecialidade);
			while ($row_tipoServico = mysqli_fetch_assoc($resultadoEspecialidade)){?>
				<option value="<?php echo $row_tipoServico['id']; ?>"><?php echo $row_tipoServico['tipoServico'];?></option><?php  
			}
			?>
		</select>
		Descrição do serviço:<br>
    	<textarea rows="6" cols="80" name="descricao" id="descricao"></textarea>
		<input type="submit" name="submit_enviar" value="Enviar">	
	</form>
	</div>
<?php  	
	$conn->close();
?>
</body>
</html>