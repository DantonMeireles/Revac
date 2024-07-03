<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Pages/Componentes/Css/Sidebar.css">
	<link rel="stylesheet" href="../../Pages/Componentes/Css/CapaSite.css">
  <link rel="stylesheet" href="../../Pages/Componentes/Css/NormasPublicacao.css">

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
          <a href="">
            <img src="../../Pages/Componentes/Img/Visitante.jpg" alt="Configurações de Perfil">
          </a>
        </span>
        <div class="text logo-text">
          <span class="name"> <u> Fazer Login </u> </span>
          <span class="profession">Visitante</span>
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
            <a href="Home.php">
              <i class='bx bx-dock-left icon'></i>
              <span class="text nav-text">Capa</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="Apresentacao.php">
              <i class='bx bx-file icon'></i>
              <span class="text nav-text">Apresentação</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="Regras.php">
              <i class='bx bx-task icon'></i>
              <span class="text nav-text">Regras</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="FazerArtigo.php">
              <i class='bx bx-copy-alt icon'></i>
              <span class="text nav-text">Como fazer um artigo</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="Home.php">
              <i class='bx bx-news icon'></i>
              <span class="text nav-text">Pesquisa Avançada</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="Home.php">
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
        <a href="Home.php">
            <i class='bx bx-door-open icon'></i>
            <span class="text nav-text">Login</span>
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

  <!--Inicio do conteudo-->
  <section class="home">
    <main>
      <aside class="info">
        <div class="aside__content">
          <strong><b>Normas:</b></strong>
          <ul>
            <!--Considerações iniciais-->

            <p>1. Considerações Iniciais:<br>
              O "nome do projeto" visa criar um site onde pessoas podem armazenar os seus artigos científicos e também
              fazer a pesquisa de forma fácil e rápida</p><br>

            <!--Orientações para o resumo-->
            <p>2. Orientações para a submissão do resumo:<br>
              Acessar a parte "Normas de publicação"<br>
              Acessar o arquivo chamado "Modelo de Resumo"</p><br>

            <!--Áreas-->
            <p>3. Áreas: <br><br>
              *Ciências Biológicas e da Saúde<br>
              Sub-Categorias:
              Ciências Biológicas, Ecologia, Educação Física, Fisioterapia, Odontologia e Psicologia.<br>
              <br>
              *Ciências Exatas e da Terra:<br>
              Sub-Categorias:
              Arquitetura e Urbanismo, Computação e Informática, Engenharias, Física, Geologia, Matemática,
              Meteorologia, Oceanografia e Química.<br>
              <br>
              *Ciências Humanas e Sociais:<br>
              Sub-Categorias:
              Design, Direito, Filosofia, Geografia, História, Letras, Pedagogia.
              <br><br>
              *Ciências Sociais Aplicadas:<br>
              Sub-Categorias:
              Administração, Ciências Contábeis, Ciências Econômicas, Comunicação Social e Serviço Social.<br><br>
            </p>

            <!--Métodos de avaliação-->
            <p>4. Método de Avaliação:<br>
              Será conversado com os professores</p><br>

            <!--Métodos para a publicação-->
            <p>5. Métodos de publicação:<br>
              Para a publicação de um artigo científico ser efetivada, será necessário a correção de um professor para a
              averiguação do conteúdo.
            </p>
            <a href="Regras.php" id="link-topo">
              <i class="bx bx-arrow-back icon"></i>
            </a>
          </ul>
        </div>
      </aside>
    </main>
  </section>
  <script src="../../Pages/Componentes/Js/Sidebar.js"></script>
</body>

</html>