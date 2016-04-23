<?php
    $host = "localhost";
    $user = "root"; // type username here
    $password = ""; //set password here
    $database_name = "simple_login";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
?>