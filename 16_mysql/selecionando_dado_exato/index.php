<?php

$host = "localhost"; // Podemos usar o ip atual
$user = "root"; //usuario no login
$senha = "senha_da_nasa"; //Senha de login no SGBD
$banco = "cursophp"; //Database no SGBD

$conn =  new mysqli($host, $user, $senha, $banco);

$id = 7;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id = ?");

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result(); //obtêm o resultado(se imprimir, serão os dados do banco)

$final = $result->fetch_row();

print_r($final);

$conn->close();