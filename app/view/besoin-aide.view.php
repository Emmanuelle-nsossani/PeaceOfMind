<main id="besoin-aide">
    <section id="intro">
        <h1>PeaceInHelp</h1>
        <div>
            <img src="public\images\perso-msg.png" alt="Perso parle">
            <p>Demander de l’aide peut être une étape difficile, mais c’est aussi une preuve de force et de courage. Ici trouvez le soutien dont vous avez besoin !</p>
        </div>
        <p id="intro-p">Après quelques questions rapides, vous serez <span class="bold">orienté</span> vers notre sélection de <span class="bold">blogs informatifs</span> ou directement vers <span class="bold">une carte interactive qui répertorie des professionnels près de chez vous</span>
            (psychologues, nutritionnistes, et autres experts). Afin d’être redirigé vers le meilleur service !</p>
        <form>
            <div id="question1">
                <div class="titre-question">
                    <p>Je cherche une aide pour :</p>
                </div>
                <div class="proposition">
                    <button class="button" id="next-q1">
                        <div>
                            <p>A</p>
                        </div>
                        <div>
                            <p>Moi</p>
                        </div>
                    </button>
                    <button class="button afficher-map">
                        <div>
                            <p>B</p>
                        </div>
                        <div>
                            <p>Pour un proche</p>
                        </div>
                    </button>
                </div>
            </div>
            <div class="question-hidden" id="question2">
                <div class="titre-question">
                    <p>Je ressent un besoin d'urgence d'aide (detresse émotionnelle, <br>comportement à risque) ?</p>
                </div>
                <div class="proposition">
                    <button class="button afficher-map">
                        <div>
                            <p>A</p>
                        </div>
                        <div>
                            <p>Oui</p>
                        </div>
                    </button>
                    <button class="button" id="next-q2">
                        <div>
                            <p>B</p>
                        </div>
                        <div>
                            <p>Non</p>
                        </div>
                    </button>
                </div>
            </div>
            <div class="question-hidden" id="question3">
                <div class="titre-question">
                    <p>J'ai besoin d'un accompagnement personnalisé avec un professionnel (psychologue, nutritionniste, etc...)</p>
                </div>
                <div class="proposition">
                    <button class="button afficher-map">
                        <div>
                            <p>A</p>
                        </div>
                        <div>
                            <p>Oui</p>
                        </div>
                    </button>
                    <button class="button" id="next-q3">
                        <div>
                            <p>B</p>
                        </div>
                        <div>
                            <p>Non</p>
                        </div>
                    </button>
                </div>
            </div>
            <div class="question-hidden" id="question4">
                <div class="titre-question">
                    <p>Je préfère lire des informations, des conseils ou des témoignages avant de contacter un professionnel ?</p>
                </div>
                <div class="proposition">
                    <button class="button" id="link-article">
                        <div>
                            <p>A</p>
                        </div>
                        <div>
                            <p>Oui</p>
                        </div>
                    </button>
                    <button class="button afficher-map">
                        <div>
                            <p>B</p>
                        </div>
                        <div>
                            <p>Non</p>
                        </div>
                    </button>
                </div>
            </div>
        </form>
    </section>
</main>
<section id="map">
    <div id="map-container">
        <button id="close-map">
            <img src="public/images/croix.png" alt="">
        </button>
        <div id="carte">
            <gmp-map center="48.8566,2.3522" zoom="10" map-id="DEMO_MAP_ID" style="height: 1000px">
                <!-- Marqueur à Bobigny -->
                <gmp-advanced-marker position="48.9168,2.4366" title="Bobigny, France"></gmp-advanced-marker>
                
                <!-- Marqueur à Lieusaint -->
                <gmp-advanced-marker position="48.6017,2.6077" title="Lieusaint, France"></gmp-advanced-marker>
            </gmp-map>
        </div>
    </div>
</section>