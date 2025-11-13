<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Filme - MiauBoxd</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="/style/css.css"> 
    
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-warning fs-3 fw-bold" href="listar.php">MiauBoxd</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="listar.php">Meus Filmes</a>
                    </li>
                </ul>
                
                <form class="d-flex" role="search">
                    <input class="form-control me-2 bg-dark text-light border-warning" type="search" placeholder="Buscar Filme..." aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="form-panel">
                    <h2 class="text-warning text-center mb-4 pb-2 border-bottom border-warning border-opacity-50">Adicionar Novo Filme à Biblioteca</h2>
                    
                    <form method="POST" action="index.php?acao=salvar" enctype="multipart/form-data">
                        
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="titulo" class="form-label">Título do Filme</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="ano" class="form-label">Ano</label>
                                    <input type="number" class="form-control" id="ano" name="ano" min="1888" max="2099" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="diretor" class="form-label">Diretor</label>
                                    <input type="text" class="form-control" id="diretor" name="diretor" placeholder="ex: Hayao Miyazaki" required>
                                </div>
                            </div>


                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="genero" class="form-label">Gênero Principal</label>
                                <select class="form-select" id="genero" name="genero" required>
                                    <option value="" selected disabled>Selecione um Gênero</option>
                                    <option value="acao">Ação</option>
                                    <option value="aventura">Aventura</option>
                                    <option value="comedia">Comédia</option>
                                    <option value="drama">Drama</option>
                                    <option value="terror">Terror</option>
                                    <option value="suspense">Suspense</option>
                                    <option value="romance">Romance</option>
                                    </select>
                            </div>
                            <div class="col-md-6">
                                <label for="duracao" class="form-label">Avaliação (0.5 - 5)</label>
                                <input type="number" class="form-control" id="avaliacao" name="avaliacao">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="comentario" class="form-label">Comentário</label>
                            <textarea class="form-control" id="comentario" name="comentario" rows="4" required></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="capa" class="form-label">Capa do Filme (Poster)</label>
                            <input class="form-control" type="text" id="capa_url" name="capa_url" placeholder="Cole o endereço (URL) da imagem aqui" required>
                            <div class="form-text text-light">Insira uma URL direta para a imagem (por exemplo: https://exemplo.com/imagem.jpg).</div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-warning btn-lg fw-bold">Salvar Filme</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>