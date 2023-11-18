<?php
// Conectando ao servidor MySQL
$conexao = mysqli_connect("localhost", "root", "");

// Verificando a conexão
if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}

// Selecionando o banco de dados
$db = mysqli_select_db($conexao, "contato");

// Verificando a seleção do banco de dados
if (!$db) {
    die("Erro na seleção do banco de dados: " . mysqli_error($conexao));
}

// Verificando se os campos do formulário foram enviados
if (isset($_POST['nome_usuario'], $_POST['email_usuario'], $_POST['texto_usuario'])) {

    // Escapando os dados do formulário para prevenir SQL injection
    $nome = mysqli_real_escape_string($conexao, $_POST['nome_usuario']);
    $email = mysqli_real_escape_string($conexao, $_POST['email_usuario']);
    $texto = mysqli_real_escape_string($conexao, $_POST['texto_usuario']);

    // Montando a consulta SQL
    $sql = "INSERT INTO contatos (nome_usuario, email_usuario, texto_usuario) VALUES ('$nome', '$email', '$texto')";

    // Executando a consulta SQL
    if (mysqli_query($conexao, $sql)) {
        if (mysqli_affected_rows($conexao) > 0) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro: Nenhum dado inserido.";
        }
    } else {
        echo "Erro ao inserir dados: " . mysqli_error($conexao);
    }

    // Fechar a conexão
    mysqli_close($conexao);

} else {
    echo "Erro: Campos do formulário não foram enviados.";
}
?>
