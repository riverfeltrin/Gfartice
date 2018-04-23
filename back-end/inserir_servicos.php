<?php  
require("conexao.php");

$tipoServico = $_POST['tipoServico'];
$descricao = $_POST['descricao'];

if ($conn -> connect_error) {
  die("Erro: ". $conn -> connect_error);
}

$query_select = "SELECT tipoServico FROM Servico WHERE tipoServico = '$tipoServico'";
$select = $conn->query($query_select);

if ($select->num_rows > 0) {
    while($row = $select->fetch_assoc()) {
        //echo "Id" $row ["id"] "nome" $row["nome"];
    }
  echo '<script>alert("Servico já cadastrado no sistema!");</script>';  
  echo "<script>window.location = '../front-end/cadastrar_servicos.php';</script>";
}else{
        $sql = "INSERT INTO Servico (tipoServico, descricao) VALUES ('$tipoServico','$descricao')";
        if ($conn->query($sql) == TRUE) {
          echo '<script>alert("Serviço cadastrado com sucesso!");</script>';  
          echo "<script>window.location = '../front-end/cadastrar_servicos.php';</script>"; 
        }else{
          echo "Deu Ruim" . $conn->error;
        }
}
$conn->close();
?>