<?php

    //Iremos ordenar arrays utilizando a função sort e outras funções dela
    $arr = [2, 7, 3, 45, 76, 88, 145, 0, 1];

    sort($arr); //Array ordenado 

    echo "Ordenação do Array: ";
    print_r($arr);
    echo "<br>"; //Pula uma linha para imprimir uma outra array

    $arr2 = [54, 2, 45, 3, 1, 0 , 10, 18, 8];

    //Iremos utilizar a função rsort que fará a ordenação reversa começando do maior

    rsort($arr2);

    echo "Ordenação inversa: ";
    print_r($arr2);
    echo "<br>";

    //Agora iremos fazer a ordenação em arrays associativos 

    $pessoa = [
        "Nome" => "André",
        "Altura" => 1.77,
        "Idade" => 19,
        "Cabelo" => "Castanho",
    ];

    //A organização do array associativo pode ser feita por dois jeitos: valor da chave e por chave

    //Ordenação pelo valor da chave: arsort

    arsort($pessoa);

    echo "Ordenação por valor de chave: ";
    print_r($pessoa);
    echo "<br>";

    //Ordenação por chave: ksort

    ksort($pessoa);

    echo "Ordenação por chave: ";
    print_r($pessoa);
    echo "<br>";