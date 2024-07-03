<?php
session_start();

if (isset($_SESSION["login"]) && is_array($_SESSION["login"])) {
    $tipo = $_SESSION["login"][1];
    $id = $_SESSION["login"][0];
} else {
    echo "<script>window.location = '../pages/php/home.php'</script>";
}
