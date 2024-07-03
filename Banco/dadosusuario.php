<?php
require_once('../Controller/conexao.php');
session_start();

$sql = $conn->prepare("SELECT * FROM vw_dados_usuario WHERE id = ?");

$sql->execute(array($id));

if($sql){
    $user = $sql->fetchAll(PDO::FETCH_ASSOC)[0];
    print_r($user);
}
/*if ($sql->rowCount()) {
    $user = $sql->fetchAll(PDO::FETCH_ASSOC);
    //$_SESSION["usuario"] = array($user["Nome"], $user["Email"], $user["Senha"], $user["Nascimento"], $user["Foto"], $user["Situacao"], $user["tipo"], $user["Genero"]);
} else {
    print_r("teu pai");
}*/