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
//WHERE email = '$email'
$query_select = "SELECT email FROM Usuario WHERE email = '$email'";
$select = $conn->query($query_select);
var_dump($select);


if ($select->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        //echo "Id" $row ["id"] "nome" $row["nome"];
      echo "fodeu";
    }
} else {
        echo "0results";
        $sql = "INSERT INTO Usuario (nome,cpf_cnpj,data_de_nascimento,cep,endereco,numero,complemento,cidade,estado,telefone,celular,whatsApp,email,senha)
        VALUES ('$nome','$cpf_cnpj','$data','$cep','$endereco','$numero','$complemento','$cidade',
        '$estado','$telefone','$celular','$whats','$email','$senha')";
        if ($conn->query($sql) == TRUE) {
          echo "FOI";
        }else{
          echo "Deu Ruim" . $conn->error;
        }
    }

    
    $conn->close();
?>
