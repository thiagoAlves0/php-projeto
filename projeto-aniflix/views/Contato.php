<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <link rel="icon" type="image/x-icon" href="./images/yellowfolder.png">

    <link rel="stylesheet" href="../public\visuals/contato.css">
</head>

<body style="background-color: black;">
    <div class="nudados">
        <a class="nusetas" href="../views/index.php">←</a>
        <span class="nudata">Contato AniFlix</span>
    </div>
<form action="/formulario-contato" method="post">
    <div>
        <label for="nome">Nome:</label>
        <input type="texto" id="nome" name="nome_usuario">
    </div>
    <div>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email_usuario">
    </div>
    <div>
        <label for="texto">Texto:</label>
        <textarea id="texto" name="texto_usuario"></textarea>
    </div>
</form>
    
</body>

</html>