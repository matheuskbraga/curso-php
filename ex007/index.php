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
        <h1>Funções</h1>
    </header>

    <main>
        <!-- CORREÇÃO 1: Adicionado o formulário em volta do botão -->
        <!-- É necessário usar a tag <form> para enviar o clique para o servidor -->
        <form method="POST">
            <button type="submit" name="clicado">Clique Aqui!</button>
        </form>

        <?php 
        // Funções no php
        function saudacao(){
            echo "Olá mundo!!!";
        }

        function calcular_soma($arg1, $arg2){
            // Dica: você pode dar "return $arg1 + $arg2;" direto aqui!
            return $arg1 + $arg2; 
        }

        echo "<br><br>";
        echo calcular_soma(200, 90);
        echo "<br><br>"; // Adicionado para pular linha após o resultado da soma
        
        // CORREÇÃO 2: Agora o botão já foi criado antes, então o PHP consegue capturar o clique
        if (isset($_POST['clicado'])) {
            saudacao();
        }
        ?>
    </main>
</body>
</html>
