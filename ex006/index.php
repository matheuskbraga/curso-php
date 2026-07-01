<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Associativos</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Arrays Associativos</h1>
    </header>

    <main>
        <?php 
        
        // lista associativa em php
        $usuario = [
            "nome" => "Matheus",
            "idade" => "23",
            "funcao" => "Programador",
        ];

        echo "Nome: " . $usuario["nome"];
        echo "<br>";
        echo "<br>";
        echo "Idade: " . $usuario["idade"];
        echo "<br>";
        echo "<br>";
        echo "Trabalho: " . $usuario["funcao"];
        
        ?>
    </main>
</body>
</html>