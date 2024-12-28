<main>
    <section id="banniere">
        <img src="public\images\titre noir POM.png" alt="">
        <p>L'espoir d'un nouveau départ</p>
    </section>
    <section>
        <div id="sante-mentale">
            <h4>Allez-vous bien mentalement ?</h4>
            <div id="sante-mentale-text">
                <img src="public\images\sante-mentale-illus.png" alt="">
                <p>Nous vous proposons un test conçu pour évaluer votre niveau de santé mentale, il vous aidera à mieux comprendre votre état émotionnel et psychologique. En un instant, obtenez un résultat chiffré et détaillé. Pour en savoir plus évaluez votre mental en 2min.</p>
                <!-- button from Uiverse.io by Creatlydev -->
            </div>
            <button href="#" class="button">
                <span class="button__icon-wrapper">
                    <svg
                        viewBox="0 0 14 15"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        class="button__icon-svg"
                        width="10">
                        <path
                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                            fill="currentColor"></path>
                    </svg>

                    <svg
                        viewBox="0 0 14 15"
                        fill="none"
                        width="10"
                        xmlns="http://www.w3.org/2000/svg"
                        class="button__icon-svg button__icon-svg--copy">
                        <path
                            d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
                            fill="currentColor"></path>
                    </svg>
                </span>
                Passer le test maintenant !
            </button>

        </div>
        <div id="button-container">
            <button class="button">
                <img src="public\images\souris.png" alt="souris">
                Je me renseigne
            </button>
            <button class="button">
                <img src="public\images\tel.png" alt="tel">
                Je veux en parler
            </button>
        </div>
    </section>
    <section id="saviez-vous">
        <div id="saviez-vous-text">
            <img src="public\images\play-illus.svg" alt="la-saviez-vous">
            <p><span class="bold">Débarrassons nous de nous des préjugés
                    sur la santé mentale !</span> Il est important de
                promouvoir une vision plus réaliste et bienveillante
                de la santé mentale. <span class="bold"> Dans ce jeu de cartes, répondez à des questions qui vous permettront de réfléchir à votre perception sur la santé mentale !</span>
            </p>

            <h4>Alors le saviez-vous...</h4>
        </div>
        <div id="cartes-container">
            <div class="carte-container">
                <div class="carte recto">
                    <img class="" src="public\images\carte-verso.svg" alt="carte-recto">
                </div>
                <div class="carte verso">
                    <img class="" src="public\images\carte-recto.svg" alt="carte-verso">
                </div>
            </div>
            <div class="carte-container">
                <div class="carte recto">
                    <img class="" src="public\images\carte-verso.svg" alt="carte-recto">
                </div>
                <div class="carte verso">
                    <img class="" src="public\images\carte-recto.svg" alt="carte-verso">
                </div>
            </div>
            <div class="carte-container">
                <div class="carte recto">
                    <img class="" src="public\images\carte-verso.svg" alt="carte-recto">
                </div>
                <div class="carte verso">
                    <img class="" src="public\images\carte-recto.svg" alt="carte-verso">
                </div>
            </div>
        </div>
    </section>
    <section id="blog-section">
        <h4>Notre blog présent pour vous</h4>
        <div class="p-titre">
            <img src="public\images\message-icon.svg" alt="message-icon">
            <p>Des articles sur la santé mentale</p>
        </div>
        <div class="article-container">
            <div id="last-article">
                <p>Notre dernier article</p>
            </div>
            <div id="container-img-art">
                <img src="public\images\last-article.png" alt="illustration santé mentale">
                <p id="date-article">20/12/24</p>
            </div>
            <div id="text-last-article">
                <p>La santé mentale : <br> Qu'est-ce que c'est <br> et comment la présercer ?</p>
                <p>Environ 20% de la population, soit 13 millions de Français, souffrent de troubles psychiques tels que la dépression et l'anxiété. Les jeunes adultes entre 18 et 25 ans sont particulièrement affectés, avec une augmentation notable des symptômes anxieux et dépressifs depuis 2020. Ces symptômes proviennent d’une mauvaise santé mentale. <br>

                    La “Santé mentale” ? Quésaco ? <br>

                    La santé mentale désigne la santé psychologique d’une personne, soit son bien être. Ce n’est pas quelque chose de figé, plutôt une évolution perpétuelle de notre cerveau, en recherche d’un équilibre psychique, en fonction de nos expériences ...</p>
            </div>
            <div id="button-article">
                <button class="button">Lire la suite</button>
            </div>
        </div>
    </section>

    <section id="forum-section">
        <h4>Le forum</h4>
        <div class="p-titre">
            <img src="public\images\masque-illus.svg" alt="forum-icon">
            <p>Des articles sur la santé mentale</p>
        </div>
        <div id="message">
            <div id="message-bleu">
                <img src="public\images\message-bleu.svg" alt="bulle de message">
                <p>...Car vous n'êtes jamais seul</p>
            </div>
            <div id="message-jaune">
                <img src="public\images\message-jaune.svg" alt="bulle de message">
                <p>Je découvre le Forum</p>
            </div>
        </div>
    </section>

    <section id="temoignage-section">
        <h4>Vos témoignages</h4>
        <div class="p-titre">
            <img src="public\images\masque-illus.svg" alt="temoignage-icon">
            <p>Ceux qui ont pu bénificier de notre aide</p>
        </div>
    </section>

</main>
<?php if (isset($scripts)) : ?>
    <?php foreach ($scripts as $script) : ?>
        <script src="public/js/<?= $script ?>"></script>
    <?php endforeach ?>
<?php endif ?>
</body>


</html>