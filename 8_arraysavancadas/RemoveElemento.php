<?php

    //Iremos usar a função array_splice para remover "feijão" e "Arroz"

    $arr = ["Batata", "Maçã", "Pera", "Feijão", "Arroz"];

    $cont = count($arr);
    echo "Elementos do array: " .  $cont;
    echo "<br>";

    $remove = array_splice($arr, 3, 2);//Iremos usar apenas os índices
    
    echo "Elemento Removido: ";
    print_r($remove);//Aqui mostrará o que foi removido em um array novo 
    echo "<br>";
    print_r($arr);//Array sem o elemento que foi removido

    