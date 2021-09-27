<!DOCTYPE html>
<html lang="py-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/seriesIndex.css" />
    <title>Controle de Séries</title>
</head>

<body>
    <div class="header">
        <h1 class="header-title">Lista de séries</h1>
    </div>
    <div class="series-list">
        <div class="now-watching">
            <h2>Assistindo no momento</h2>
            <ul class="series-group">
                <?php foreach ($seriesWatching as $serie => $url) : ?>
                    <a href="<?= $url ?>">
                        <li class="series-item"><?= $serie; ?></li>
                    </a>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="to-watch">
            <h2>Para assistir</h2>
            <ul class="series-group">
                <?php foreach ($seriesToWatch as $serie => $url) : ?>
                    <a href="<?= $url ?>">
                        <li class="series-item"><?= $serie; ?></li>
                    </a>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>

</html>
