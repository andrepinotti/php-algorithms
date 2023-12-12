<?php

    $rank = [
        "André" => 8,
        "Aninha" => 10,
        "Matheus" => 6,
        "Bruno" => 9
    ];

    arsort($rank);
?>


<h1>Ranking: </h1>
<ol>
    <?php foreach($rank as $name => $pontuation): ?>
        <li> <?= $name ?> -> <?= $pontuation ?> pontos</li>
    <?php endforeach; ?>
</ol>