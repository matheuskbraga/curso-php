<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orientação a Objeto</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Programação Orientada a Objeto</h1>
    </header>

    <main>
        <?php 
        
        class Academia{
            // Atributos privados (segurança) definidos no construtor
            public function __construct(
                private string $nome,
                private float $pesoAtual
            ){}

            public function obterPerfil(){
                return "O peso do aluno {$this->nome} é de {$this->pesoAtual} kg.<br><br>";
            }
        }
        
        $novo_aluno = new Academia("Matheus Braga", 90.0);
        $novo_aluno2 = new Academia("Luiz Batista Cardoso", 83.0);
        echo $novo_aluno->obterPerfil();
        echo $novo_aluno2->obterPerfil();

        ?>
    </main>
</body>
</html>