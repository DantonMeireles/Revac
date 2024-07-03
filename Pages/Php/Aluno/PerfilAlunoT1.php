<?php
require_once('../../../Session/validasession.php');

if($tipo != '1'){
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
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Componentes/Css/Sidebar.css">
  <link rel="stylesheet" href="../../Componentes/Css/PerfilT.css">
  <link rel="stylesheet" href="../../Componentes/Css/Perfil.css">


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
  <a href="index.html"></a>
  <!-- Inicio da navbar -->
  <nav class="sidebar close">
    <header>
      <!-- Inicio perfil menu lateral -->
      <!-- Ver Limite de Caracter-->
      <div class="image-text">
        <span class="image">
          <a href="">
            <img src="<?php echo $user["Foto"]?>" alt="Configurações de Perfil">
          </a>
        </span>
        <div class="text logo-text">
          <span class="name"><?php echo $user["Nome"]?></span>
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

          <!--<span class="mode-text text">Escuro</span>-->
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
    <div class="content">
      <div class="container-profile">
        <div class="profile-header">
          <div class="profile-img">
            <img src="../../Componentes/Img/Bruno.jpg" width="200" alt="">
          </div>
          <div class="profile-nav-info">
            <h3 class="user-name">Bruno Oliveira de Jesus</h3>
            <div class="address">
              <p class="state">Aluno </p>
            </div>
          </div>
          <div class="action">
            <div class="profilem" onclick="menudToggle();">
              <div class="profile-option">
                <div class="config">
                  <i class="bx bx-cog"></i>
                </div>
                <div class="menud">
                  <ul>
                    <!--<li>
                    <i class='bx bx-user-circle icon'></i><a href="#">Meu Perfil</a>
                  </li>-->
                  <li class="nav-link">
                      <a button type="button" onclick="editar()" class="btnEditar">
                        <i class='bx bx-edit icon'><a>Informações</a></i>
                      </a>
                    </li>
                    <li class="nav-link">
                    <a button type="button" onclick="editar()" class="btnEditar">
                        <i class='bx bx-wrench icon'><a>Configurações</a></i>
                      </a>
                    </li>
                    <li class="nav-link">
                    <a button type="button" onclick="editar()" class="btnEditar">
                        <i class='bx bx-add-to-queue icon'><a>Sair</a></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="main-bd">
          <div class="left-side">

          </div>
          <div class="right-side">
            <div class="nav">
              <ul>
                <li onclick="tabs(0)" class="user-perfil">Informações do Perfíl</li>
                <li onclick="tabs(1)" class="user-post">Meus Artigos</li>
              </ul>
            </div>
            <div class="profile-body">
              <div class="profile-perfil tab">
                <div class="content">
                  <form id="myForm" enctype="multipart/form-data">

                    <div class="card-content-display">
                      <div class="foto-div">
                        <div class="imgEsenha-div">
                          <button onclick="alterar()">Alterar senha</button>
                        </div>
                        <input type="file" id="nova-foto" name="foto" style="display: none" />
                      </div>
                      <div class="info-div">
                        <div class="info-esquerda">
                          <div class="quadrante">
                            <ul>
                              <div class="label-Nome">
                                <label>Nome Completo</label>
                              </div>

                              <input class="Nome-input" type="text" disabled name="Nome" id="Nome" />

                            </ul>
                          </div>
                          <div class="quadrante">
                            <ul>
                              <div class="label-Email">
                                <label>E-Mail</label>
                              </div>
                              <input class="Email-input" type="text" name="Email" disabled id="Email" />

                            </ul>
                          </div>
                        </div>
                        <div class="info-direita">
                          <div class="quadrante">
                            <ul>
                              <div class="label-Instituição">
                                <label>Instituição/Afiliação</label>
                              </div>

                              <select class="Instituicao-input" name="Instituicao" disabled id="Instituicao">
                                <option value="São Vicente">Etec Ruth Cardoso</option>
                              </select>

                            </ul>
                          </div>
                          <div class="quadrante">
                            <ul>
                              <div class="label-Estado">
                                <label>Estado</label>
                              </div>
                              <select class="Estado-input" name="estado" disabled id="estado">

                                <option value="Alagoas">Alagoas</option>
                                <option value="Amapá">Amapá</option>
                                <option value="Amazonas">Amazonas</option>
                                <option value="Bahia">Bahia</option>
                                <option value="Ceará">Ceará</option>
                                <option value="Distrito Federal">Distrito Federal</option>
                                <option value="Espírito Santo">Espírito Santo</option>
                                <option value="Goías">Goiás</option>
                                <option value="Maranhão">Maranhão</option>
                                <option value="Mato Grosso">Mato Grosso</option>
                                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                                <option value="Minas Gerais">Minas Gerais</option>
                                <option value="Pará">Pará</option>
                                <option value="Paraíba">Paraíba</option>
                                <option value="Paraná">Paraná</option>
                                <option value="Pernambuco">Pernambuco</option>
                                <option value="Piauí">Piauí</option>
                                <option value="Rio de Janeiro">Rio de Janeiro</option>
                                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                                <option value="Rondônia">Rondônia</option>
                                <option value="Roraima">Roraima</option>
                                <option value="Santa Catarina">Santa Catarina</option>
                                <option value="São Paulo">São Paulo</option>
                                <option value="Sergipe">Sergipe</option>
                                <option value="Tocantins">Tocantins</option>
                              </select>

                            </ul>
                          </div>
                        </div>

                        <div class="info-central">



                        </div>
                      </div>
                    </div>

                    <span class="aviso" id="msgErro"></span>

                    <div class="card-footer">
                      <div class="edição-btns">
                        <button type="button" onclick="salvar()" class="btnSalvar">
                          Salvar alterações
                        </button>
                        <button type="button" onclick="cancelarEdit()" class="btnCancelar">
                          Cancelar edição
                        </button>
                        <button type="button" onclick="excluir()" class="btnExcluir">
                        Excluir perfil
                      </button>
                      </div>

                    </div>
                </div>

              </div>

              <div class="salvar">
                <div class="salvar-modal">
                  <h2>Tem certeza que deseja manter as alterações?</h2>
                  <div class="modal-button-div">
                    <button type="submit">Confirmar</button>
                    <button type="button" onclick="closeSalvar()" style="background: red">
                      Recusar
                    </button>
                  </div>
                </div>
              </div>
              <div class="excluir">
                <div class="Excluir-modal">
                  <h2>Tem certeza que deseja excluir seu perfil?</h2>
                  <div class="modal-button-div">
                    <button type="button"><a href="../Controller/php/deleteConta.php?delete=true" style="color: white;text-decoration:none;">Confirmar</a></button>
                    <button type='button' onclick="closeExcluir()" style="background: red">
                      Cancelar
                    </button>
                  </div>
                </div>
              </div>
              </form>
              <div class="alterar-senha">
                <div class="alterar-modal">
                  <form id="formSenha">
                    <h2>Alteração de Senha</h2>
                    <div class="alterar-input-container">
                      <ul>
                        <li>
                          <div class="alterar-input-div">
                            <label>Senha atual</label>
                            <input type="password" name="senhaAtual" />
                          </div>
                        </li>
                        <br />

                        <li>
                          <div class="alterar-input-div">
                            <label>Nova senha</label>
                            <input type="password" name="senha" />
                          </div>
                        </li>
                        <br />

                        <li>
                          <div class="alterar-input-div">
                            <label>Confirmar nova senha</label>
                            <input type="password" name="confirmSenha" />
                          </div>
                        </li>
                      </ul>
                      <p class="aviso-alterar" id="msgSenha"></p>
                    </div>
                    <div class="alterar-button-div">
                      <button type="button" onclick="closeAlterar()" class="alterar-cancelar">
                        Cancelar
                      </button>
                      <button type="submit" class="alterar-confirmar">Confirmar</button>
                    </div>
                  </form>

                </div>

              </div>
              <div class="profile-posts tab">
                <div class="div_center">
                  <ul class="Post-Caixas">
                    <li>
                      <span class="Post_Conteiner">
                        <h1>NOME DO ARTIGO: A forma como o ovo é beneficiente para a nossa saúde </h1>
                        <h2>AUTOR(ES):</h2>
                        <h2>ÁREA:</h2>
                        <h2>SUBÁREA:</h2>
                        <div class="Post_Rodape">
                          <a href="https://docs.google.com/document/d/e/2PACX-1vSLWId8LrFVZuJMWXYa68QdOrzinh6-VIjwBf6HfiC_I9SnWNvcEinonfXoQhc_yvST1a-Ye-dfkFaS/pub">Leia o artigo completo</a>
                          <span class="Post_Data">Data de publicação: <strong>08/04/2022</strong></span>
                        </div>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../../Componentes/Js/PerfilT.js"></script>
  <script src="../../Componentes/Js/Sidebar.js"></script>
  <script src="../../Componentes/Js/Perfil1.js"></script>
</body>