<?php
require_once('../Controller/conexao.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql1 = $conn->query("UPDATE bd_revac2.ArtigosSubmetidos SET ds_status = 'Publicado' WHERE (id_artigo = $id)" );

    header('location: ../pages/php/avaliador/PerfilAvaliadorT.php');
}
?>