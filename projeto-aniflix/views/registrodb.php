<?php
// Conectar ao banco de dados (substitua com suas próprias configurações)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Capturar dados do formulário
$nome = $_POST['nome'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$plano = $_POST['plano'];

// Inserir dados na tabela
$sql = "INSERT INTO usuarios (nome, data_nascimento, email, senha, plano) VALUES ('$nome', '$data_nascimento', '$email', '$senha', '$plano')";

if ($conn->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";

    // Redirecionar para a página inicial após 2 segundos
    header("refresh:2;index.php");
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
// Fechar a conexão com o banco de dados
$conn->close();
?>
