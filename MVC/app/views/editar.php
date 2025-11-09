<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Filme</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <h1>✏️ Editar Filme</h1>

    <form action="index.php?acao=atualizar" method="post">
        <input type="hidden" name="id" value="<?= $filmes['id'] ?>">

        <label>Título:</label>
        <input type="text" name="titulo" value="<?= htmlspecialchars($filmes['titulo']) ?>" required><br>

        <label>Diretor:</label>
        <input type="text" name="diretor" value="<?= htmlspecialchars($filmes['diretor']) ?>" required><br>

        <label>Ano:</label>
        <input type="number" name="ano" value="<?= htmlspecialchars($filmes['ano']) ?>"><br>

        <label>Gênero:</label>
        <input type="text" name="genero" value="<?= htmlspecialchars($filmes['genero']) ?>"><br>

        <label>URL da capa:</label>
        <input type="text" name="capa" value="<?= htmlspecialchars($filmes['capa']) ?>"><br>

        <label>Comentário:</label><br>
        <textarea name="comentario" rows="5" cols="30"><?= htmlspecialchars($filmes['comentario']) ?></textarea><br>

        <button type="submit">Salvar Alterações</button>
        <a href="index.php">Cancelar</a>
    </form>
</body>
</html>
