<?php 

    class Car {

        public $rodas = 4; 
        public $aro = 20;
        public $cambio = "Automático";
        public $tetoSolar = true;
        public $cor = "Azul";
        public $modelo = "Sedan";
    }

    $BMW = new Car;

    $BMW->cor = "Branco"; // Alteração do valor principal do atributo dentro da classe 

    echo "<--Carro BMW--> <br>";
    echo "Modelo: $BMW->modelo <br>";
    echo "Cor: $BMW->cor <br>";
    echo "Aro: $BMW->aro <br>";
    echo "Câmbio: $BMW->cambio <br>";
    echo "Rodas: $BMW->rodas <br>";

    if($BMW->tetoSolar == true){
        echo "A BMW possui Teto Solar. <br>";
    }
    else {
        echo "A BMW não possui Teto Solar. <br>";
    }

   