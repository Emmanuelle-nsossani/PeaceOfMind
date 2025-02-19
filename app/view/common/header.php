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
        <div id="bandeau-header">
            <div class="container-logo">
                <img class="logo" src="public\images\logo.png" alt="logo Peace of Mind">
                <img class="logo-titre" src="public\images\titre noir POM.png" alt="Peace of Mind">
            </div>
            <div id="container-slogan">
                <p id="slogan">L'espoir d'un nouveau départ</p>
            </div>
            <div id="container-login">
                <img id="login-icon" src="public\images\login-icon.svg" alt="icon connexion">
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="index.php?page=besoin-aide">J'ai besoin d'aide</a></li>
                <li><a href="">Intéragir avec nous<img src="public\images\menu-deroulant.svg" alt="voir plus"></a></li>
                <li><a href="index.php?page=faq">Foire aux questions</a></li>
                <li><a href="index.php?page=qui-sommes-nous">Qui sommes nous</a></li>
            </ul>
        </nav>
    </header>
    <header id="header-mobile-container">
        <div id="header-mobile">
            <div class="logo-container">
                <a href="index.php"> <img class="logo-header" src="public/images/logo.png" alt="Logo Peace of Mind">
                </a>
            </div>
            <div id="menu-container">
                <a href="index.php?page=connexion"><img id="login-icon" src="public/images/login-icon.svg" alt="">
                </a>
                <div id="menuToggle">
                    <div id="span">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <nav role="navigation">
            <ul id="menu" class="menu">
                <li><a href="index.php?page=besoin-aide">
                        <label for="menuCheckbox" onclick="this.parentNode.click();">J'ai besoin d'aide</label>
                    </a></li>
                <li><a href="#">
                        <label id="menu-interagir" for="menuCheckbox">
                            <p>Intéragir avec nous</p><img id="fleche-menu-interagir" src="public/images/fleche-vers-le-bas.png" alt="">
                        </label>
                    </a></li>
                <div id="sous-li">
                    <li><a href="index.php?page=blog">
                            <label for="menuCheckbox" onclick="this.parentNode.click();">- Blog et témoignages</label>
                        </a></li>
                    <li><a href="index.php?page=faq">
                            <label for="menuCheckbox" onclick="this.parentNode.click();">- Forum</label>
                        </a></li>
                    <li><a href="index.php?page=faq">
                            <label for="menuCheckbox" onclick="this.parentNode.click();">- Nous contacter</label>
                        </a></li>
                </div>
                <li><a href="index.php?page=faq">
                        <label for="menuCheckbox" onclick="this.parentNode.click();">Foire Aux Questions</label>
                    </a></li>
                <li id="last-li"><a href="index.php?page=qui-sommes-nous">
                        <label for="menuCheckbox" onclick="this.parentNode.click();">Qui sommes nous ?</label>
                    </a></li>
            </ul>
        </nav>
    </header>