<footer>
    <p class="bold">Soutenons les jeunes</p>
    <button class="button">
        <div></div>
        <p>Faire un don</p>
        <img src="public\images\dons-button.png" alt="dons">
    </button>
    <p class="titre-footer">Où nous retrouver</p>
    <div class="container-icon">
        <div class="icon"></div>
        <div class="icon"></div>
        <div class="icon"></div>
    </div>
    <p class="titre-footer">Nos partenaires</p>
    <div class="container-icon">
        <div class="icon"></div>
        <div class="icon"></div>
        <div class="icon"></div>
        <div class="icon"></div>
        <div class="icon"></div>
    </div>
    <p class="titre-footer" id="slogan-footer">L'espoir d'un nouveau départ</p>
    <div id="bottom-footer">
        <div class="logo-container">
            <img class="logo-header" src="public\images\logo.png" alt="logo">
            <img src="public\images\titre-blanc.png" alt="">
        </div>
        <ul>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Mentions légales</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Tous droits réservés</a></li>
        </ul>
    </div>
</footer>

<?php if (isset($scripts)) : ?>
    <?php foreach ($scripts as $script) : ?>
        <script src="public/js/<?= $script ?>"></script>
    <?php endforeach ?>
<?php endif ?>
</body>


</html>