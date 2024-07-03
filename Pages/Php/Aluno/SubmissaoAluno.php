<?php
require_once('../../../Session/validasession.php');

if ($tipo != '1') {
  header('location: ../../../controller/rotas.php');
}
require_once("../../../Controller/conexao.php");

$sql = $conn->prepare("SELECT * FROM vw_dados_usuario WHERE id = ?");

$sql->execute(array($id));

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
  <link rel="stylesheet" href="../..//Componentes/Css/Sidebar.css">
  <link rel="stylesheet" href="../..//Componentes/Css/CapaSite.css">
  <link rel="stylesheet" href="../..//Componentes/Css/FormSubmeter.css">
  <link rel="stylesheet" href="../..//Componentes/Css/Upload2.css">

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
          <a href="PerfilAlunoT1.php">
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
            <a href="HomeAluno.php">
              <i class='bx bx-dock-left icon'></i>
              <span class="text nav-text">Capa</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="ApresentacaoAluno.php">
              <i class='bx bx-file icon'></i>
              <span class="text nav-text">Apresentação</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="RegrasAluno.php">
              <i class='bx bx-task icon'></i>
              <span class="text nav-text">Regras</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="FazerArtigoAluno.php">
              <i class='bx bx-copy-alt icon'></i>
              <span class="text nav-text">Como fazer um artigo</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="PesquisaAvancadaAluno.php">
              <i class='bx bx-news icon'></i>
              <span class="text nav-text">Pesquisa Avançada</span>
            </a>
          </li>
          <li class="nav-link">
            <a href="SubmissaoAluno.php">
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

  <!--Inicio do conteudo-->
  <section class="home">
    <form action="" method="POST">
      <h1> Submissão de Artigo </h1>

      <fieldset>

        <legend><span class="number">1</span> Informaçoes do Artigo</legend>

        <label for="nomeartigo">Nome do Artigo:</label>
        <input type="text" id="nomeartigo" name="user_name">

        <label for="nomeautor">Nome dos Autores:</label>
        <input type="text" id="nomeautor" name="user_email">

        <label for="nomeorientador">Nome dos Orientadores:</label>
        <input type="text" id="nomeorientador" name="user_email">

        <label for="nomecolaborador">Nome dos Colaboradores:</label>
        <input type="text" id="nomecolaborador" name="user_email">

        <label for="descricaoartigo">Descrição do Artigo:</label>
        <input type="text" id="descricaoartigo" name="user_email">


        <fieldset>

          <legend><span class="number">2</span> Área e Subárea</legend>

          <label for="job">Selecione a Área e Subarea desejadas :</label>
          <select id="job" name="user_job">
            <optgroup label="CIÊNCIAS SOCIAIS APLICADAS">
              <option value="administracao">Administração</option>
              <option value="ciencias_economicas">Ciências Econômicas</option>
              <option value="ciencias_contabeis">Ciências Contábeis</option>
              <option value="servico_social">Serviço Social</option>
              <option value="arquitetura_e_urbanismo">Arquitetura e Urbanismo</option>
              <option value="hotelaria">Hotelaria</option>
            </optgroup>
            <optgroup label="CIÊNCIAS BIOLÓGICAS E SAÚDE">
              <option value="fisioterapia">Fisioterapia</option>
              <option value="educacao_fisica">Educação Física</option>
              <option value="nutricao">Nutrição</option>
              <option value="medicina">Medicina</option>
              <option value="enfermagem">Enfermagem</option>
              <option value="farmacia">Farmácia</option>
              <option value="biomedicina">Biomedicina</option>
              <option value="medicina_veterinaria">Medicina Veterinária</option>
              <option value="ciencias_biologicas">Ciências Biológicas</option>
            </optgroup>
            <optgroup label="CIÊNCIAS HUMANAS E SOCIAIS">
              <option value="ciencias_sociais">Ciências Sociais</option>
              <option value="direito">Direito</option>
              <option value="letras">Letras</option>
              <option value="psicologiafreelancer">Psicologia</option>
            </optgroup>
            <optgroup label="CIÊNCIAS EXATAS E DA TERRA">
              <option value="computacao_e_informatica">Computação e Informática</option>
              <option value="engenharias">Engenharias</option>
              <option value="ciencias_agrarias">Ciências Agrárias</option>
            </optgroup>
          </select>
        </fieldset>
        <fieldset>

          <legend><span class="number">3</span> Encaminhar artigo</legend>


        </fieldset>


        <!--<button type="submit">Enviar Artigo</button>-->

    </form>
    <div class="postagem">
      <div class="wrapper">
        <form id="postagem" action="#">
          <input class="file-input" type="file" name="file" hidden>
          <i class="fas fa-cloud-upload-alt"></i>
          <p>Mandar Artigo</p>
        </form>
        <section class="progress-area"></section>
        <section class="uploaded-area"></section>
      </div>
    </div>
    <button type="submit">Enviar Artigo</button>
    </div>
    </div>
  </section>
  <script src="../../Componentes/Js/Sidebar.js"></script>
  <script src="../..//Componentes/Js/Upload.js"></script>
</body>

</html>