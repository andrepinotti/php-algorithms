<?php

    $pessoa = [
        "André" => 20,
        "Matheus" => 21,
        "Ana Júlia" => 19
    ];
?>

<table border="1">
    <tr>
        <th>Nome do Usuário</th>
        <th>Idade do Usuário</th>
    </tr>
    <?php foreach ($pessoa as $nome => $idade): ?>
        <tr>
            <td> <?= $nome; ?></td>
            <td> <?= $idade; ?></td> 
        </tr>
    <?php endforeach; ?>
</table>