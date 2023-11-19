<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public\visuals/registro.css" />
    <title>Document</title>
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
        <form>
          <div class="input_box">
            <input required type="nome" placeholder="Nome Completo" />
          </div>

          <div class="input_box">
            <div>
              <label for="diaa"></label>
              <input type="date" id="diaa" name="diaa" />
            </div>
          </div>

          <div class="input_box">
            <input required type="email" placeholder="Email" />
          </div>

          <div class="input_box">
            <input required type="password" placeholder="Senha" />
          </div>

          <div class="input_box" style="display: inline-block">
            <label for="planos" style="color: #8d70db">Escolha um plano:</label>
            <select id="planos" name="planos">
              <option value="Gratuito">Gratuito</option>
              <option value="Plano Básico">Plano Básico</option>
              <option value="Plano Premium">Plano Premium</option>
            </select>
          </div>

          <div>
            <button class="submit">Entrar</button>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
