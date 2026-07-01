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
    
    $numeroEscolhido = $_GET["numero"] ?? "Valor não informado!";

    $sucessor = $numeroEscolhido + 1;
    $antecessor = $numeroEscolhido - 1;

    echo "O número escolhido foi: <strong>" . $numeroEscolhido . "</strong>.";
    echo "<br>";
    echo "<br>";
    echo "O sucessor é <strong>" . $sucessor . "</strong>.";
    echo "<br>";
    echo "<br>";
    echo "O antecessor é <strong>" . $antecessor . "</strong>.";

    ?>
    </main>
    
</body>
</html>