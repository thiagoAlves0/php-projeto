<?php
// Conectar ao banco de dados (substitua os valores pelos seus dados de conexão)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "animes";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verificar se foi enviado um parâmetro 'anime_id' via GET
if (isset($_GET['anime_id'])) {
    // Preparar e executar a consulta SQL para obter o link do vídeo
    $anime_id = $conn->real_escape_string($_GET['anime_id']);
    $sql = "SELECT link_do_video FROM videos_youtube WHERE anime_id = $anime_id";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            // Obter o link do vídeo da primeira linha do resultado
            $row = $result->fetch_assoc();
            $link_do_video = $row['link_do_video'];

            // Redirecionar para o link do vídeo
            header("Location: $link_do_video");
            exit;
        } else {
            echo "Anime não encontrado no banco de dados.";
        }
    } else {
        echo "Erro na consulta SQL: " . $conn->error;
    }
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
