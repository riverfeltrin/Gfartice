<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Orçamento</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 <nav style="background-color: #2bbbad;">
  <div class="nav-wrapper">
    <a href="#" class="brand-logo">Logo</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href="../front-end/home.php">Home</a></li>
      <li><a href="../front-end/sobre.php">Sobre</a></li>
    </ul>
  </div>
</nav>
</head>
<body style="background-color: #c1f0ed;">
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

  <h3 style="text-align: center;">Preencha os dados para o orçamento!</h3>



  <div style="margin-right: 30%; margin-left: 30%; margin-top: 5%; background-color: white; border-radius: 20px;">

   <div class="row">
    <form method="post" action="../back-end/inserir_usuario.php" class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="txtnome">
          <label for="icon_prefix">Nome</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="txtCpfCnpj">
          <label for="icon_prefix">Cpf/Cnpj</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">cake</i>
          <input id="icon_prefix" type="text" class="validate" name="txtDataNascimento">
          <label for="icon_prefix">Data de nascimento</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="txtCep">
          <label for="icon_prefix">Cep</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="txtEndereco">
          <label for="icon_prefix">Endereço</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="txtNumero">
          <label for="icon_prefix">Número</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" class="validate" name="txtComplemento">
          <label for="icon_prefix">Complemento</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">location_city</i>
          <input id="icon_prefix" type="text" class="validate" name="txtCidade">
          <label for="icon_prefix">Cidade</label>
        </div>
        <div class="input-field col s12">
         <select name="uf" id="uf">
          <option value="" disabled selected>Escolha a opção</option>
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
        </select>
        <label>Selecione o estado</label>
      </div>
      <div class="input-field col s6">
        <i class="material-icons prefix">phone</i>
        <input id="icon_prefix" type="text" class="validate" name="txtTelefone">
        <label for="icon_prefix">Telefone</label>
      </div>
      <div class="input-field col s6">
        <i class="material-icons prefix">phone_android</i>
        <input id="icon_prefix" type="text" class="validate" name="txtCelular">
        <label for="icon_prefix">Celular</label>
      </div>
      <div class="input-field col s12">
        <select name="especialidade">
         <option value="" disabled selected>Selecione a opção</option>
         <?php  
         $resultEspecialidade = "SELECT * FROM Servico";
         $resultadoEspecialidade = mysqli_query($conn, $resultEspecialidade);
         while ($row_tipoServico = mysqli_fetch_assoc($resultadoEspecialidade)){?>
         <option value="<?php echo $row_tipoServico['id']; ?>"><?php echo $row_tipoServico['tipoServico'];?></option><?php  
       }?>
     </select>
     <label>Selecione a especialidade</label>
   </div>
   <div class="input-field col s6">
    <i class="material-icons prefix">email</i>
    <input id="icon_prefix" type="text" class="validate" name="txtEmail">
    <label for="icon_prefix">Email</label>
  </div>
  <div class="input-field col s12">
    <textarea id="textarea1" class="materialize-textarea" name="descricao"></textarea>
    <label for="textarea1">Descreva o serviço</label>
  </div>
</div>
<button style="margin-left: 50%;" class="btn waves-effect waves-light" type="submit" name="enviar_orcamento">Enviar
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
<script type="text/javascript">
  $(document).ready(function(){
   $('select').formSelect();
 });
</script>
</body>
<?php  	
$conn->close();
?>
</html>