<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="public/js/header-mobile.js"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <?php if (!empty($css)): ?>
        <link rel="stylesheet" href="public/css/<?= $css ?>">
    <?php endif ?>

    <title><?= $page_title ?></title>
</head>

<body>
    <header id="menu-desktop">
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
    <header id="menu-mobile">
        <div>
            <img src="public\images\logo.png" alt="Logo Peace of Mind">
        </div>
        <div>
            <img src="public\images\login-icon.svg" alt="">
            <div class="menu-bg"></div>
            <div class="menu-burger">☰</div>
            <div class="menu-items">
                <div>CALL</div>
                <div>DRIVE</div>
                <div>MAIL</div>
            </div>

            <div class="content">
                <h1>Circular Hamburger menu</h1>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                <br />
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            </div>
        </div>
    </header>