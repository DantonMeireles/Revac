<?php
require_once('dados.php');

$teste = 1;
$teste2 = 2;
//echo "oi";

try {
    $sql = $conn->prepare('UPDATE tb_usuario SET id_status_usuario = ? WHERE id_usuario = ? ');
    $sql->execute(array($teste2, $id));
    echo '<script language=\'javascript\'>
                        alert(\'jorge!\');
                  </script>';
    $conn = null;

    header('location: logout.php');
} catch (PDOException $e) {
    echo 'Falha ao tentar cadastrar: ' . $e->getMessage();
}
