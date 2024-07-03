<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Pages/Componentes/Css/Sidebar.css">
  <link rel="stylesheet" href="../../Pages/Componentes/Css/Avaliador1.css">

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
            <a href="PesquisaAvancada.php">
              <i class='bx bx-news icon'></i>
              <span class="text nav-text">Pesquisa Avançada</span>
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

  <!-- table = tabela
            table row = linha de tabela
                table header = cabeçalho de tabela
                    table data = dado de tabela -->

  <section class="home">
    <main>
      <aside class="info">
        <div class="aside__content">
          <h1>Tabela de Artigos</h1>
          <p>Total de Trabalhos enviados 4 - Aprovados 0 - Reprovados 0 - Não Avaliados 0</p>
          <table class="content-table">
            <thead>
              <tr></tr>
              <th>Arquivos</th>
              <th>Código</th>
              <th>Título do Artigo</th>
              <th>Data de Submissão</th>
              <th>Instituição</th>
              <th>Avaliar</th>
            </thead>
            <tbody>
              <tr>
                <td><i class='bx bx-export icon'></i></td>
                <td>1</td>
                <td>Direito</td>
                <td>19/04/2022</td>
                <td>Etec</td>
                <td><button id="trigger" class="trigger" onclick="showModal()"><i class='bx bx-highlight icon'></i></button>
                  <div class="modal" id="modal">
                    <div class="modal-content">
                      <span class="close-button" onclick="closeModal()">
                        &times;
                      </span>
                        <table class="content-table">
                          <thead>
                            <tr>
                              <th>Critérios</th>
                              <th>Alto</th>
                              <th>Médio</th>
                              <th>Baixo</th>
                              <th>Nenhuma</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>RESUMO</td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio1" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio1" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio1" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio1" />
                                  </div>
                              </td>

                            </tr>
                            <tr>
                              <td>Palavras-chaves</td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio2" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio2" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio2" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio2" />
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td>Abstract</td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio3" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio3" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio3" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio3" />
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td>Keywords</td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio4" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio4" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio4" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio4" />
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td>Introdução</td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio5" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio5" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio5" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio5" />
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td>Desenvolvimento</td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio6" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio6" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio6" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio6" />
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td>Considerações-finais
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio7" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio7" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio7" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio7" />
                                  </div>
                              </td>
                            </tr>
                            <tr>
                              <td>Referências</td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio8" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio8" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio8" />
                                  </div>
                              </td>
                              <td>
                                <div class="wrapper">
                                  <div class="form-group">
                                    <input type="radio" class="radio" name="theradio8" />
                                  </div>
                              </td>
                            </tr>
                      
              </tr>
            </tbody>
          </table>
          <button id="trigger" class="trigger">Aprovado</button> <button id="trigger" class="trigger">Aprovado com
            correção</button> <button id="trigger" class="trigger">Reprovado</button>
        </div>
        </div>
        </td>
        </tr>
        <tbody>
          <tr>
            <td><i class='bx bx-export icon'></i></td>
            <td>2</td>
            <td>Servico Social</td>
            <td>20/04/2022</td>
            <td>Etec</td>
            <td><button id="trigger" class="trigger" onclick="showModal()"><i class='bx bx-highlight icon'></i></button>
              <div class="modal" id="modal">
                <div class="modal-content">
                  <span class="close-button" onclick="closeModal()">
                    &times;
                  </span>
                  <table class="content-table">
                    <thead>
                      <tr>
                        <th>Critérios</th>
                        <th>Alto</th>
                        <th>Médio</th>
                        <th>Baixo</th>
                        <th>Nenhuma</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>RESUMO</td>
                      <tr>
                        <td>RESUMO</td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio1" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio1" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio1" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio1" />
                            </div>
                        </td>

                      </tr>
                      <tr>
                        <td>Palavras-chaves</td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio2" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio2" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio2" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio2" />
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Abstract</td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio3" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio3" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio3" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio3" />
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Keywords</td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio4" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio4" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio4" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio4" />
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Introdução</td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio5" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio5" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio5" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio5" />
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Desenvolvimento</td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio6" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio6" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio6" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio6" />
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Considerações-finais
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio7" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio7" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio7" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio7" />
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Referências</td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio8" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio8" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio8" />
                            </div>
                        </td>
                        <td>
                          <div class="wrapper">
                            <div class="form-group">
                              <input type="radio" class="radio" name="theradio8" />
                            </div>
                        </td>
                      </tr>

                  </table>
                  <button id="trigger" class="trigger">Aprovado</button> <button id="trigger" class="trigger">Aprovado
                    com correção</button> <button id="trigger" class="trigger">Reprovado</button>

                </div>
              </div>

            </td>
          </tr>
        </tbody>
        <tr>
          <td><i class='bx bx-export icon'></i></td>
          <td>3</td>
          <td>Psicologo</td>
          <td>21/04/2022</td>
          <td>Visitante</td>
          <td><button id="trigger" class="trigger" onclick="showModal()"><i class='bx bx-highlight icon'></i></button>
            <div class="modal" id="modal">
              <div class="modal-content">
                <span class="close-button" onclick="closeModal()">
                  &times;
                </span>
                <table class="content-table">
                  <thead>
                    <tr>
                      <th>Critérios</th>
                      <th>Alto</th>
                      <th>Médio</th>
                      <th>Baixo</th>
                      <th>Nenhuma</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>RESUMO</td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio1" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio1" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio1" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio1" />
                          </div>
                      </td>

                    </tr>
                    <tr>
                      <td>Palavras-chaves</td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio2" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio2" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio2" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio2" />
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Abstract</td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio3" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio3" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio3" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio3" />
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Keywords</td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio4" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio4" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio4" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio4" />
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Introdução</td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio5" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio5" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio5" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio5" />
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Desenvolvimento</td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio6" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio6" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio6" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio6" />
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Considerações-finais
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio7" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio7" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio7" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio7" />
                          </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Referências</td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio8" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio8" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio8" />
                          </div>
                      </td>
                      <td>
                        <div class="wrapper">
                          <div class="form-group">
                            <input type="radio" class="radio" name="theradio8" />
                          </div>
                      </td>
                    </tr>
                </table>
                <button id="trigger" class="trigger">Aprovado</button> <button id="trigger" class="trigger">Aprovado com
                  correção</button> <button id="trigger" class="trigger">Reprovado</button>
              </div>
            </div>
          </td>
        </tr>
        </tbody>
        </table>
        </div>
      </aside>
    </main>
  </section>
  <script src="../../Pages/Componentes/Js/Sidebar.js"></script>
  <script src="../../Pages/Componentes/Js/Modal.js"></script>
</body>

</html>