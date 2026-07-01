<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 3</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Resultado da conversão</h1>
    </header>

    <main>
        <?php 
        
        echo "<p>Valor foi convertido para:</p>";

        $cotacao_dolar = 5.21;
        $valor_carteira_convertido = $_GET["valor_carteira"] * $cotacao_dolar;
        echo "<strong>U$" . $valor_carteira_convertido . "</strong>";

        echo "<p>Cotação do dólar atual em: R$<strong>" . $cotacao_dolar . "</strong></p>";
        
        ?>
    </main>
</body>
</html>