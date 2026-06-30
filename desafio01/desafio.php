<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 1</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>

    <header>
        <h1>Resultado do processamento:</h1>
    </header>

    <main>
        <?php 
    
    $numero = $_GET["numero"] ?? "Valor não informado!";

    $sucessor = $numero + 1;
    $antecessor = $numero - 1;

    echo "O sucessor é " . $sucessor . ".";
    echo "<br>";
    echo "<br>";
    echo "O antecessor é " . $antecessor . ".";

    ?>
    </main>
    
</body>
</html>