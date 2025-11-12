<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiauBoxd - Sua Biblioteca de Filmes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        
        body {
            background-color: #1a1a1a;
            color: #f5f5f5;
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
        }
        .card-dark {
            background-color: #2c2c2c; 
            border: 1px solid #3d3d3d;
            border-radius: 0.75rem;
            overflow: hidden;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .card-dark:hover {
            transform: translateY(-5px); 
            box-shadow: 0 10px 20px rgba(255, 193, 7, 0.25);
        }
        .card-img-top {
            height: 300px;
            object-fit: cover;
        }
        #filmesCarousel img {
            max-height: 400px;
            object-fit: cover;
            filter: brightness(0.8); 
        }
        .card-actions .btn {
            margin-top: 8px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top shadow-lg">
        <div class="container-fluid">
            <a class="navbar-brand text-warning fs-3 fw-bold" href="index.php?acao=inicial">MiauBoxd</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="listar.php">Meus Filmes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success fw-bold" href="index.php?acao=form">Adicionar</a>
                    </li>
                </ul>
                
                <form class="d-flex" role="search">
                    <input class="form-control me-2 bg-dark text-light border-warning" type="search" placeholder="Buscar Filme..." aria-label="Search">
                    <button class="btn btn-outline-warning" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">

<h3 class="mb-3 text-warning border-bottom border-warning pb-2">Mais bem avaliados</h3>
<div id="filmesCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner rounded-3 shadow-lg">

        <?php 
        if (isset($filmes) && count($filmes) > 0):
            usort($filmes, function($a, $b) {
                return ($b['avaliacao'] ?? 0) <=> ($a['avaliacao'] ?? 0);
            });
            $topFilmes = array_slice($filmes, 0, 3);
            $active = 'active';

            foreach ($topFilmes as $filme): 
                $capa = $filme['capa'] ?? '';
                if (!empty($capa) && filter_var($capa, FILTER_VALIDATE_URL)) {
                    $capaPath = $capa;
                } elseif (!empty($capa) && file_exists(__DIR__ . '/../../' . $capa)) {
                    $capaPath = $capa;
                } else {
                    $capaPath = 'https://placehold.co/1200x400/171717/cccccc?text=CAPA+INDISPONÍVEL';
                }
        ?>
                <div class="carousel-item <?= $active ?>">
                    <img src="<?= htmlspecialchars($capaPath) ?>" class="d-block w-100" alt="<?= htmlspecialchars($filme['titulo']) ?>">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-2">
                        <h5 class="fw-bold text-warning"><?= htmlspecialchars($filme['titulo']) ?></h5>
                        <p class="small">
                            <?= htmlspecialchars($filme['genero'] ?? '') ?> 
                            • <?= htmlspecialchars($filme['ano'] ?? '') ?> 
                            • Nota: <?= htmlspecialchars($filme['avaliacao'] ?? 'S/N') ?>
                        </p>
                    </div>
                </div>
        <?php 
                $active = '';
            endforeach; 
        else: 
        ?>
            <div class="carousel-item active">
                <img src="https://placehold.co/1200x400/171717/cccccc?text=Sem+filmes+disponíveis" class="d-block w-100" alt="Sem filmes">
                <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-2">
                    <h5 class="fw-bold text-warning">Nenhum filme disponível</h5>
                    <p class="small">Adicione filmes para vê-los aqui.</p>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#filmesCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#filmesCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Próximo</span>
    </button>
</div>


        <h3 class="mt-5 mb-4 text-light border-bottom border-secondary pb-2">Minha Coleção</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 mb-5">
            
            <?php 
            if (isset($filmes) && is_array($filmes)):
                $capaPath = (!empty($filme['capa']) && filter_var($filme['capa'], FILTER_VALIDATE_URL))
                    ? $filme['capa']
                    : (file_exists(__DIR__ . '/../../' . $filme['capa'])
                        ? $filme['capa']
                        : 'https://placehold.co/300x450/414141/ffffff?text=CAPA+INDISPONÍVEL');

            ?>
                <div class="col">
                    <div class="card card-dark h-100">
                        <img 
                            src="<?= $capaPath ?>" 
                            class="card-img-top" 
                            alt="<?= htmlspecialchars($filme['titulo']) ?>"
                            onerror="this.onerror=null;this.src='https://placehold.co/300x450/414141/ffffff?text=CAPA+INDISPONÍVEL';"
                        >
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title text-warning fw-bold"><?= htmlspecialchars($filme['titulo']) ?></h5>

                            <p class="card-text small text-light  mb-2">
                                Diretor: <?= htmlspecialchars($filme['diretor'] ?? 'N/A') ?><br>
                                Ano: <?= htmlspecialchars($filme['ano'] ?? 'N/A') ?><br>
                                Gênero: <?= htmlspecialchars($filme['genero'] ?? 'N/A') ?>
                            </p>
                            
                            <p class="card-text">
                                <span class="badge bg-warning text-dark fw-bold">Nota: <?= htmlspecialchars($filme['avaliacao'] ?? 'S/N') ?></span>
                            </p>
                            <div class="card-actions d-grid gap-2 mt-auto pt-2 border-top border-secondary">
                                <a href="index.php?acao=detalhes&id=<?= $filme['id'] ?>" class="btn btn-outline-warning btn-sm">
                                    Ver Detalhes
                                </a>
                                <a href="index.php?acao=editar&id=<?= $filme['id'] ?>" class="btn btn-outline-primary btn-sm">
                                    Editar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                endforeach; 
            else: 
            ?>
                <div class="col-12 text-center py-5">
                    <p class="text-muted fs-5">Sua coleção MiauBoxd está vazia! <a href="index.php?acao=form" class="text-success fw-bold text-decoration-none">Adicione um filme agora</a>.</p>
                </div>
            <?php 
            endif; 
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>