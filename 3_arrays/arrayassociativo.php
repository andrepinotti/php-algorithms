<?php

    // O array associativo é uma array com chave e valor 
    // Abaixo criarei uma array onde será definida as características de um cachorro 
    $arr = ['nome' => 'Shark', 'patas' => 4,'cor' => 'Marrom'];

    echo $arr['nome']; //Colocando pra imprimir a array com a chave, ele imprimirá o valor armazenado nessa chave 
    echo "<br>";
    print_r($arr); // Imprimirá toda a array mostrando a chave e seus valores 
    echo "<br>";
    echo $arr['patas'];
    echo "<br>";
    echo $arr['cor'];
?>