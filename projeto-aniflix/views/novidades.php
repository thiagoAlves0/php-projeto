<?php
// Conectando ao servidor MySQL
$conexao = mysqli_connect("localhost", "root", "");

// Verificando a conexão
if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}

// Selecionando o banco de dados
$db = mysqli_select_db($conexao, "novidades");

// Verifica se o e-mail foi enviado pelo formulário
if (isset($_POST['email'])) {
    // Escapa o e-mail para prevenir SQL injection
    $email = mysqli_real_escape_string($conexao, $_POST['email']);

    // Monta a consulta SQL
    $sql = "INSERT INTO tabela_emails (email) VALUES ('$email')";

    // Executa a consulta SQL
    if (mysqli_query($conexao, $sql)) {
        echo "E-mail cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o e-mail: " . mysqli_error($conexao);
    }
} else {
    echo "Erro: E-mail não foi enviado pelo formulário.";
}

// Fecha a conexão
mysqli_close($conexao);
?>
