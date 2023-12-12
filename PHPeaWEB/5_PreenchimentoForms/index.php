<?php
    //Iremos fazer um auto preechimento do formulário que estaremos criando, usando os dados de uma array que criaremos
    $usuario = ['nome'=> 'Carlinhos',
            'idade' => 54,
            'profissão'=> 'Criador de conteúdo'];  
    
    //Iremos atribuir o valor das variáveis para as chaves do nosso array associativo, logo elas receberão o valor da chave do array 
    if($usuario){
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissão'];
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
    <form action="index.php">
        <div>
            <input type="text" name="nome" value="<?= $nome ?>">
        </div>
        <div>
            <input type="text" name="idade" value="<?= $idade ?>">
        </div>
        <div>
            <input type="text" name="profissão" value="<?= $profissao ?>">
        </div>
    </form>
</body>
<!-- O principal propósito desse programa é mostrar no navegador os espaços de campos preenchidos pelos valores que colocamos no PHP-->
</html>