<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>

    <main>
        <?php 
        
        $nome = $_GET["nome"] ?? "(Nome não informado)";
        $sobrenome = $_GET["sobrenome"] ?? "(Sobrenome não informado)";
        $idade = $_GET["idade"] ?? "(Idade não informado)";
        $cidade = $_GET["cidade"] ?? "(Cidade não informado)";
        $data = "O ano é " . "2026.";
        
        echo "Olá ", $nome, " ", $sobrenome, " prazer em te conhecer!";
        echo "<br>";
        echo "<br>";
        echo "Você tem ", $idade, " anos de idade e você é de ", $cidade, ".";
        echo "<br>";
        echo "<br>";
        echo $data;

        ?>

        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>