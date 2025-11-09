<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Filme</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <h1>🎞️ Detalhes do Filme</h1>

    <?php if (!empty($filme)): ?>
        <p><strong>Título:</strong> <?= htmlspecialchars($filme['titulo']) ?></p>
        <p><strong>Diretor:</strong> <?= htmlspecialchars($filme['diretor']) ?></p>
        <p><strong>Ano:</strong> <?= htmlspecialchars($filme['ano']) ?></p>
        <p><strong>Gênero:</strong> <?= htmlspecialchars($filme['genero']) ?></p>
        <p><strong>Comentário:</strong> <?= htmlspecialchars($filme['comentario']) ?></p>

        <?php if (!empty($filme['capa'])): ?>
            <img src="<?= htmlspecialchars($filme['capa']) ?>" alt="Capa do Filme" style="max-width:200px;">
        <?php endif; ?>

        <br><br>
        <a href="index.php">Voltar à listagem</a> |
        <a href="index.php?acao=editar&id=<?= $filme['id'] ?>">Editar</a>
    <?php else: ?>
        <p>Filme não encontrado!</p>
    <?php endif; ?>
</body>
</html>
