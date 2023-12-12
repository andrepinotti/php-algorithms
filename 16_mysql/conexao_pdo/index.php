<?php

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $password = "senha_da_nasa";

    $conn = new PDO("mysql:host=$host;
        dbname=$db", $user, $password);

    
