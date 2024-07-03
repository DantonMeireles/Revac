<?php
require_once('../../../Session/validasession.php');

if ($tipo != '2') {
  header('location: ../../../controller/rotas.php');
}
require_once("../../../Controller/conexao.php");

$sql = $conn->prepare("SELECT * FROM vw_dados_usuario");

$sql->execute();

if ($sql) {
  $user = $sql->fetchAll(PDO::FETCH_ASSOC)[0];
}


?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Componentes/Css/Sidebar.css">
  <link rel="stylesheet" href="../../Componentes/Css/Avaliador1.css">
  <link rel="stylesheet" href="../../Componentes/Css/PerfilT.css">
  <link rel="stylesheet" href="../../Componentes/Css/Scroll.css">
  <link rel="stylesheet" href="../../Componentes/Css/Edicao.css">
 


  <!----===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

  <!-- Fonte-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2&display=swap" rel="stylesheet">

  <!-- Logotipo-->
  <link rel="icon" href="icon/favicon-16x16.png">
  <link rel="icon" href="icon/favicon-32x32.png">
  <link rel="icon" href="icon/apple-touch-icon.png">
  <link rel="icon" href="icon/android-chrome-192x192.png">
  <link rel="icon" href="icon/android-chrome-512x512.png">
  <title>REVAC</title>
</head>

<body>

  <!-- Inicio da navbar -->
  <nav class="sidebar close">
    <header>
      <!-- Inicio perfil menu lateral -->
      <!-- Ver Limite de Caracter-->
      <div class="image-text">
        <span class="image">
          <a href="PerfilAvaliadorT.php">
            <img src="<?php echo $user["Foto"] ?>" alt="Configurações de Perfil">
          </a>
        </span>
        <div class="text logo-text">
          <span class="name"> <u> <?php echo $user["Nome"] ?> </u> </span>
          <span class="profession"><?php echo $user["tipo"] ?></span>
        </div>
      </div>
      <!-- Final perfil menu lateral -->
      <!-- Ícones, lincagem Paginas, Nomes -->
      <i class='bx bx-chevron-right toggle'></i>
    </header>
    <div class="menu-bar">
      <div class="menu">
        <!--Linha de codigo abaixo se resume o DarkMode-->
        <div class="search-box"></div>
        <!--Termina o DarkMode-->
        <ul class="menu-links">
          <li class="nav-link">
            <a href="HomeAvaliador.php">
              <i class='bx bx-dock-left icon'></i>
              <span class="text nav-text">Capa</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="ApresentacaoAvaliador.php">
              <i class='bx bx-file icon'></i>
              <span class="text nav-text">Apresentação</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="RegrasAvaliador.php">
              <i class='bx bx-task icon'></i>
              <span class="text nav-text">Regras</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="FazerArtigoAvaliador.php">
              <i class='bx bx-copy-alt icon'></i>
              <span class="text nav-text">Como fazer um artigo</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="PesquisaAvancadaAvaliador.php">
              <i class='bx bx-news icon'></i>
              <span class="text nav-text">Pesquisa Avançada</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="SubmissaoAvaliador.php">
              <i class='bx bx-add-to-queue icon'></i>
              <span class="text nav-text">Submeta o seu artigo</span>
            </a>
          </li>

        </ul>
      </div>
      <!-- Fim -->
      <!-- Inicio do dark mode-->

      <div class="bottom-content">
        <li class="">
          <a href="../../../controller/logout.php">
            <i class='bx bx-door-open icon'></i>
            <span class="text nav-text">Sair</span>
          </a>
        </li>
        <li class="mode">
          <div class="sun-moon">
            <i class='bx bx-moon icon moon'></i>
            <i class='bx bx-sun icon sun'></i>
          </div>
          <span class="mode-text text">Escuro</span>

          <div class="toggle-switch">
            <span class="switch"></span>
          </div>
        </li>

      </div>

    </div>

  </nav>
  <!--Fim do dark-->


  <section class="home">
  <div id="divmenu">

<span style="background-color:#cccFDD; cursor: auto;">
    <ul>
        <li class="item">
            <p class="p1">Edições Anteriores</p>
            <ul>
                <li><a href="../../../Pages/Php/Edital/2022.php">Edição 2022</a></li>
            </ul>
        </li>
    </ul>
</span>
</div>

<div id="divcerne" class="generalpage">
    <main>
      <div class="scroll">
        <aside class="info">
          <div class="aside__content">
            <div class="profile-posts tab">
              <?php $i = 0;
              while ($i < 10) {
                $i++; ?>
                <div class="div_center">
                  <ul class="Post-Caixas">
                    <li>
                      <span class="Post_Conteiner">
                        <h1>NOME DO ARTIGO: </h1>
                        <h2>SUBÁREA: </h2>
                        <h2>ÁREA:</h2>
                        <h2>STATUS: </h2>
                        <h2>AUTOR(ES): </h2>
                        <h2>ORIENTADOR(ES): </h2>
                        <div class="Post_Rodape">
                          <?php
                          echo '<a class="btn btn-warning" style="" href="../../../paginas testes para funcçoes/teste1.php?id=' . '">Selecionar</a> ';
                          ?>
                          <a class="btn btn-warning" style="padding-left: 2%" href="../../componentes/arquivos/muito_feio_filho.docx">Download Artigo</a>

                          <span class="Post_Data">Data de submissão: <strong></strong></span>
                        </div>
                      </span>
                    </li>
                  </ul>
                </div>
              <?php } ?>
            </div>
          </div>
        </aside>
      </div>
    </main>
  </section>
  <script src="../../Componentes/Js/Sidebar1.js"></script>
  <script src="../../Componentes/Js/PerfilT.js"></script>
  <script src="../../Componentes/Js/Modal.js"></script>
</body>

</html>