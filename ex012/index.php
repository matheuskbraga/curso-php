<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação Orientada a Objeto 2.0</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Programação Orientada a Objeto 2.0</h1>
    </header>

    <main>
        <?php 
        
        class MetricaFisica{
            private float $peso;

            public function __construct(float $pesoInicial)
            {
                $this->peso = $pesoInicial;
            }

            // Aplicando alteração de valor com condição.
            public function alterarPeso(float $novoPeso): void{
                if ($novoPeso <= 0){
                    throw new Exception("Erro de integridade: O peso deve ser maior que zero.");
                }
                $this->peso = $novoPeso;
            }

            public function mostrarPeso(): string{
                return "O peso do objeto é: {$this->peso}kg <br><br>";
            }
        }

        $objeto1 = new MetricaFisica(30.0);
        echo $objeto1->mostrarPeso();
        $objeto1->alterarPeso(40.0);
        echo $objeto1->mostrarPeso();
        
        
        ?>
    </main>
</body>
</html>