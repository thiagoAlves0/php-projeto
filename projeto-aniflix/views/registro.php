<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public\visuals/registro.css" />
    <title>Cadastro</title>
  </head>
  <body>
    <div class="header">
      <div class="logo">
          <img src="..\public\assets\images/af.png" alt="png" />
      </div>
    </div>

    <div class="login_body">
      <div class="login_box">
        <h2>Resgistra-se</h2>
        <form action="registrodb.php" method="post">
        <div class="input_box">
          <input required type="text" name="nome" placeholder="Nome Completo" />
        </div>

        <div class="input_box">
          <div>
            <label for="diaa">Data de Nascimento:</label>
            <input type="date" id="diaa" name="data_nascimento" />
          </div>
        </div>

        <div class="input_box">
          <input required type="email" name="email" placeholder="Email" />
        </div>

        <div class="input_box">
          <input required type="password" name="senha" placeholder="Senha" />
        </div>

        <div class="input_box" style="display: inline-block">
          <label for="planos" style="color: #8d70db">Escolha um plano:</label>
          <select id="planos" name="plano">
            <option value="Gratuito">Gratuito</option>
            <option value="Plano Básico">Plano Básico</option>
            <option value="Plano Premium">Plano Premium</option>
          </select>
        </div>

        <div>
          <button type="submit" class="submit">Registrar</button>
        </div>
      </form>
      </div>
    </div>
  </body>
</html>
