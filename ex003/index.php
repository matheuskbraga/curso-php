<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis em PHP</title>
</head>
<body>
    <?php 
    
        $nome = "Matheus"; // variable with name "Matheus"
        $sobrenome = "Braga"; // variable with name "Braga"
        const PAIS = "Brasil"; // variable with name on the country origin
        $idade = 23;
        $peso = 90.4;
        $casado = false;
        
        echo "Muito prazer, $nome $sobrenome <br>"; // variables being printed
        echo "Seu país de origem é: " . PAIS ,"<br>"; // constant beindg printed
        echo "Idade: $idade <br>";
        echo "Peso: $peso <br>";

    ?>
</body>
</html>