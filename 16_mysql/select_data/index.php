<?php

$host = "localhost"; // Podemos usar o ip atual
$user = "root"; //usuario no login
$senha = "senha_da_nasa"; //Senha de login no SGBD
$banco = "cursophp"; //Database no SGBD

$conn = new mysqli($host, $user, $senha, $banco);

//select all itens
$select = "SELECT * FROM itens";

$result = $conn->query($select);

print_r($result); //Imprime os dados do banco em um array, mostrando quantidade de linhas, colunas 

echo "<br>";

$conn->close();


//Um resultado
$itens = $result->fetch_assoc();

print_r($itens);

echo "<br>";

$itens = $result->fetch_all();

print_r($itens);