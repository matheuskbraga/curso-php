<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de controle MATCH</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Estruturas de controle MATCH</h1>
    </header>

    <main>
        <?php 
        
        // Exemplo 1 de utilização do MATCH -> Array associativo
        function validarUsuario(string $user_type): string{
            return match ($user_type) {
                 "admin"=> "Administrador logado!",
                 "user"=> "Usuário comum logado!",
                 default => "Usuário não reconhecido!",
            };
        }
        

        // Exemplo 2 de utilização do MATCH -> Array associativo
        function validarRequisicao(int $status_requisicao): string{
            return match ($status_requisicao) {
                200, 201, 204 => "Sucesso: A requisição foi processada.",
                400, 401, 403, 404 => "Erro do Cliente: Verifique os dados enviados.",
                500, 502, 503 => "Erro do Servidor: Nossa equipe já foi notificada.",
                default => "Código de status não mapeado.",
            };
        }

        $nova_requisicao = validarRequisicao(200);
        $novo_user = validarUsuario("admin");
        echo $nova_requisicao;
        echo "<br><br>";
        echo $novo_user;


        ?>
    </main>

</body>
</html>