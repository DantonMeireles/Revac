<?php
require_once('../../../Session/validasession.php');

if ($tipo != '2') {
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
    <link rel="stylesheet" href="../../Componentes/Css/Sidebar.css">
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
                    <span class="name"> <u> <?php echo $user["Nome"] ?></u> </span>
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
                    <li class="nav-link">
                        <a href="Avaliador.php">
                            <i class='bx bx-edit-alt icon'></i>
                            <span class="text nav-text">Avaliar Artigo</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="../../../Pages/Php/Avaliador/ApresentacaoEdital.php">
                            <i class='bx bx-folder-open icon'></i>
                            <span class="text nav-text">Edital</span>
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
			<div class="content">

				<strong>Anais da Revac / Volume 1, 2022 – FSA – UNIFENAS – UNIFEOB – UNIPROJEÇÃO</strong>
				<br />
				<br />

				<strong>AUTORES</strong>
				<br />
				<br />



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="49836214828" class="btn-name-link">ADAILTON DA SILVA NOVAIS
							FILHO</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="05823318707" class="btn-name-link">KATHERINE CAETANO MARIANO
							ALBINO DE MIRANDA</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="43161992857" class="btn-name-link">KATHLEEN SANTOS DA SILVA
							CANILLE</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="39679831884" class="btn-name-link">KATHRYN ALINE DE OLIVEIRA
							BARBOSA</button>
					</form>
				</div>


				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="09288239626" class="btn-name-link">RAFAEL PEREIRA
							SANTIAGO</button>
					</form>
				</div>


				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="12874905658" class="btn-name-link">WENDREY SANTIAGO ROCHA</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="10807785601" class="btn-name-link">WESLEI AUGUSTO PEREIRA
							JUNIOR</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="40462972801" class="btn-name-link">WESLEY BORDINHON DA SILVA
							PAULA</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="47540352833" class="btn-name-link">WESLEY FELICIANO DOS
							SANTOS</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="38589683826" class="btn-name-link">WESLEY MARCOS FRARI</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="43520082810" class="btn-name-link">WESLLEY DA SILVA CAVALCANTE
							FROTA</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="49835780803" class="btn-name-link">WIDINAN CONCEIÇÃO DIAS</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="06749662609" class="btn-name-link">WILIAN FRANKLIN ROMANO DOS
							SANTOS</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="42270564898" class="btn-name-link">WILLIAM ALEXANDER FURTADO
							RODRIGUES</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="22844419801" class="btn-name-link">WILLIAM JOHNNY NASCIMENTO
							NUNES</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="44762130818" class="btn-name-link">WILLIAM ROCHA DE
							OLIVEIRA</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="49367040830" class="btn-name-link">WILLIAM VINÍCIUS
							RODRIGUES</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="44866643889" class="btn-name-link">WILLIAN SILVA DE SOUSA</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="13181441678" class="btn-name-link">WILLYAM FERNANDES
							MARTINS</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="45352384802" class="btn-name-link">WINAYA LARISSA CARVALHO DE
							SOUZA</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="40916962873" class="btn-name-link">WINICIUS DAVI PEREIRA</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="16473587799" class="btn-name-link">YAN GABRIEL CHAVES
							JANETTI</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="46023201806" class="btn-name-link">YASMIM ALVES</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="49001303897" class="btn-name-link">YASMIN LEME SILVA</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="41964978882" class="btn-name-link">YASMIN REGINA PIRES
							SILVA</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="44042567878" class="btn-name-link">YASMIN TONINATO DE
							SOUZA</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="01209199580" class="btn-name-link">YEDO TARSYS AMÂNCIO
							CAMPOS</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="49673516898" class="btn-name-link">YGOR PERCIAVALI TELMO
							RODRIGUES</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="49850185899" class="btn-name-link">YNARA CORDEIRO
							FERNANDES</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="42450945830" class="btn-name-link">YOANA LAIS MAGALHÃES</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="48550991805" class="btn-name-link">YORHANA DA SILVA
							SANTOS</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="43769011805" class="btn-name-link">YSLENE SOUZA DE
							ALMEIDA</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="33706322846" class="btn-name-link">YUKIO KURODA NABESHIMA</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="38136584818" class="btn-name-link">YURI MARTINS</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="38255887857" class="btn-name-link">YURI TANIKAWA MARQUES</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="41620605848" class="btn-name-link">ZÉLIA GABRIELA BETENCOURT E
							SILVA</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="67239218953" class="btn-name-link">ZELY BATISTA BARBOSA</button>
					</form>
				</div>



				<div class="list1" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="44671338874" class="btn-name-link">ZENIELTON CAMARGO DE
							PAULA</button>
					</form>
				</div>



				<div class="list" >
					<form method="post"
						action="https://www.conic-semesp.org.br/anais/anais-conic.php?ano=2020&amp;act=pesquisar">
						<button name="idautor" value="17273107808" class="btn-name-link">ZILDA TONETTI DOS
							SANTOS</button>
					</form>
				</div>

			</div>
		</div>

        </main>
    </section>
    <script src="../../Componentes/Js/Sidebar1.js"></script>

</body>

</html>