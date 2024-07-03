<?php

require_once('../Controller/conexao.php');

//Pegando os posts do formulario, no caso email e senha

if (isset($_POST["email"]) && isset($_POST["senha"]) && $conn != null) {

    //print_r("teste");
    $sql = $conn->prepare("SELECT id_usuario, id_tipo_usuario FROM tb_usuario WHERE email = ? and senha = ?");
    $sql->execute(array($_POST["email"], $_POST["senha"]));
    //
    if ($sql->rowCount()) {
        //PEGANDO OS DADOS DA QUERY
        $login = $sql->fetchAll(PDO::FETCH_ASSOC)[0];
        //CRIANDO UMA SESSION LOGIN PARA VALIDAR AS ROTAS
        session_start();
        $_SESSION["login"] = array($login["id_usuario"], $login["id_tipo_usuario"]);
        //MANDANDO PARA O TESTE DO CRUD
        header('location: ../controller/rotas.php');
        //echo "<script>window.location = 'validacaoGeral.php'</script>";
    } else {
        header('location: ../pages/php');
    }
} else {
    //print_r("caralho");
}
