<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

  <head>
    <meta charset="utf-8"/>
    <title>AniFlix</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="../public/visuals/styles.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,900&display=swap" rel="stylesheet"/>

    <!-- Font Awesome -->
    <script defer="defer" src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <!-- Bootstrap Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark">
      <div class="container-fluid navtitle">
        <a class="navbar-brand mr-auto" href="#">Ani<span>Flix</span></a>

        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle navlink" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ranking
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Todos os Animes</a>
                    <a class="dropdown-item" href="#">Meslhores Animes</a>
                    <a class="dropdown-item" href="#">Melhores Filmes</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Mais Populares</a>
                    <a class="dropdown-item" href="#">Favoritos</a>
                    <a class="dropdown-item" href="#">Melhores OVAs</a>
                    <a class="dropdown-item" href="#">Melores ONAs</a>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Lançamentos da Temporada 
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Destauqes da Temporada</a>
                    <a class="dropdown-item" href="#">Lançamentos da Semana</a>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categorias 
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Ação</a>
                    <a class="dropdown-item" href="#">Aventura</a>
                    <a class="dropdown-item" href="#">Batalha</a>
                    <a class="dropdown-item" href="#">Comédia</a>
                    <a class="dropdown-item" href="#">Drama</a>
                    <a class="dropdown-item" href="#">Fantasia</a>
                    <a class="dropdown-item" href="#">Mecha</a>
                    <a class="dropdown-item" href="#">Musica</a>
                    <a class="dropdown-item" href="#">Mistério</a>
                    <a class="dropdown-item" href="#">Romance</a>
                    <a class="dropdown-item" href="#">Slice-of-Life</a>
                    <a class="dropdown-item" href="#">Sportes</a>
                    <a class="dropdown-item" href="#">Subrenatural</a>
                    <a class="dropdown-item" href="#">Thriller</a>
                  </div>
                </li>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    News
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Destaques</a>
                    <a class="dropdown-item" href="#">Notícias da Temporada</a>
                    <a class="dropdown-item" href="#">Todas</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <ul class="navbar-nav ml-auto">
            <li>
              <button type="button" class="btn btn-outline nav-button">Registro</button>
            </li>
            <li>
              <button type="button" class="btn btn-outline nav-button">Login</button>
            </li>
          </ul>

        </div>
      </div>

    </nav>
  </header>
</section>

<!-- Frame1 -->
<section>
  <div class="container-fluid">
    <div class="row align-items-center justify-content-center video-div">
      <!-- Background video -->
      <video class="video" preload="true" autoplay="autoplay" muted="muted" loop="loop">
        <source src="../public/assets/videos/kimi-no.mp4" type="video/mp4"/>
      </video>

      <div class="background-text">
        <div style="text-align: center">
          <h1 id="site-title">The Anime Universe</h1>
          <p class="subtitle">Em qualquer lugar, em qualquer dispositivo, de todas as formas possíveis.</p>
        </div>

        <form action="index.html" method="post">
          <div class="row form-div">
            <div class="col-lg-8">
              <input type="email" placeholder="Email" id="register-input"/>
            </div>

            <div class="col-lg-4">
              <button class="btn btn-lg" type="button" id="register-btn">
                Sing Up
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- Frame2 -->
<section class="color-section">
  <div class="container-fluid download-div">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6">
        <div class="download-info">
          <h2 class="download-text">Assista a qualquer hora, em qualquer lugar!</h2>

          <div class="row download-text">
            <div class="col-lg-6 col-md-6">
              <button class="btn btn-lg download-btn" type="button" name="button">
                <i class="fab fa-google-play download-icon"></i>DOWNLOAD</button>
            </div>

            <div class="col-lg-6 col-md-6">
              <button class="btn btn-lg download-btn" type="button" name="button">
                <i class="fab fa-apple download-icon"></i>DOWNLOAD</button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <img class="smartphone-img" src="../public/assets/images/smartphone-image.png">
      </div>
    </div>
  </div>
</section>

<!-- Frame3 -->
<section>
  <div class="container-fluid">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-4 feature-box feature-icon">
        <i class="fas fa-download fa-9x"></i>
        <p class="feature-text">Baixe seus episódios favoritos em alta resolução!</p>
      </div>

      <div class="col-lg-4 feature-box feature-icon">
        <i class="fab fa-accessible-icon fa-9x"></i>
        <p class="feature-text">Literalmente qualquer um pode usar.</p>
      </div>

      <div class="col-lg-4 feature-box feature-icon">
        <i class="fas fa-bullseye fa-9x"></i>
        <p class="feature-text">Encontre um anime que combine com seus gostos.</p>
      </div>
    </div>
  </div>
</section>

<!-- Frame4 -->
<section>
  <div class="container-fluid color-section">
    <div class="row align-items-center justify-content-center">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" pause="hover">
          <div class="carousel-item active">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 anime-content-div carousel-text">
                <h1 class="anime-title">JUJUTSU KAISEN Incidente em Shibuya | TRAILER OFICIAL</h1>
                <p class="synopsis">
                  Assista JUJUTSU KAISEN aqui na AniFlix - disponível também com dublagem em português!
                </p>
            
              </div>
              <div class="col-lg-6 anime-content-div">
                <div class="iframe-container">
                  <iframe loading="lazy" src="https://www.youtube.com/embed/9sLu3bUBuOg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                </div>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 anime-content-div">
                <h1 class="anime-title">Attack on Titan Final Season THE FINAL CHAPTERS</h1>
                <p class="synopsis">
                  Attack on Titan Final Season THE FINAL CHAPTERS Special 2 chega exclusivamente à AniFlix HOJE, 4 de novembro, às 21h! Mas antes, você pode relembrar toda a batalha entre humanos e titãs aqui, antes que a história chegue ao fim! 🔥
                </p>
              </div>
              <div class="col-lg-6 anime-content-div">
                <div class="iframe-container">
                  <iframe loading="lazy" src="https://www.youtube.com/embed/6um2h46YFXg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 anime-content-div">
                <h1 class="anime-title">The Rising of the Shield Hero</h1>
                <p class="synopsis">
                  Histórias antigas contam sobre quatro heróis de outro mundo - empunhando a espada, lança, arco e escudo - que defenderam a terra de onda após onda de calamidade. Com o destino do mundo em equilíbrio, o reino de Melromarc convoca essas figuras lendárias; no Japão dos tempos modernos, o chamado é atendido, e os heróis inadvertidos são transportados para esse universo de fantasia.
                </p>
                <p class="synopsis">
                  Arremessado para Melromarc e agraciado com o título de 'Herói do Escudo', o otaku Naofumi Iwatani é rotulado como o mais fraco devido à sua falta de habilidade ofensiva e aparente inexperiência. Quando os heróis seguem caminhos separados para iniciar suas jornadas, ele tem apenas uma companheira disposta: a bela princesa Malty Melromarc. No entanto, ela logo o trai, rouba todo o seu dinheiro e o acusa de tê-la explorado.
                </p>
                <p class="synopsis">
                  Por seus supostos crimes, Naofumi é rotulado como criminoso e se torna um pária na sociedade. Com ódio preenchendo seu coração, ele parte sozinho, jurando vingança contra aqueles que o prejudicaram.
                </p>
              </div>
              <div class="col-lg-6 anime-content-div">
                <div class="iframe-container">
                  <iframe loading="lazy" src="https://www.youtube.com/embed/cmwqlMnGDzA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Frame5 -->
<section class="frame4">
  <div class="titleSubscription">
    <h1>
      Aproveite todos os benefícios com o Premium.
      <br/>
      Ou use a versão gratuita!
    </h1>
    <p>Os assinantes Premium podem desfrutar de muitos benefícios!</p>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card cardsub">
          <div class="card-header">
            <h1>Ani</h1>
          </div>
          <div class="card-body">
            <h2 class="price-text">Gratuito</h2>

            <ul class="benefits">
              <li>Com Anúcios</li>
              <li>Acesso limitado a 80% do catálogo</li>
              <li>1 semana de atraso para assistir aos lançamentos</li>
              <li>Sem dublagem</li>
              <li>Limitado a resolução de até 480p</li>
              <li>Sem presentes em eventos</li>
              <li>Sem descontos em nossos produtos</li>
              <li>Assista em até 1 tela</li>
            </ul>
          </div>
          <div class="d-flex justify-content-center">
            <button class="btn btn-lg btn-block btn-dark card-btn d-flex align-items-center justify-content-center" type="button">
              <span class="singup-text">Inscrição</span>
            </button>
          </div>
        </div>
      </div>

      <div class="pricing-column col-lg-4 col-md-6">
        <div class="card cardsub">
          <div class="card-header">
            <h1>Ani<span>+</span></h1>
          </div>
          <div class="card-body">
            <h2 class="price-text">$9,99/
              <span>Por mês</span><span>+taxas</span></h2>

            <ul class="benefits">
              <li>Sem Anúcios</li>
              <li>Acesso ilimitado ao catálogo</li>
              <li>Sem atrasos em relação aos lançamentos no Japão</li>
              <li>Acesso ao anime dublado</li>
              <li>Resolução até 1080p</li>
              <li>Brindes em eventos</li>
              <li>Descontos em nossos produtos</li>
              <li>Assista em até 4 telas</li>
              <li>Visualização offline</li>
            </ul>

          </div>
          <div class="d-flex justify-content-center">
            <button class="btn btn-lg btn-block btn-dark card-btn d-flex align-items-center justify-content-center" type="button">
              <span class="singup-text">Inscrição</span>
            </button>
          </div>
        </div>
      </div>

      <div class="pricing-column col-lg-4">
        <div class="card cardsub">
          <div class="card-header text-center">
            <h1>Ani<span>World</span></h1>
          </div>
          <div class="card-body">
            <h2 class="price-text">$20/
              <span>Por mês</span><span>+taxas</span></h2>

            <ul class="benefits">
              <li>Sem Anúcios</li>
              <li>Acesso ilimitado ao catálogo</li>
              <li>Sem atrasos em relação aos lançamentos no Japão</li>
              <li>Acesso ao anime dublado</li>
              <li>Resolução até 4K</li>
              <li>Brindes em eventos</li>
              <li>Mais descontos em nossos produtos e entrega grátis</li>
              <li>Assista em até 5 telas</li>
              <li>Visualização offline</li>
              <li>Entrada Gratuita em Enventos</li>
            </ul>
          </div>
          <div class="d-flex justify-content-center">
            <button class="btn btn-lg btn-block btn-dark card-btn d-flex align-items-center justify-content-center" type="button">
              <span class="singup-text">Sign Up</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="infosub">
    <p>A disponibilidade da AniStore pode variar de acordo com a região.<br>
      A disponibilidade de conteúdo de vídeo está sujeita a restrições regionais.
    </p>
  </div>
</section>

<!-- Footer -->
<section class="ultimate">

  <div class="socials">
    <div class="socialinfo">
       <h2>Siga-nos em nossas redes sociais!</h2>
       <div class="socialinks">
        <a href="#"><i class='fab iconlinks'>&#xf09a;</i></a>
        <a href="#"><i class='fab iconlinks'>&#xf16d;</i></a>
        <a href="#"><i class='fab iconlinks'>&#xf392;</i></a>
        <a href="#"><i class="fab iconlinks">&#xf081;</i></a>
       </div>
    </div>
    <img src="../public/assets/images/jinx.png" alt="">
  </div>

  <div class="container-fluid footer">
    <div class="row">
      <div class="pricing-column col-sm">
        <div class="card">
          <div class="card-header infotitle">
            <img src="../public/assets/images/fire.svg" alt="Fire Icon">
            <h4>Animes em alta</h4>
          </div>
          <div class="card-body">
            <div class="infolist">
              <a href="#">Black Clover</a>
              <a href="#">Bleach</a>
              <a href="#">Boruto</a>
              <a href="#">Dragon Ball Super</a>
              <a href="#">Hunter x Hunter</a>
              <a href="#">Naruto</a>
              <a href="#">Naruto Shippuden</a>
              <a href="#">One Piece</a>
              <a href="#">Re:Zero</a>
              <a href="#">The God of High School</a>
            </div>
          </div>
        </div>
      </div>

      <div class="pricing-column col-sm">
    <div class="card">
        <div class="card-header infotitle">
            <i class='fab icon'>&#xf3ab;</i>
            <h4>Plataformas</h4>
        </div>
        <div class="card-body">
            <div class="infolist">
                <h5 style="color: white;">Android</h5>
                <h5 style="color: white;">Chromecast</h5>
                <h5 style="color: white;">Fire TV Stick</h5>
                <h5 style="color: white;">iOS</h5>
                <h5 style="color: white;">LG TV</h5>
                <h5 style="color: white;">Nintendo Switch & Wii U</h5>
                <h5 style="color: white;">PlayStation 5, 4 & 3</h5>
                <h5 style="color: white;">Xbox Series X | S, One & 360</h5>
                <h5 style="color: white;">Samsung TV</h5>
                <h5 style="color: white;">Windows</h5>
            </div>
        </div>
    </div>
</div>


      <div class="pricing-column col-sm">
        <div class="card">
          <div class="card-header infotitle">
            <i class="fa icon">&#xf1cd;</i>
            <h4>Suporte</h4>
          </div>
          <div class="card-body">
            <div class="infolist">
              <a href="#">Ajuda / FAQ</a>
              <a href="Contato.php">Contato</a>
              <a href="#">Customer service</a>
              <a href="#">Fórum</a>
            </div>
          </div>
        </div>
      </div>

      <div class="pricing-column col-sm">
        <div class="card">
          <div class="card-header infotitle ani">
            <img src="../public/assets/images/eye3.svg" alt="Icon"> <h4>Ani<span>Flix</span></h4>
          </div>
          <div class="card-body">
            <div class="infolist">
              <a href="#">Sobre</a>
              <a href="#">Trabalhe Conosco</a>
              <a href="#">Publicidade</a>
              <a href="#">Política de direitos autorais</a>
              <a href="#">Termos de serviço</a>
              <a href="#">política de Privacidade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="index.js" charset="utf-8"></script>
</body>

</html>
