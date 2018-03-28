<?php 
 
$nome = $_POST['txtnome'];
$cpf_cnpj = $_POST['txtCpfCnpj'];
$data = $_POST['txtDataNascimento'];
$cep = $_POST['txtCep'];
$endereco = $_POST['txtEndereco'];
$numero = $_POST['txtNumero'];
$complemento = $_POST['txtComplemento'];
$cidade = $_POST['txtCidade'];
$estado = $_POST['uf'];
$telefone = $_POST['txtTelefone'];
$celular = $_POST['txtCelular'];
$whats = $_POST['txtnome'];
$email = $_POST['txtEmail'];
$senha = MD5($_POST['passwordSenha']);



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_gfartice";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
  die("Erro: ". $conn -> connect_error);
}

$query_select = "SELECT * FROM Usuario";
//$query_select = "SELECT login FROM Usuario WHERE email = '$email'";
$select = $conn->query($query_select);
//var_dump($select);


if ($select->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        //echo "Id" $row ["id"] "nome" $row["nome"];
    }
} else {
        echo "0results";
        $sql = "INSERT INTO Usuario ('nome','cpf_cnpj','data_de_nascimento','cep','endereco','numero','complemento','cidade','estado','telefone','celular','whatsApp','email','senha')
        VALUES ('$nome','$cpf_cnpj','$data','$cep','$endereco','$numero','$complemento','$cidade',
        '$estado','$telefone','$celular','$whats','$email','$senha')";
        if ($conn->query($sql) == TRUE) {
          echo "FOI";
        }else{
          echo "Deu Ruim" . $conn->error;
        }
    }

     //$insert = $conn->query($query);
     /*if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='manter_usuario.php</script>";
        }*/
















//$array = mysql_fetch_array($select);
//$logarray = $array['email'];
 
/*  if($email == "" || $email == null){
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='manter_usuario.php';</script>";
    }else{
      if($select == $email){
 
        echo"<script language='javascript' type='text/javascript'>alert('Esse login já existe');window.location.href='manter_usuario.php';</script>";
        die();
 
      }else{
        $query = "INSERT INTO Usuario (nome,cpf_cnpj,data_de_nascimento,cep,endereco,numero,complemento,cidade,estado,telefone,celular,whatsApp,email,senha) VALUES ('$nome','$rg','$cpf_cnpj','$data','$cep','$endereco','$numero','$complemento','$cidade','$estado','$telefone','$celular','$whats','$email',$senha')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='login.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='manter_usuario.php</script>";
        }
      }
    }*/
    $conn->close();
?>