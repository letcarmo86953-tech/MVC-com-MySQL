<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmes Cadastrados</title>
</head>
<body>
    <h1>Filmes Cadastrados</h1>

    <table border="1" cellpading="5">
        <tr>
            <th>id</th>
            <th>Título</th>
            <th>Diretor</th>
            <th>Ano</th>
            <th>Genero</th>
            <th>Capa</th>
            <th>Comentário</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($filmes as $filmes): ?>
            <tr>
                <td><?= $filmes['id']?></td>
                <td><?= htmlspecialchars($filmes['titulo']) ?></td>
                <td><?= htmlspecialchars($filmes['diretor']) ?></td>
                <td><?= htmlspecialchars($filmes['ano']) ?></td>
                <td><?= htmlspecialchars($filmes['genero']) ?></td>
                <td><?= htmlspecialchars($filmes['capa']) ?></td>
                <td><?= htmlspecialchars($filmes['comentario']) ?></td>
                <td>
                    <a href="index.php?acao=editar&id=<?= $filmes['id'] ?>">Editar</a> | 
                    <a href="index.php?acao=deletar&id=<?= $filmes['id'] ?>" onclick="return confirm('Você realmente deseja excluir esse filme?');">Excluir</a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>


    <a href="index.php?acao=form">Adicionar Filme</a>
</body>
</html>