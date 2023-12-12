<?php 

    //Vamos criar uma array com as características de um animal e trasnformar as chaves em variáveis

    $arr = ["animal" => "Zebra",
            "cor" => "Preta com listas brancas",
            "patas" => 4,    
            "classe" => "Mamífero"
        ];

    
    extract($arr);

    echo  $cor ."<br>"; //Imprimirá 'Preta com listas brancas'