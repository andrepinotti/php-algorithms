<?php 

    if(isset($_GET['name']) && isset($_GET['age'])){
        $name = $_GET['name'];
        $age = $_GET['age'];
    } else {
        $name = 'Padrão';
        $age = 'Padrão';
    }
    

?>

<h2> Your name is <?= $name ?> and you have <?= $age ?> years old. </h2>
