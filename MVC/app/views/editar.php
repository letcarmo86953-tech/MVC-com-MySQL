<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Filme - MiauBoxd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/style/css.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-warning fs-3 fw-bold" href="index.php">MiauBoxd</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Meus Filmes</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 bg-dark text-light border-warning" type="search" placeholder="Buscar Filme...">
                    <button class="btn btn-outline-warning" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="form-panel p-4 rounded shadow">
                    <h2 class="text-warning text-center mb-4 pb-2 border-bottom border-warning border-opacity-50">
                        Editar Filme
                    </h2>
                    
                        <form action="index.php?acao=atualizar" method="post" enctype="multipart/form-data">
                            <?php if (isset($filme['id'])): ?>
                                <input type="hidden" name="id" value="<?= htmlspecialchars($filme['id']) ?>">
                            <?php endif; ?>
                        
                        <div class="row mb-3">
                            <div class="col-md-9">
                                <label class="form-label">Título</label>
                                <input type="text" class="form-control" name="titulo" value="<?= isset($filme['titulo']) ? htmlspecialchars($filme['titulo']) : '' ?>" required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Ano</label>
                                <input type="number" class="form-control" name="ano" value="<?= isset($filme['ano']) ? htmlspecialchars($filme['ano']) : '' ?>" min="1888" max="2099" required>
                            </div>
                                <div class="col-md-3">
                                    <label for="diretor" class="form-label">Diretor</label>
                                    <input type="text" class="form-control" id="diretor" name="diretor" value="<?= isset($filme['diretor']) ? htmlspecialchars($filme['diretor']) : '' ?>"  placeholder="ex: Hayao Miyazaki" required>
                                </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Gênero</label>
                                <input type="text" class="form-control" name="genero" value="<?= isset($filme['genero']) ? htmlspecialchars($filme['genero']) : '' ?>" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Avaliação (0.5 - 5)</label>
                                <input type="number" step="0.5" class="form-control" name="avaliacao" value="<?= isset($filme['avaliacao']) ? htmlspecialchars($filme['avaliacao']) : '' ?>">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Comentário</label>
                            <textarea class="form-control" name="comentario" rows="4"><?= isset($filme['comentario']) ? htmlspecialchars($filme['comentario']) : '' ?></textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label">URL ou Capa do Filme</label>
                            <input type="text" class="form-control mb-2" name="capa" value="<?= isset($filme['capa']) ? htmlspecialchars($filme['capa']) : '' ?>" placeholder="URL da imagem (ou envie um arquivo abaixo)">
                            <input class="form-control" type="file" name="capa_arquivo" accept="image/*">
                        </div>


                        <div class="d-flex justify-content-between mt-4">
                            <a href="index.php" class="btn btn-secondary">Cancelar</a>
                            <button type="submit" class="btn btn-warning fw-bold px-4">Salvar Alterações</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
