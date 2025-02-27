<main id="test">
    <div id="intro">
        <h1>PeaceInTest</h1>
        <div id="explication">
            <p>Ce test est conçu pour vous aider à identifier les domaines de votre vie où vous pourriez ressentir des signes de mal-être. Les résultats sont confidentiels et vous fourniront un aperçu clair sous forme de graphique.</p>
        </div>
        <div id="rappel">
            <p><b>Rappel :</b> Ce test n’est pas un diagnostic médical, mais un outil d’auto-évaluation. Si vous ressentez un mal-être persistant, n’hésitez pas à consulter un professionnel de santé.</p>
        </div>
        <div id="consigne">
            <p><b>Consigne :</b> Vous répondrez de 1 à 5 selon l’échelle de Likert:</p>
            <br>
            <ul>
                <li>1 : Pas du tout</li>
                <li>2 : Un peu</li>
                <li>3 : Moderement</li>
                <li>4 : Beacoup</li>
                <li>5 : Extrenement</li>
            </ul>
        </div>
    </div>
    <?php
    $questions = [
        '1' => 'Ces derniers jours, vous êtes-vous senti(e) dépassé(e) par vos émotions ?',
        '2' => 'Vous est-il arrivé de vous sentir triste ou déprimé(e) sans raison apparente ?',
        '3' => 'Vous sentez-vous souvent tendu(e) ou nerveux(se) ?',
        '4' => 'Vous arrive-t-il de ressentir une peur ou une inquiétude excessive à propos de l’avenir ?',
        '5' => 'Ces derniers temps, avez-vous des difficultés à vous endormir ou à rester endormi(e) ?',
        '6' => 'Ces derniers temps, avez-vous des difficultés à vous endormir ou à rester endormi(e) ?'
    ];
    ?>
    <form method="post" action="" id="test-form">
        <?php foreach ($questions as $y => $question) : ?>
            <fieldset>
                <legend><?=$question?></legend>
                <div class="container-input">
                    <input name="input-form-<?=$y?>" type="radio" class="input-form" value="1" checked />
                    <label for="input-form-<?=$y?>">1</label>
                </div>
                <div class="container-input">
                    <input name="input-form-<?=$y?>" type="radio" class="input-form" value="2" />
                    <label for="input-form-<?=$y?>">2</label>
                </div>
                <div class="container-input">
                    <input name="input-form-<?=$y?>" type="radio" class="input-form" value="3" />
                    <label for="input-form-<?=$y?>">3</label>
                </div>
                <div class="container-input">
                    <input name="input-form-<?=$y?>" type="radio" class="input-form" value="4" />
                    <label for="input-form-<?=$y?>">4</label>
                </div>
                <div class="container-input">
                    <input name="input-form-<?=$y?>" type="radio" class="input-form" value="5" />
                    <label for="input-form-<?=$y?>">5</label>
                </div>
            </fieldset>
        <?php endforeach ?>

        <button class="button">
            Voir le résultat
        </button>
    </form>
</main>