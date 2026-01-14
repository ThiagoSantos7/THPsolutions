<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Google+Sans:ital,opsz,wght@0,17..18,400..700;1,17..18,400..700&display=swap"
        rel="stylesheet">
    <title>Orçamento</title>
</head>

<body>
    <header>
        <h1>THP Solution<sup><small>©</small></sup></h1>
    </header>

    <main>
        <?php
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "";
        $idade = isset($_GET["idade"]) ? $_GET["idade"] : 16;
        ?>
        <fieldset>
            <legend>Olá, <?= $nome ?>! Agende já seu Orçamento!</legend>
            <form>
                <label for="empresa">Qual seu ramo?</label>
                <select name="empresa" id="idempresa">
                    <option value="" disabled>Selecione</option>
                    <option value="1">Empresa</option>
                    <option value="2">Autônomo</option>
                    <option value="3">Pessoal</option>
                </select>
                <label for="site">Qual tipo de serviço deseja?</label>
                <select name="site" id="idsite">
                    <option value="" disabled>Selecione</option>
                    <option value="1">Site e-commerce</option>
                    <option value="2">Landing Page</option>
                    <option value="3">Link Bio</option>
                    <option value="4">Midias sociais</option>
                </select>
                <label for="tipoEmpresa">Descreva qual o tipo de empresa:</label>
                <input type="text" name="tipoEmpresa" placeholder="Ex: Ramo de advocacia autônomo...">
                <label for="dataAg">Data para contato:</label>
                <input type="date" name="dataAg">
                <label for="horario">Qual melhor horário?</label>
                <input type="time" name="horario">
                <label for="textoFinal">Agora detalhe seu tipo de serviço:</label>
                <textarea name="textoFinal"
                    placeholder="Ex: Site institucional com foco na experiência do usuário, moderno etc."></textarea>
                <input type="submit" class="btn" value="Enviar">
            </form>
        </fieldset>
    </main>
</body>

</html>