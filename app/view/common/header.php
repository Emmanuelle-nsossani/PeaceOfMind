<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="public/js/header-mobile.js"></script>
    <link rel="icon" href="favicon.ico" />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <?php if (!empty($css)): ?>
        <link rel="stylesheet" href="public/css/<?= $css ?>">
    <?php endif ?>

    <title><?= $page_title ?></title>
</head>

<body>
    <header id="header-desktop">
        <ul>
            <li id="logo">
                <a href="">
                    <img src="public\images\logo.png" alt="" srcset="">
                </a>
                <a href="">
                    Peace Of Mind
                </a>
            </li>
            <li><a href="#">J'ai besoin d'aide</a></li>
            <li><a href="#">Se renseigner</a></li>
            <li><a href="#">Intéragir avec nous</a></li>
            <li><a href="#">Qui sommes nous</a></li>
        </ul>
    </header>
    <header id="header-mobile-container">
        <div id="header-mobile">
            <div class="logo-container">
                <img class="logo-header" src="public\images\logo.png" alt="Logo Peace of Mind">
            </div>
            <div id="menu-container">
                <img id="login-icon" src="public\images\login-icon.svg" alt="">
                <div id="menuToggle">
                    <div id="span">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- <nav>
            <ul>
                <li><a href="#">J'ai besoin d'aide</a></li>
                <li><a href="#">Intéragir avec nous</a></li>
                <li><a href="#">Foire aux questions</a></li>
                <li><a href="#">Qui sommes nous ?</a></li>
            </ul>
        </nav> -->

    </header>