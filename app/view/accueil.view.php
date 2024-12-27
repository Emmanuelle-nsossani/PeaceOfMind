<main>
    <section id="banniere">
        <img src="public\images\titre noir POM.png" alt="">
        <p>L'espoir d'un nouveau départ</p>
    </section>
    <section>
        <div id="sante-mentale">
            <h4>Allez-vous bien mentalement ?</h4>
            <div id="sante-mentale-text">
                <p>Nous vous proposons un test conçu pour évaluer votre niveau de santé mentale, il vous aidera à mieux comprendre votre état émotionnel et psychologique. En un instant, obtenez un résultat chiffré et détaillé. Pour en savoir plus évaluez votre mental en 2min.</p>
                <!-- button from Uiverse.io by Creatlydev -->
                <img src="public\images\sante-mentale-illus.png" alt="">
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
    <section>
        <h2>La santé Mentale</h2>
        <p>Le saviez vous</p>
        <div id="container-carte">
            <div class="carte">
                <img src="" alt="" class="picto-lampe">
                <p>Question</p>
                <p>La santé mentale ne concerne que le lorem impsum ?</p>
            </div>
        </div>
    </section>
    <section>
        <h2>Notre blog présent pour vous</h2>
        <p>Des articles sur la santé mentale</p>
        <div class="article-container">
            <div id="article">
                <p>Notre dernier article</p>
                <img src="" alt="">
                <p class="date-article">OO/OO/OO</p>
                <h2>H2</h2>
                <p>Châpo de l'article</p>
                <p>orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <a href="">Lire la suite</a></p>
            </div>
        </div>
    </section>
    <section>
        <h2>Le forum</h2>
        <p>Un espace ou vous échangez ananymement</p>
        <div class="message">
            <p>Car vous n'êtes jamais le seul...</p>
        </div>
        <div class="message">
            <p>Je découvre le Forum</p>
        </div>
    </section>
    <section>
        <h2>Vos témoignage</h2>
        <p>Ceux qui ont pût bénéficier de notre aide</p>
        <div id="container-temoignage">
            <div></div>
            <div>
                <div id="personne">
                    <p>Anonyme</p>
                </div>
                <div>
                    <p>Principale aide: Les appels</p>
                    <p>Placerat enim. Quisque sollicitudin. Praesent Nullam ultrices lacus vehicula, non leo. gravida In convallis. tempor Cras eu</p>
                </div>
            </div>
            <div></div>
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