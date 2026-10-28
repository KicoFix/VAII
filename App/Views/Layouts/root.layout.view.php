<?php

/** @var string $contentHTML */
/** @var \Framework\Auth\AppUser $user */
/** @var \Framework\Support\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Vyberte si kategóriu a zahrajte si vedomostný kvíz v Quiz Arena.">
    <title><?= App\Configuration::APP_NAME ?></title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $link->asset('favicons/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $link->asset('favicons/icon.png') ?>">
    <link rel="manifest" href="<?= $link->asset('favicons/site.webmanifest') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= $link->asset('css/styl.css') ?>">
    <script src="<?= $link->asset('js/script.js') ?>"></script>
</head>
<body>
<header class="site-header">
    <a class="brand" href="http://127.0.0.1/?c=home&a=index" aria-label="Quiz Arena – domov">
        <span class="brand-mark" aria-hidden="true">QA</span>
        <span class="brand-name">Quiz Arena</span>
    </a>
    <?php
    $currentController = $_GET['c'] ?? 'home';
    $currentAction = $_GET['a'] ?? 'index';

    $isHome = $currentController === 'home' && $currentAction === 'index';
    $isQuiz = $currentController === 'home' && $currentAction === 'quiz';

    ?>
    <nav class="site-nav" aria-label="Hlavná navigácia">
        <nav class="site-nav" aria-label="Hlavná navigácia">
            <a class="nav-link<?= $isHome ? ' active' : '' ?>"
               href="<?= $link->url('home.index') ?>"
                    <?= $isHome ? 'aria-current="page"' : '' ?>>Domov</a>

            <a class="nav-link<?= $isQuiz ? ' active' : '' ?>"
               href="<?= $link->url('home.quiz') ?>"
                    <?= $isQuiz ? 'aria-current="page"' : '' ?>>Kvíz</a>
        </nav>
<!--        <a class="nav-link" href="#kategorie">Kategórie</a>-->
<!--        <a class="nav-link" href="#sutaz">Rebríček</a>-->
<!--        <a class="nav-button" href="#prihlasenie">Prihlásiť sa</a>-->
    </nav>
</header>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
<footer class="site-footer">
    <span>© 2026 Quiz Arena</span>
    <span>Učte sa hravou formou.</span>
</footer>
</body>
</html>
