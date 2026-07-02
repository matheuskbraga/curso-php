<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de Controle</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Estruturas de Controle com operadores lógicos</h1>
    </header>

    <main>

    <?php 
    
    // 1. Criar variáveis das para armazenar as informações do index.html
    $nome = $_GET["nome"];
    $sobrenome = $_GET["sobrenome"];
    $idade = $_GET["idade"];
    
    echo "Olá " . $nome . " " .$sobrenome . "!";
    echo "<br><br>";

    // 2. Criar estuturas de controle de condição
    if ($idade >= 18){
        echo "Você tem idade para dirigir!";
    } else {
        echo "Você não tem idade para dirigir!";
    }

    ?>

    </main>

</body>
</html>