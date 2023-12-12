<?php
    //Exercício: array associativo e verificação de maioridade da pessoa
    
        $arr = ['Nome' => 'André','Idade' => 19, 'Altura' => 1.77, 'Cabelo' => 'Castanho Escuro'];
        print_r($arr);
        echo "<br>";
        if($arr['Idade']>= 18){
            echo "$arr[Nome] é maior de idade.";
            echo "<br>";
        }
        else {
            echo "$arr[Nome] não é maior de idade";
            echo "<br>";
        }

   
?>