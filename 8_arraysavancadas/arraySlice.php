<?php 

    //Essa função pega os elementos de um array e 'fatia', determinamos os índices inicial e final e retornaremos apenas essa parte do array 
    $arr = [3, 6, 8, 7, 9, 134];

    $slice = array_slice($arr, 1, 3); //Nesse caso ele retornaria apenas os valores 6, 8, 7

    print_r($slice);