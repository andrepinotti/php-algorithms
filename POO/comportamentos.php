<?php

    //Iremos criar a classe cachorro e colocar os métodos(comportamento) latir e andar

    class Cachorro{

        function latir($nomeCachorro){
            echo "O $nomeCachorro late bastante! <br>";
        }

        function andar($nomeCachorro){
            echo "O $nomeCachorro sabe andar! <br>";
        }
    }

    $salsicha = new Cachorro ;
    $salsicha->andar("Pastor Alemão");
    $salsicha->latir("Rotweiller");