<?php

include ('verifica.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Mathflix</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--FONT AWESOME-->
  <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
  
  <!-- CSS --> 
   <link rel="stylesheet" href="css/style.css">
  <script src="main.js"></script>
</head>
<body>
  
  <div class="wrapper">

    <!-- HEADER -->
    <header>
      <div class="netflixLogo">
        <a id="logo" href="#home"><img src="imagens/logo-mat_flix.svg" alt="Logo Image"></a>
      </div>      
      <nav class="main-nav">                
        <a href="#home">Início</a>
        <a href="#tvShows">Conteúdos</a>
        <a href="#movies">Nosso projeto</a>
        <a href="#originals">Histórico</a>    
      </nav>
      <nav class="sub-nav">
        <a href="#"><i class="fas fa-search sub-nav-logo"></i></a>
        <a href="#"><i class="fas fa-bell sub-nav-logo"></i></a>
        <a href="conta/">Conta</a>        
      </nav>      
    </header>

    <!-- Fim do cabeçalho -->

  <section class="destaques">
        <div class="texto-destaque">
          <h2>Geometria</h2>
          <sub><h4>Conheça mais de Geometria Espacial</h4></sub>
          <p>
            Nesta série de vídeos com exercicios aprenderemos a calcular área e volume total de pirâmide e cilindro.
          </p>
          <br>
          <div class="btn">
            <a href="#"><i class="fas fa-solid fa-play"></i> Assistir </a>
            <a href="#"><i class="fas fa-info-circle"></i> Mais informações </a>
          </div>
        </div>

      </section>

    <!-- MAIN CONTAINER -->
    <section class="main-container" >
      <div class="location" id="home">
          <h1 id="home">Geometria espacial</h1>
          <div class="box">
            <a href=""><img src="imagens/capas/Geometria Espacial.svg" alt=""></a>
            <a href=""><img src="imagens/capas/Geometria Espacial.svg" alt=""></a>
            <a href=""><img src="imagens/capas/Geometria Espacial.svg" alt=""></a>
            <a href=""><img src="imagens/capas/Geometria Espacial.svg" alt=""></a>
            <a href=""><img src="imagens/capas/Geometria Espacial.svg" alt=""></a>
            <a href=""><img src="imagens/capas/Geometria Espacial.svg" alt=""></a>   
          </div>
      </div>

<!-- FIM DO CONTAINER PRINCIPAL -->

<!-- Início dos links redes socias -->
    <section class="link">
      <div class="logos">

        <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
      </div>
      <br>
      <div class="sub-links">
        <ul>
          <li><a href="#">Audio and Subtitles</a></li>
          <li><a href="#">Audio Description</a></li>
          <li><a href="#">Ajuda</a></li>
          <li><a href="#">Termos de uso</a></li>
          <li><a href="#">Privacidade</a></li>
          <li><a href="#">Informações Legais</a></li>
          <li><a href="#">Contato</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </div>
    </section>
<!-- Fim dos links -->

<!-- Rodapé -->
    <footer>
      <p>Mathflix - © Copyright 2021.</p>
      <p>Breno Franca, David Vinicius e Ruan Regis.
        <br><br>
        Professora orientadora: Delane
      </p>
    </footer>
  </div>
<!-- Fim do rodapé -->


<!-- BOOTSTRAP -->

  <!-- BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  
</body>
</html>