<?php
require_once('../Session/validasession.php');
?>
<?php if ($tipo == '2') : ?>
    <?php
    //print_r("teste"); 
    header('location: ../pages/php/avaliador/homeavaliador.php');
    ?>
<?php elseif ($tipo == '1') : ?>
    <?php
    //print_r("teste2");
    header('location: ../pages/php/aluno/homealuno.php');
    ?>
<?php elseif ($tipo == '3') : ?>
    <?php
    //print_r("teste3");
    header('location: ../pages/php/adm/adm.php');
    ?>
<?php endif; ?>
