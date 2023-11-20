<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../public\visuals/login.css" />
    <title>Login</title>
  </head>
  <body>
    <div class="header">
      <div class="logo">
          <img src="..\public\assets\images/af.png" alt="png" />
      </div>
    </div>

    <div class="login_body">
      <div class="login_box">
        <h2>Login</h2>
        <form action="logindb.php" method="post">
        
        <div class="input_box">
          <input required type="email" name="email" placeholder="Email" />
        </div>

        <div class="input_box">
          <input required type="password" name="senha" placeholder="Senha" />
        </div>

        <div>
          <button type="submit" class="submit">Entrar</button>
        </div>
      </form>
      </div>
    </div>
  </body>
</html>
