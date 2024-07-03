<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Pages/Componentes/Css/Sidebar.css">
  <link rel="stylesheet" href="../../Pages/Componentes/Css/CapaSite.css">
  <link rel="stylesheet" href="../../Pages/Componentes/Css/ModalLogin3.css">
  <link rel="stylesheet" href="../../Pages/Componentes/Css/Cadastro3.css">
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
    <header id="home">
      <div class="img-capa">
        <img src="../../Pages/Componentes/Img/CapaRevac.jpg">
      </div>
      <div class="capatexto">
        <h1>REVAC</h1>
        <p>Revista Virtual de Artigos Científicos</p>
      </div>

      <!--Fundo bloqueado do Modal Login Cadastro-->
      <div class="overlay">
        <div class="modal">
          <button class="btn-fechar" id="close-modal-btn"><i class="fa fa-times"></i></button>

          <!-- Parte do Formulario de Login -->
          <div class="form-wrapper" id="wrapper-login">
            <div class="content-wrapper" id="content-signin">
              <form action="../../Banco/login.php" class="form" method="POST">
                <h1 class="text-center">Login</h1>
                <br>
                <br>
                <div class="input-user">
                  <label for="username">Usuário ou E-mail</label>
                  <input type="text" name="email" id="username" placeholder="Digite o nome Usuário" />
                </div>
                <br>
                <div class="input-senha">
                  <label for="position">Senha</label>
                  <input type="password" name="senha" id="password" placeholder="Digite a sua Senha" />
                  <span></span>
                </div>
                <br>
                <div class="form-link">
                  <a href="#" class="forgot-senha">Esqueci minha Senha</a>
                </div>
                <br>
                <div class="btn-login">
                  <input type="submit" value="Login" class="btn">
                </div>
                <br>
                <br>
                <div class="link-login">
                  <p>Não possui uma Conta ?<a href="#wrapper-signup"> Cadastre-se</a></p>
                </div>
              </form>
            </div>
          </div>
          <!-- Fim do Formulario de Login -->

          <!-- Começo dos Passos do Formulario de Cadastro -->
          <div class="form-wrapper2" id="wrapper-signup">
            <div class="content-wrapper" id="content-signin">
              <form action="../../Banco/cadastro.php" class="form" method="POST">
                <h1 class="text-center">Cadastro</h1>

                <!-- Barrinha de Progresso -->
                <div class="progressbar">
                  <div class="progress" id="progress"></div>

                  <div class="progress-step progress-step-active" data-title=""></div>
                  <div class="progress-step" data-title=""></div>
                  <div class="progress-step" data-title=""></div>
                </div>

                <!-- Passos -->

                <!-- Formulario 1 User Data e Sexo -->
                <div class="form-step form-step-active" id="form-1">
                  <div class="input-group">
                    <label for="username">Nome completo</label>
                    <input type="text" name="name" id="username" placeholder="Digite seu nome completo" />
                  </div>
                  <div class="input-group">
                    <label for="position">Data de Nascimento</label>
                    <input type="date" name="data" id="email" />
                  </div>
                  <div class="input-group">
                    <label for="dob">Sexo</label>
                    <select name="sexo" required>
                      <option disabled selected>Qual o seu sexo ?</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>
                  <div class="">
                    <a class="btn btn-next width-50 ml-auto">Avançar</a>
                  </div>
                  <br>
                  <div class="link">
                    <p>Já possui uma conta ?<a href="#wrapper-login"> Login</a></p>
                  </div>
                </div>

                <!-- Formulario 2 Email e Senha -->
                <div class="form-step" id="form-2">
                  <div class="input-group">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="name" placeholder="Digite seu e-mail" />
                  </div>
                  <div class="input-group">
                    <label for="Senha">Senha</label>
                    <input type="text" name="senha" id="instituicao" placeholder="Digite sua senha" />
                  </div>
                  <div class="input-group">
                    <label for="Senha">Confirmar Senha</label>
                    <input type="text" name="" id="instituicao" placeholder="Digite sua senha novamente" />
                  </div>
                  <div class="btns-group">
                    <a class="btn btn-prev">Voltar</a>
                    <input type="submit" value="Confirmar" class="btn btn-next">
                  </div>
                  <br>
                  <div class="link">
                    <p>Já possui uma conta ?<a href="#wrapper-login"> Login</a></p>
                  </div>
                </div>

                <!-- Formulario 3 Confirmação do Cadastro -->
                <div class="form-step" id="form-3">
                  <div class="mensagem">
                    <div class="info">
                      <i class="fa fa-info-circle" aria-hidden="true"></i><span> Sua conta
                        foi criada com sucesso!</span>
                    </div>
                    <div class="info-2">
                      <p>Obrigado(a) pelo seu tempo.
                    </div><br>
                    <div class="info-3">
                      Só mais uma coisa. Nós iremos reiniciar sua página para você efetuar o seu
                      login.
                      </p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </header>
  </section>
  <script src="../../Pages/Componentes/Js/Sidebar.js"></script>
  <script src="../../Pages/Componentes/Js/ModalLogin4.js"></script>
  <script src="../../Pages/Componentes/Js/Cadastro.js"></script>
</body>

</html>