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
	<link rel="stylesheet" href="../../Componentes/Css/FazerArtigo.css">

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
            <img src="<?php echo $user["Foto"]?>" alt="Configurações de Perfil">
          </a>
        </span>
        <div class="text logo-text">
          <span class="name"> <u> <?php echo $user["Nome"]?></u> </span>
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
              <div class="text-container">
                 <h1>Como produzir um bom artigo científico</h1>
                  <p>O artigo científico pode parece algo difícil, mas com algumas dicas e estudo é possível produzir uma ótima pesquisa.
                  Irei citar agora algumas informações que podem ajuda na hora de produzir o seu artigo.
                  </p>
                  <br>
                  <h1>Vamos à lista:</h1>
                  <li>
                          Torne a escrita objetiva;
                  </li>
                  <li>
                      Elimine os erros de gramatica;
                  </li>
                  <li>
                      Estude a revista onde será publicado;
                  </li>
                  <li>
                      Leia outros artigos com o mesmo tema;
                  </li>
                <li>
                      Tomar cuidado com o plagio.
                  </li>
                  <br>
                  <h1>Conheça a diferença entre os estilos de artigo</h1>
                  <p>Existem três estilos para a escrita de um artigo o informal, jornalístico e acadêmico.</p>
                  <br>
                  <h1>Informal</h1>
                  <p>A escrita informal é uma escrita que fica mais próxima do dia a dia do leitor que convive cercado por linguagem coloquial (gírias, abreviações e etc).</p>
                  <br>
                  <h1>Jornalístico</h1>
                  <p>A escrita Jornalística é uma escrita para chama atenção do publico utilizando fatos sobre o assunto e dados comprovados.</p>
                  <br>
                  <h1>Acadêmico</h1>
                  <p>A escrita acadêmica é uma escrita para expor o conhecimento que foi adquirido com a pesquisa.</p>
                  <br>
                  <h1>Entender a diferença entre voz passiva e voz ativa</h1>
                  <p>	Isso é algo bem simples de entender, voz ativa o sujeito pratica a ação que esta sendo expressada pelo verbo e a passiva sofre a ação.</p>
                  <h3>Exemplos:</h3>
                  <li>
                      <b>Voz ativa:</b> O professor reprovou Cristiano 
                  </li>
                  <li>
                      <b>Voz passiva:</b> O Cristiano foi reprovado
                  </li>
                  <br>
                  <h1>Como escolher o tipo de pesquisa</h1>
                  <p>Para descobrir o tipo de pesquisa, a pessoa (pesquisador) precisa saber qual o objetivo do trabalho que esta sendo produzido, o tipo de abordagem que ela deseja usa, entre outras coisas que vão auxiliar no trabalho.</p>
                  <br>
                  <h1>Normas ABNT</h1>
                  <p>Sempre importante lembrar-se de dar uma olha na estrutura ABNT para que consiga usa uma forma adequada e caso o artigo seja para uma revista especializada é bom olha a folha de estilo que ela quer.</p>
                  <br>
                  <h1>Estrutura dos Artigos.</h1>
                  <li>
                      Titulo: Deve ser algo claro e fácil de entender sobre oque é o artigo, precisa ter palavras chaves. 
                  </li>
                  <li>
                      Identificação dos autores: Após o titulo de ser mostrado o nome ou os nomes dos autores, além do nome precisa ter a qualificação profissional o local onde a pesquisa foi feita e por final o e-mail de contato.
                  </li>
                  <li>
                      Epigrafe: Uma citação a escolha do autor.
                  </li>
                  <li>
                      Resumo e Abstract: Resumo é o pequeno texto que ira abordar o tema e mostra seu objetivo, a metodologia que foi usada para produzir e os resultados disso.
                  </li>
                  <li>
                      Palavras chaves: São aquelas que representam o conteúdo da pesquisa, é recomendado usa pelo menos 3 palavras chaves.
                  </li>
                  <li>
                      Introdução: A introdução tem como objetivo mergulhar o leitor no tema do artigo científico, nas questões, nos principais conceitos abordados e no trabalho realizado sobre o tema até o momento. Lembre-se, deve ser claro, conciso e deve descrever os objetivos do trabalho.
                  </li>
                  <li>
                      Material e métodos: Os autores devem descrever o tipo e o número de observações e os métodos usados para coleta, registro e avaliação de dados. Após descrever o método utilizado, deve informar ao leitor os detalhes dos resultados nos quais o artigo científico se baseia, focando apenas no que for relevante.
                  </li>
                  <li>
                      Análise de resultados: A análise de resultados é relatada de forma mais sistemática e organizada, ressalta-se a importância e significância de determinados resultados que podem ser mais bem avaliados por meio de análise estatística.
                  </li>
                  <li>
                      Discussão: discussão deve ser mostrada às observações dos autores sobre o tema do artigo, podendo ser usado para comparação, todos os dados encontrados sobre a pesquisa são discutidos longamente podendo ser mais ou menos extensos, dependendo do assunto estudado no artigo científico.
                  </li>
                  <li>
                      Conclusão: A conclusão é para mostra o resultado do que foi estudada de forma concisa e clara, uma coisa importante na conclusão deve ser citadas até mesmo aquelas pesquisas que não chegou no resultado esperado.
                  </li>
                  <li>
                      Referências bibliográficas: Após todo esse processo chegamos às referências bibliográficas que nada mais é todas que as referencias de todas as pesquisas e citações do trabalho.
                  </li>
                  <br>
                  <hr></hr>
                  <h3>Referências: </h3>
                  <li>Formato. CONIC. Disponível em: https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2021&act=normas.</li><br>
                  <li>O que é um artigo científico. ESTÁCIO. Disponível em: https://blog.estacio.br/aluno-estacio/o-que-e-um-artigo-cientifico/.</li><br>
                  <li>Artigo Científico. BRASIL ESCOLA. Disponível em: https://monografias.brasilescola.uol.com.br/regras-abnt/artigo-cientifico.htm.</li><br>
             </div>
          </div>
      </aside>
  </main>
  </section>
  <script src="../../Componentes/Js/Sidebar1.js"></script>
</body>

</html>