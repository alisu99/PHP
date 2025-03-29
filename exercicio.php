<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="recursos/css/estilo.css">
    <title>Exercício</title>
</head>

<body>
    <header class="cabecalho">
        <h1>Cruso PHP</h1>
        <h1>Visualização do exercício</h1>
    </header>
    <nav class="navegacao">
        <a href="" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="principal">
        <div class="conteudo">
            <?php
                include("{$_GET['dir']}/{$_GET['file']}.php")
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS <?= date('Y') ?>
    </footer>
</body>

</html>