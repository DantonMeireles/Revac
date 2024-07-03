<?php
require_once('../Controller/conexao.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $teste = 1;

    $sql = $conn->prepare('INSERT INTO ArtigosEmAnalise(id_Artigo,id_profissional) VALUES(?,?)');
    $sql->execute(array($id, $teste));

    $sql1 = $conn->query("UPDATE bd_revac2.ArtigosSubmetidos SET ds_status = 'EmAnalise' WHERE (id_artigo = $id)" );

    header('location: ../pages/php/avaliador/avaliador.php');
}
?>