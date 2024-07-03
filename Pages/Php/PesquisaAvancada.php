<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Pages/Componentes/Css/Sidebar.css">
	<link rel="stylesheet" href="../../Pages/Componentes/Css/PesquisaAvancada.css">

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
            <a href="Submissao.php">
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
          <h2>Pesquisa Avançada</h2>

          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Pesquisa Artigo ..." title="Type in a name">
          <input type="text" id="myInputa" onkeyup="myFunctiona()" placeholder="Pesquisa Autor ..." title="Type in a name">
          <input type="text" id="myInputb" onkeyup="myFunctionb()" placeholder="Pesquisa Área ..." title="Type in a name">
          <input type="text" id="myInputc" onkeyup="myFunctionc()" placeholder="Pesquisa SubÁrea ..." title="Type in a name">

          <table id="myTable">
            <tr class="header">
              <th>Nome do artigo</th>
              <th>Nome do autor</th>
              <th>Área </th>
              <th>SubÁrea </th>
              <th>Visualizar Artigo</th>
            </tr>
            <tr>
              <td>Computação</td>
              <td>Danton Oliveira</td>
              <td>Ciências Biológicas e Saúde</td>
              <td>Biomedicina</td>
              <td><a href="">visualizar ...</td>
            </tr>
            <tr>
              <td>Acessibilidade em Jogos de Videogames</td>
              <td>Matheus Ileck</td>
              <td>Ciências Socias Aplicadas</td>
              <td>Ciências da Informação</td>
              <td><a href="">visualizar ...</td>
            </tr>
            <tr>
              <td>Métodos em Obras Entregues</td>
              <td>Kaylane Soares</td>
              <td>Ciências Exatas e da Terra</td>
              <td>Engenharias</td>
              <td><a href="">visualizar ...</td>
            </tr>
            <tr>
              <td>Containers</td>
              <td>Marcia Silva</td>
              <td>Ciências Exatas e da Terra</td>
              <td>Computação e Informática</td>
              <td><a href="">visualizar ...</td>
            </tr>
            <tr>
              <td>Sistema Prisional</td>
              <td>Manuella Soares</td>
              <td>Ciências Biológicas e Saúde</td>
              <td>Enfermagem</td>
              <td><a href="">visualizar ...</td>
            </tr>
            <tr>
              <td>Metodologias no Ensino Prático da Física</td>
              <td>Daniela Domingues</td>
              <td>Ciências Exatas e da Terra</td>
              <td>Física</td>
              <td><a href="">visualizar ...</td>
            </tr>
            <tr>
              <td>Alzheimer</td>
              <td>Jorge Vieira</td>
              <td>Ciências Biológicas e Saúde</td>
              <td>Biomedicina</td>
              <td><a href="">visualizar ...</td>
            </tr>
            <tr>
              <td>A Dinâmica da Prestação</td>
              <td>Lucas Pedro</td>
              <td>Ciências Humanas e Sociais</td>
              <td>Direito</td>
              <td><a href="">visualizar ...</td>
            </tr>
          </table>

        </div>
      </aside>
    </main>
  </section>
  <script src="../../Pages/Componentes/Js/Upload.js"></script>
  <script src="../../Pages/Componentes/Js/Sidebar.js"></script>
</body>

</html>