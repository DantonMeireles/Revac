<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Componentes/Css/Sidebar.css">
  <link rel="stylesheet" href="../../Componentes/Css/CapaSite.css">
  <link rel="stylesheet" href="../../Componentes/Css/Cadastro.css">

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
            <img src="../../Componentes/Img/Bruno.jpg" alt="Configurações de Perfil">
          </a>
        </span>
        <div class="text logo-text">
          <span class="name"> <u> Bruno Oliveira </u> </span>
          <span class="profession">Aluno</span>
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
          <a href="Logout.php">
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

  <form action="#" class="form">
    <h1 class="text-center">Cadastro</h1>
    <!-- Progress bar -->
    <div class="progressbar">
      <div class="progress" id="progress"></div>

      <div class="progress-step progress-step-active" data-title=""></div>
      <div class="progress-step" data-title=""></div>
      <div class="progress-step" data-title=""></div>
    </div>

    <!-- Steps -->
    <!-- Formulario 1-->
    <div class="form-step form-step-active" id="form-1">
      <div class="input-group">
        <label for="username">Usuário</label>
        <input
          type="text"
          name="username"
          id="username"
          placeholder="Digite o nome Usuário"
        />
      </div>
      <div class="input-group">
        <label for="position">E-mail</label>
        <input
          type="text"
          name="email"
          id="email"
          placeholder="Digite o seu E-mail"
        />
      </div>
      <div class="input-group">
        <label for="password">Senha</label>
        <input
          type="password"
          name="password"
          id="password"
          placeholder="Digite sua senha"
        />
      </div>
      <div class="input-group">
        <label for="confirmPassword">Confirmar Senha</label>
        <input
          type="password"
          name="confirmPassword"
          id="confirmPassword"
          placeholder="Digite sua senha"
        />
      </div>
      <div class="">
        <a href="#" class="btn btn-next width-50 ml-auto">Next</a>
      </div>
    </div>
    <!-- Formulario 2-->
    <div class="form-step" id="form-2">
      <div class="input-group">
        <label for="name">Nome</label>
        <input
          type="text"
          name="name"
          id="name"
          placeholder="Digite seu nome"
        />
      </div>
      <div class="input-group">
        <label for="instituicao">Instituição</label>
        <input
          type="text"
          name="instituicao"
          id="instituicao"
          placeholder="Digite o nome da instituição"
        />
      </div>

      <!--
        <div class="input-group">
        <label for="dob">País</label>
        <select required>
          <option disabled selected>Selecione seu País</option>
          <option>Afeganistão</option>
          <option>África do Sul</option>
          <option>Albânia</option>
          <option>Alemanha</option>
          <option>Andorra</option>
          <option>Angola</option>
          <option>Antiga e Barbuda</option>
          <option>Arábia Saudita</option>
          <option>Argélia</option>
          <option>Argentina</option>
          <option>Arménia</option>
          <option>Austrália</option>
          <option>Áustria</option>
          <option>Azerbaijão</option>
          <option>Bahamas</option>
          <option>Bangladexe</option>
          <option>Barbados</option>
          <option>Barém</option>
          <option>Bélgica</option>
          <option>Belize</option>
          <option>Benim</option>
          <option>Bielorrússia</option>
          <option>Bolívia</option>
          <option>Bósnia e Herzegovina</option>
          <option>Botsuana</option>
          <option>Brasil</option>
          <option>Brunei</option>
          <option>Bulgária</option>
          <option>Burquina Faso</option>
          <option>Burúndi</option>
          <option>Butão</option>
          <option>Cabo Verde</option>
          <option>Camarões</option>
          <option>Camboja</option>
          <option>Canadá</option>
          <option>Catar</option>
          <option>Cazaquistão</option>
          <option>Chade</option>
          <option>Chile</option>
          <option>China</option>
          <option>Chipre</option>
          <option>Colômbia</option>
          <option>Comores</option>
          <option>Congo-Brazzaville</option>
          <option>Coreia do Norte</option>
          <option>Coreia do Sul</option>
          <option>Cosovo</option>
          <option>Costa do Marfim</option>
          <option>Costa Rica</option>
          <option>Croácia</option>
          <option>Cuaite</option>
          <option>Cuba</option>
          <option>Dinamarca</option>
          <option>Dominica</option>
          <option>Egito</option>
          <option>Emirados Árabes Unidos</option>
          <option>Equador</option>
          <option>Eritreia</option>
          <option>Eslováquia</option>
          <option>Eslovénia</option>
          <option>Espanha</option>
          <option>Essuatíni</option>
          <option>Estado da Palestina</option>
          <option>Estados Unidos</option>
          <option>Estónia</option>
          <option>Etiópia</option>
          <option>Fiji</option>
          <option>Filipinas</option>
          <option>Finlândia</option>
          <option>França</option>
          <option>Gabão</option>
          <option>Gâmbia</option>
          <option>Gana</option>
          <option>Geórgia</option>
          <option>Granada</option>
          <option>Grécia</option>
          <option>Guatemala</option>
          <option>Guiana</option>
          <option>Guiné</option>
          <option>Guiné Equatorial</option>
          <option>Guiné-Bissau</option>
          <option>Haiti</option>
          <option>Honduras</option>
          <option>Hungria</option>
          <option>Iémen</option>
          <option>Ilhas Marechal</option>
          <option>Índia</option>
          <option>Indonésia</option>
          <option>Irão</option>
          <option>Iraque</option>
          <option>Irlanda</option>
          <option>Islândia</option>
          <option>Israel</option>
          <option>Itália</option>
          <option>Jamaica</option>
          <option>Japão</option>
          <option>Jibuti</option>
          <option>Jordânia</option>
          <option>Laus</option>
          <option>Lesoto</option>
          <option>Letónia</option>
          <option>Líbano</option>
          <option>Libéria</option>
          <option>Líbia</option>
          <option>Listenstaine</option>
          <option>Lituânia</option>
          <option>Luxemburgo</option>
          <option>Macedónia do Norte</option>
          <option>Madagáscar</option>
          <option>Malásia</option>
          <option>Maláui</option>
          <option>Maldivas</option>
          <option>Mali</option>
          <option>Malta</option>
          <option>Marrocos</option>
          <option>Maurícia</option>
          <option>Mauritânia</option>
          <option>México</option>
          <option>Mianmar</option>
          <option>Micronésia</option>
          <option>Moçambique</option>
          <option>Moldávia</option>
          <option>Mónaco</option>
          <option>Mongólia</option>
          <option>Montenegro</option>
          <option>Namíbia</option>
          <option>Nauru</option>
          <option>Nepal</option>
          <option>Nicarágua</option>
          <option>Níger</option>
          <option>Nigéria</option>
          <option>Noruega</option>
          <option>Nova Zelândia</option>
          <option>Omã</option>
          <option>Países Baixos</option>
          <option>Palau</option>
          <option>Panamá</option>
          <option>Papua Nova Guiné</option>
          <option>Paquistão</option>
          <option>Paraguai</option>
          <option>Peru</option>
          <option>Polónia</option>
          <option>Portugal</option>
          <option>Quénia</option>
          <option>Quirguistão</option>
          <option>Quiribáti</option>
          <option>Reino Unido</option>
          <option>República Centro-Africana</option>
          <option>República Checa</option>
          <option>República Democrática do Congo</option>
          <option>República Dominicana</option>
          <option>Roménia</option>
          <option>Ruanda</option>
          <option>Rússia</option>
          <option>Salomão</option>
          <option>Salvador</option>
          <option>Samoa</option>
          <option>Santa Lúcia</option>
          <option>São Cristóvão e NevesSão Marinho</option>
          <option>São Marinho</option>
          <option>São Tomé e Príncipe</option>
          <option>São Vicente e Granadinas</option>
          <option>Seicheles</option>
          <option>Senegal</option>
          <option>Serra Leoa</option>
          <option>Sérvia</option>
          <option>Singapura</option>
          <option>Síria</option>
          <option>Somália</option>
          <option>Sri Lanca</option>
          <option>Sudão</option>
          <option>Sudão do Sul</option>
          <option>Suécia</option>
          <option>Suíça</option>
          <option>Suriname</option>
          <option>Tailândia</option>
          <option>Taiuã</option>
          <option>Tajiquistão</option>
          <option>Tanzânia</option>
          <option>Timor-Leste</option>
          <option>Togo</option>
          <option>Tonga</option>
          <option>Trindade e Tobago</option>
          <option>Tunísia</option>
          <option>Turcomenistão</option>
          <option>Turquia</option>
          <option>Tuvalu</option>
          <option>Ucrânia</option>
          <option>Uganda</option>
          <option>Uruguai</option>
          <option>Usbequistão</option>
          <option>Vanuatu</option>
          <option>Vaticano</option>
          <option>Venezuela</option>
          <option>Vietname</option>
          <option>Zâmbia</option>
          <option>Zimbábue</option>
        </select>
      </div>
      -->
      
      <div class="btns-group">
        <a href="#" class="btn btn-prev">Previous</a>
        <a href="#" class="btn btn-next">Next</a>
      </div>
    </div>
    <!-- Formulario 3-->
    <div class="form-step" id="form-3">
      <div class="Radio">
        <input
          type="radio"
          onclick="OpLeitor()"
          name="tipoUsuario"
          value=""
        />
        <label for="OpLeitor">Leitor</label>
        <input
          type="radio"
          onclick="OpAvaliador()"
          name="tipoUsuario"
          value=""
        />
        <label for="OpAvaliador">Avaliador</label>
      </div>

      <!--Fim Radio-->

      <div class="Divleitor">
        <div class="main-user">
          <img src="" alt="" class="preview" />
          <div class="textDiv">
            <div class="texto">
              <h3>Adicione uma foto</h3>

              <div class="confirmação-user">
                <label class="button-user" for="fotoArquivo">Selecionar arquivo</label>
                <input type="file" name="image" class="custom-file-input" id="fotoArquivo" style="display: none" />
              </div>
            </div>
            </div>
          </div>
        </div>

        <!--Fim Leitor-->

        <div class="DivAvaliador">
          <div class="avaliador-foto">
            <img src="" alt="" class="preview2">
            <ul>
              <li>
                <h3>Adicione uma foto de perfil</h3>
              </li>
            </ul>
            <span id="confirmação2">Nenhum arquivo selecionado</span>
            <label class="button-user" for="fotoArquivo">
              Escolher arquivo
            </label>
          </div>
          <div class="arquivosAvaliador">
            <label for="certificado">
              <div class="area-avaliador">
                <div class="upload">
                  Clique aqui para selecionar um arquivo em pdf
                </div>
              </div>
            </label>
          </div>
        </div>
        <!-- Fim Avaliador-->
        <div class="btns-group">
          <a href="#" class="btn btn-prev">Previous</a>
          <a href="login.html" class="btn">Submit</a>
        </div>
      </div>
  </form>
  </div>
  </div>
  <script src="../../Componentes/Js/Sidebar.js"></script>
  <script src="../../Componentes/Js/Cadastro.js"></script>
</body>

</html>