<?php

$x1 = 20;
$y = true;

function verificarAcesso($x1, $y){
    if(($x1 >= 18)||($y == true)){
        return "Acesso autorizado";
    }
    else if(($x1 < 18)){
        return "Acesso negado. Idade mínima requerida: 18 anos";
    } 
    else if(($x1 >= 18)||($y == false)){
        return "Acesso negado. Autorização necessária";
    } 
}

echo verificarAcesso($x1, $y);