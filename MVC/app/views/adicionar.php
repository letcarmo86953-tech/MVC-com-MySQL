<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo filme</title>
</head>
<body>
    <h1>Adicionar Filme</h1>
    <form method="POST" action="index.php?acao=salvar">
        <label>Titulo: <input type="text" name = "titulo"></label>
        <br>
        <label>Diretor: <input type="text" name = "diretor"></label>
        <br>
        <label>Ano: <input type="text" name = "ano"></label>
        <br>
        <label>Genero: <input type="text" name = "genero"></label>
        <br>
        <label>Capa: <input type="text" name = "capa"></label>
        <br>
        <label>Comentário: <input type="text" name = "comentario"></label>
        <br>
        <button type="submit">Salvar</button>
</form>
</body>
</html>