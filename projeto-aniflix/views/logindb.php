<?php
session_start();

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

// Capturar dados do formulário de login
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consultar o banco de dados para verificar as credenciais
$sql = "SELECT * FROM usuarios WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Usuário encontrado, verificar a senha
    $row = $result->fetch_assoc();
    if (password_verify($senha, $row['senha'])) {
        // Senha correta, login bem-sucedido
        $_SESSION['email'] = $email;
        header("Location: animes.php"); // Redirecionar para a página inicial após o login
    } else {
        // Senha incorreta
        echo '<script>alert("Senha incorreta. Verifique suas credenciais.");</script>';
        header("refresh:0;url=login.php");
    }
} else {
    // Usuário não encontrado, redirecionar para a página de registro
    echo '<script>alert("Usuário não encontrado. Redirecionando para o registro.");</script>';
    header("refresh:0;url=registro.php");
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
