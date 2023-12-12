<?php

    $validacoes = [];

    if(count($_POST) > 0){

       

        //Validações quando os itens estiverem vazios
        if(($_POST['name']) === ""){
            $validacoes[] = "Por favor insira seu nome";
        }

        if(($_POST['email']) === ""){
            $validacoes[] = "Por favor insira seu email";
        }

        if(($_POST['password']) === ""){
            $validacoes[] = "Por favor insira sua senha";
        }

        if(($_POST['confirmation']) === ""){
            $validacoes[] = "Por favor confirme a sua senha";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php if(count($validacoes)): ?>
        <ul>
            <?php foreach($validacoes as $validacao):?>
                <li><?= $validacao ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>            
    <form action="index.php" method="POST">

        <div>
            <input type="text" name="name" placeholder="Type your name">
        </div>
        <div>
            <input type="text" name="email" placeholder="Type your email">
        </div>
        <div>
            <input type="text" name="password" placeholder="Type your password">
        </div>
        <div>
            <input type="text" name="confirmation" placeholder="Confirm your password">
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
       
    </form>
    
</body>
</html>