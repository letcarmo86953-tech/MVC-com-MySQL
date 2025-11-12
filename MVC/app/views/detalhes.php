<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Filme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-dark: #121212;
            --secondary-dark: #1e1e1e;
            --text-light: #e0e0e0;
            --purple: #9156D1;
            --highlight-color: #ffc107;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: var(--primary-dark);
            color: var(--text-light);
            line-height: 1.6;
        }

        .navbar {
            background-color: rgba(30, 30, 30, 0.6);
            border-bottom: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            border-radius: 0 0 15px 15px;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            position: sticky;
            top: 0;
            z-index: 1030;
        }

        .navbar-brand {
            font-weight: 900;
            font-size: 2rem !important;
            color: var(--highlight-color) !important;
            text-shadow: 1px 1px 2px rgba(103, 0, 147, 0.5);
            letter-spacing: 0.5px;
        }

        .nav-link {
            color: var(--text-light);
            transition: color 0.3s ease, background-color 0.3s ease;
            border-radius: 8px;
            padding: 8px 15px;
        }

        .nav-link:hover {
            color: var(--highlight-color);
            background-color: rgba(255, 152, 0, 0.1);
        }

        .movie-header {
            position: relative;
            height: 350px;
            background-size: cover;
            background-position: center top;
            overflow: hidden;
            display: flex;
            align-items: flex-end;
            padding: 40px 0;
        }

        .header-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, var(--primary-dark) 0%, rgba(18, 18, 18, 0.8) 50%, rgba(18, 18, 18, 0.1) 100%);
            z-index: 1;
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        .movie-title {
            font-size: 4.5rem;
            font-weight: 900;
            text-transform: uppercase;
            color: var(--text-light);
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
            line-height: 1;
        }

        .poster-image {
            width: 100%;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);
            margin-top: -150px;
            position: relative;
            z-index: 10;
        }

        .rating-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background-color: var(--secondary-dark);
            border: 5px solid var(--highlight-color);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--highlight-color);
            margin-top: 20px;
            box-shadow: 0 0 15px rgba(255, 193, 7, 0.4);
        }

        .genre-tag {
            border: 1px solid var(--highlight-color);
            color: var(--highlight-color);
            background-color: rgba(145, 86, 209, 0.1);
            padding: 4px 12px;
            border-radius: 20px;
            margin-right: 8px;
            font-size: 0.9rem;
            display: inline-block;
        }

        .info-label {
            color: var(--purple);
            font-weight: 600;
            margin-top: 15px;
            display: block;
        }

        .cast-list {
            font-size: 0.9rem;
            color: rgba(224, 224, 224, 0.8);
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #b78900;
            color: #6f5400;
            transition: background-color 0.3s;
            font-weight: 700;
            width: 600px;
        }

        .btn-warning:hover {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .down-row {
            flex-direction: column;
            align-self: center;
            align-items: center;
            justify-content: space-between;
        }
    </style>
</head>
<body>

<?php if (!empty($filme)): ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-warning fs-3 fw-bold" href="index.php">MiauBoxd</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Explorar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success fw-bold" href="index.php?acao=adicionar">Adicionar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<header class="movie-header" style="background-image: url('<?= htmlspecialchars($capaPath) ?>');">

        <div class="header-overlay"></div>
        <div class="container header-content">
            <h1 class="movie-title"><?= htmlspecialchars(strtoupper($filme['titulo'])) ?></h1>
        </div>
    </header>

    <div class="container details-section">
        <div class="row">
            <div class="col-lg-4 col-md-5 text-center">
                <?php if (!empty($filme['capa'])): ?>
                    <img src="<?= htmlspecialchars($capaPath) ?>" class="poster-image" alt="Capa do Filme">
                <?php endif; ?>
            </div>

            <div class="col-lg-8 col-md-7 pt-4 pt-md-0">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="mb-0 text-light fw-bold">Comentário</h3>
                    <div class="rating-circle"><?= htmlspecialchars($filme['avaliacao']) ?></div>
                </div>

                <p class="lead"><?= htmlspecialchars($filme['comentario']) ?></p>

                <div class="mb-4">
                    <span class="genre-tag"><?= htmlspecialchars($filme['genero']) ?></span>
                </div>

                <hr class="border-secondary">

                <div class="row">
                    <div class="col-12 mb-3">
                        <span class="info-label">Diretor:</span>
                        <p class="cast-list mb-0"><?= htmlspecialchars($filme['diretor']) ?></p>
                    </div>

                    <div class="col-12 mb-3">
                        <span class="info-label">Ano:</span>
                        <p class="cast-list"><?= htmlspecialchars($filme['ano']) ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="down-row text-center d-flex mt-4">
            <a href="index.php?acao=editar&id=<?= $filme['id'] ?>" class="btn btn-warning mt-3 fs-5">Editar</a>
            <a href="index.php?acao=excluir&id=<?= $filme['id'] ?>" class="btn btn-warning mt-3 fs-5"
               onclick="return confirm('Tem certeza que deseja excluir este filme?')">Excluir da lista</a>
        </div>
    </div>

<?php else: ?>
    <div class="container text-center py-5">
        <h2 class="text-danger">Filme não encontrado!</h2>
        <a href="index.php" class="btn btn-warning mt-4 fs-5">Voltar</a>
    </div>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
