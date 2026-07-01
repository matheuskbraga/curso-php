<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="../style.css">

</head>
<body>
    <header>
        <h1>Gerador de número aleatório</h1>
    </header>

    <main>
        <?php 
        
        $numero_aleatorio = rand(0, 100);

        echo "Gerando um número aleatório de 0 a 100...";
        echo "<br>";
        echo "<br>";
        echo "O número gerado foi: <strong>" . $numero_aleatorio . "</strong>"
        
        ?>
    </main>
</body>
</html>