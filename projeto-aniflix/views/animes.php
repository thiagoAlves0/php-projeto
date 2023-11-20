
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo de Animes</title>
  
  <link rel="stylesheet" href="../public\visuals/animes.css">

</head>
<body>

  <div class="container">
  <h2 class="hover-color">Catálogo de Animes</h2>
    <ul class="anime-list">
      <li class="anime-item">
        <h3 class="anime-title">Kimi no Na wa</h3>
        <p class="anime-description">Mitsuha é uma estudante que vive em uma pequena cidade nas montanhas. Apesar de sua vida tranquila...</p>
        <!-- Link para o vídeo ao clicar na imagem -->
        <a href="anime_redirect.php?anime_id=1" target="_blank">
          <img src="../public/assets/img test/YN.jpg" alt="Anime 1" class="anime-image">
        </a>
      </li>
      <li class="anime-item">
        <h3 class="anime-title">Hunter x Hunter</h3>
        <p class="anime-description">Gon Freecss é um garoto que descobre que seu pai, Ging, foi um Caçador e que, ao contrário do que Gon pensava, ele está vivo. </p>
        <!-- Link para o vídeo ao clicar na imagem -->
        <a href="link_para_o_video_2" target="_blank">
          <img src="../public/assets/img test/hxh.jpg" alt="Anime 2" class="anime-image">
        </a>
      </li>
      <li class="anime-item">
        <h3 class="anime-title">Jujutsu Kaisen</h3>
        <p class="anime-description">Yuji Itadori, um jovem que se torna aprendiz de feiticeiro após ser amaldiçoado.</p>
        <!-- Link para o vídeo ao clicar na imagem -->
        <a href="link_para_o_video_3" target="_blank">
          <img src="../public/assets/img test/juju.webp" alt="Anime 3" class="anime-image">
        </a>
      </li>
      <li class="anime-item">
        <h3 class="anime-title">Tokyo Ghoul</h3>
        <p class="anime-description">Em Tóquio, criaturas conhecidas como ghouls vivem entre os humanos e os devoram para sobreviver.</p>
        <!-- Link para o vídeo ao clicar na imagem -->
        <a href="link_para_o_video_4" target="_blank">
          <img src="../public/assets/img test/TG.jpg" alt="Anime 4" class="anime-image">
        </a>
      </li>
      <li class="anime-item">
        <h3 class="anime-title">One Piece</h3>
        <p class="anime-description">Em One Piece, conhecemos as aventuras de Monkey D. Luffy e sua equipe de piratas, navegando por oceanos fantásticos e ilhas exóticas em busca do maior tesouro.</p>
        <!-- Link para o vídeo ao clicar na imagem -->
        <a href="link_para_o_video_5" target="_blank">
          <img src="../public/assets/img test/OP.jpg" alt="Anime 5" class="anime-image">
        </a>
      </li>
      <li class="anime-item">
        <h3 class="anime-title">Shingeki no Kyojin</h3>
        <p class="anime-description">A história segue Eren Jaeger, que jura exterminar os Titãs, após um Titã causar a destruição de sua cidade natal e a morte de sua mãe.</p>
        <!-- Link para o vídeo ao clicar na imagem -->
        <a href="link_para_o_video_6" target="_blank">
          <img src="../public/assets/img test/AOT.jpg" alt="Anime 6" class="anime-image">
        </a>
      </li>
    </ul>
  </div>
</body>

<script>
  // efeito luminoso
  const animeImages = document.querySelectorAll('.anime-image');

  animeImages.forEach(image => {
    image.addEventListener('mouseover', () => {
      image.style.filter = 'brightness(1.3)'; // Ajustar o valor 
    });

    image.addEventListener('mouseout', () => {
      image.style.filter = 'brightness(1)';
    });
  });
  
</script>

</html>
