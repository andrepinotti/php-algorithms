<?php 

    //Alterações de case. Letra maiúscula, letra minúscula e letra inicial

    $str = "este item está em ";
    $comp = "promoção";

    $comp = strtoupper($comp);

    $str = ucfirst($str);
    echo $str . $comp;