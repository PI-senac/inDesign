<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "cadastro";

    try{
        $conn = new PDO("mysql:host=$host;dbname=" . $db, $user, $password);
    } catch(PDOException $err){
        echo 'erro conexão não realizada com sucesso. erro:' . $err->getMessage();
    }
?>