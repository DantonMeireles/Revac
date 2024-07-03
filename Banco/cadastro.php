<?php
require_once('../Controller/conexao.php');

//$nomeErro = null;
//$emailErro = null;
//$senhaErro = null;
//$dt_nascimentoErro = null;
//$sexoErro = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //$nome = $_POST['nome'];
    //$email = $_POST['email'];
    //$senha = $_POST['senha'];
    //$dt_nascimento = $_POST['data_de_nascimento'];
    $foto = "../../Componentes/Fotos/perfilpadrao.png";
    $tipo = 1;
    $status = 1;
    $validacao = true;


    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $nome = $_POST['name'];
    } else {
        $validacao = false;
    }
    //////////////////////////////////////////////////////////
    if (isset($_POST['senha']) && !empty($_POST['senha'])) {
        $senha = $_POST['senha'];
    } else {
        $validacao = false;
    }
    ////////////////////////////////////////////////////////////
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $validacao = false;
    }
    ////////////////////////////////////////////////////////////
    if (isset($_POST['data']) && !empty($_POST['data'])) {
        $dt_nascimento = $_POST['data'];
    } else {
        $validacao = false;
    }
    /////////////////////////////////////////////////////////////
    if (isset($_POST['sexo']) && !empty($_POST['sexo'])) {
        $sexo = $_POST['sexo'];
    } else {
        $validacao = false;
    }

    if ($validacao) {
        try {
            //VALIDANDO SE JA EXISTE O EMAIL
            $sql = $conn->prepare("SELECT * FROM tb_usuario WHERE email = ?");
            $sql->execute(array($email));
            $dados = $sql->fetchAll();

            if (!$dados) {
                //CADASTRANDO O EMAIL
                $sql = $conn->prepare('INSERT INTO tb_usuario(nome,email, senha, data_de_nascimento,Caminho_foto, id_tipo_usuario, id_status_usuario, id_sexo_usuario) VALUES(?,?,?,?,?,?,?,?)');
                $sql->execute(array($nome, $email, $senha, $dt_nascimento, $foto, $tipo, $status, $sexo));

                $conn = null;

                header('location: ../pages/php');
            } else {
                header('location: ../pages/php/#wrapper-signup');
            }
        } catch (PDOException $e) {
            echo 'Falha ao tentar cadastrar: ' . $e->getMessage();
        }
        //print_r("deu certo");
    } else {
        //print_r("jorge");
        header('location: ../pages/php/#wrapper-signup');
    }
}
