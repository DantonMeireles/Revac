<?php
require_once('../../../Session/validasession.php');

if($tipo != '2'){
    header('location: ../../../controller/rotas.php');
}
require_once("../../../Controller/conexao.php");

$sql = $conn->prepare("SELECT * FROM vw_dados_usuario WHERE id = ?");

$sql->execute(array($id));

if($sql){
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
	<link rel="stylesheet" href="../../Componentes/Css/CapaSite.css">
  <link rel="stylesheet" href="../../Componentes/Css/Cadastro.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
          <span class="name"> <u> <?php echo $user["Nome"]?> </u> </span>
          <span class="profession"><?php echo $user["tipo"]?></span>
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
          <li class="nav-link">
            <a href="Avaliador.php">
              <i class='bx bx-edit-alt icon'></i>
              <span class="text nav-text">Avaliar Artigo</span>
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
          <span class="mode-text text"></span>

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
    <header id="home">
      <div class="img-capa">
        <img src="../../Componentes/Img/CapaRevac.jpg">
      </div>
      <div class="capatexto">
        <h1>REVAC</h1>
        <p>Revista Virtual de Artigos Científicos</p>
      </div>
    </header>
  </section>
  <script src="../../Componentes/Js/Sidebar1.js"></script>
  <script src="../../Componentes/Js/ModalLogin.js"></script>
  <script src="../../Componentes/Js/Cadastro.js"></script>
</body>

</html>