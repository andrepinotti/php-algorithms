<?php

//Soma de todos os digitos de um numero 
$n = 32;
$soma = 0;


while($n > 0){

    $digito = $n % 10;
    $soma = $soma + $digito;
    $n = $n / 10;

}

echo "Soma: $soma <br>" ;