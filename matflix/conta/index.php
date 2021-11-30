<?php
include "../verifica.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
    <link rel="stylesheet" href="../css/style.css">
    <!--FONT AWESOME-->
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
</head>
<body>

<div class="wrapper">

<!-- HEADER -->
<header>
    <div class="netflixLogo">
    <a id="logo" href="#home"><img src="../imagens/logo-mat_flix.svg" alt="Logo Image"></a>
    </div>      
    <nav class="main-nav">                
    <a href="../">Início</a>
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

<br><br><br>

<!-- Perfil -->
<div class="conta-bloco">
<h3>Olá, <?php echo $_SESSION['usuario'];?>!</h3>

<img class="img-perfil" src="../imagens/perfil/el-bigodon.svg" alt="">
</div>

<!-- Fim do perfil -->

<br><br><br>

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
<!-- Fim do rodapé -->

</div>
</body>
</html>