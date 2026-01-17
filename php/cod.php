<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result test</title>
</head>

<body>
    <main>
        <section>
            <?php
            $log = isset($_GET["log"]) ? $_GET["log"] : "";
            $password = isset($_GET["senha"]) ? $_GET["senha"] : 0;
            $senha = "thpassword27";
            $acesso = "PHT@usuario";

            if ($log === $acesso && $password === $senha) {
                echo "<h2>Você já está cadastrado!<h2>";
            } else {
                echo "<h2>Usuário ou senha inválidos! Tente novamente...</h2>";
                echo "<a href='javascript:history.go(-1)'>Voltar</a>";
            }
            ?>
        </section>
    </main>
</body>

</html>