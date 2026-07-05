<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle FOREACH</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Sobre FOREACH</h1>
    </header>

    <main>
        <?php 
        
        // EXEMPLO 1
        $lista_emails = ["matheuskbraga9@gmail.com", 
                        "matheus.braga@ufn.edu.br",
                        "matheus.braga@maristabrasil.org",
                        ];
        
        foreach ($lista_emails as $email) {
            echo "<br><br>Enviado para: {$email}";
        }


        // EXEMPLO 2
        $configuracoes = [
            'db_host' => 'localhost',
            'db_user' => 'root',
            'timeout' => 30
        ];

        foreach ($configuracoes as $chave => $valor) {
            // Útil para montar strings de conexão ou popular variáveis de ambiente
            echo "<br><br>Configurando [{$chave}] com o valor: {$valor} \n";
        }


        // EXEMPLO 3
        $transacoes = [
            ['id' => 101, 'status' => 'aprovado', 'valor' => 50.0],
            ['id' => 102, 'status' => 'aprovado', 'valor' => 150.0],
            ['id' => 103, 'status' => 'recusado', 'valor' => 250.0],
        ];

        foreach ($transacoes as $transacao) {
            if ($transacao['status'] != 'aprovado'){
                continue;
            }

            echo "<br><br>Transação número {$transacao['id']} está registrada!";
        }

        ?>
    </main>
</body>
</html>