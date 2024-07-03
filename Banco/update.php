<?php

require_once('conexao.php');
require_once('dados.php');

$emailErro = null;
$senhaErro = null;
$validacao = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {



    /*$emailErro = null;
    $senhaErro = null;
    $validacao = true;*/
    ///////////////////////////////////////////////////////
    if (isset($_POST['senha']) && !empty($_POST['senha'])) {
        $senha = $_POST['senha'];
    } else {
        $senhaErro = 'Por favor, digite sua senha!';
        $validacao = false;
    }
    //////////////////////////////////////////////////////////
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $emailErro = 'Por favor, digite seu email!';
        $validacao = false;
    }
    ////////////////////////////////////////////////////////////

    //Pegando os posts do formulario, no caso email e senha

    if ($validacao) {
        try {


            if (isset($_POST["email"]) && isset($_POST["senha"]) && $conn != null) {

                $sql = $conn->prepare("UPDATE tb_usuario SET Email = ?,Senha = ?  WHERE id_usuario = ? ");

                $sql->execute(array($_POST["email"], $_POST["senha"], $id));

                if ($sql) {
                    header('location: teste.php');
                } else {
                }
            }
        } catch (PDOException $e) {
            echo "Falha: " . $e->getMessage();
        }
    }
}
