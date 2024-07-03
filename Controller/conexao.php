<?php
$severname = "localhost";
$username = "root";
$password = "root";
$dbname = "bd_revac2";


try{
    $conn = new PDO("mysql:host=$severname;
    dbname=$dbname", $username, $password);
} catch(PDOException $e){
    echo "Erro de conexão: " . $e->getMessage();
}