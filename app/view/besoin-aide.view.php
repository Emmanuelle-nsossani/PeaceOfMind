<main id="besoin-aide">
    <section id="intro">
        <h1>PeaceInHelp</h1>
        <div id="sous-titre">
            <img src="public\images\perso-msg.png" alt="Perso parle">
            <p>Demander de l’aide peut être une étape difficile, mais c’est aussi une preuve de force et de courage. Ici trouvez le soutien dont vous avez besoin !</p>
        </div>
        <div id="form-container">
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
        </div>
    </section>
</main>
<section id="map">
    <div id="map-container">
        <button id="close-map">
            <img src="public/images/croix.png" alt="">
        </button>
        <div id="carte">
            <gmp-map center="46.6031,1.8883" zoom="6" map-id="DEMO_MAP_ID" style="height: 1000px">

                <!-- 20 Marqueurs Jaunes -->
                <gmp-advanced-marker position="48.8566,2.3522" title="Paris">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Paris">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="45.7640,4.8357" title="Lyon">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Lyon">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="46.5802,1.9466" title="Châteauroux">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Châteauroux">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="46.9905,3.1590" title="Moulins">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Moulins">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="46.6025,3.1272" title="Nevers">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Nevers">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="46.5860,0.3404" title="Poitiers">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Poitiers">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="47.0833,2.3958" title="Bourges">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Bourges">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="45.7797,3.0869" title="Clermont-Ferrand">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Clermont-Ferrand">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="45.8336,1.2578" title="Limoges">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Limoges">
                    </gmp-icon>
                </gmp-advanced-marker>

                <!-- 10 autres marqueurs jaunes -->

                <!-- 20 Marqueurs Bleus -->
                <gmp-advanced-marker position="48.5734,7.7521" title="Strasbourg">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Strasbourg">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="44.8378,-0.5792" title="Bordeaux">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Bordeaux">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="47.3220,5.0415" title="Dijon">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Dijon">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="46.2140,2.0739" title="Montluçon">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Montluçon">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="45.0419,1.8884" title="Brive-la-Gaillarde">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Brive-la-Gaillarde">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="46.1254,3.4236" title="Vichy">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Vichy">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="46.9924,2.9611" title="Saint-Amand-Montrond">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Saint-Amand-Montrond">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="47.2471,2.3151" title="Vierzon">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Vierzon">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="46.9075,3.1608" title="Decize">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Decize">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="46.7811,3.0533" title="La Charité-sur-Loire">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="La Charité-sur-Loire">
                    </gmp-icon>
                </gmp-advanced-marker>
                <gmp-advanced-marker position="50.6292,3.0573" title="Lille">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Lille">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="47.2184,-1.5536" title="Nantes">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Nantes">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="43.6047,1.4442" title="Toulouse">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Toulouse">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="43.2965,5.3698" title="Marseille">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Marseille">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="43.7102,7.2620" title="Nice">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Nice">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.3904,-4.4861" title="Brest">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Brest">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="42.6986,2.8956" title="Perpignan">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Perpignan">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="47.9036,1.9039" title="Orléans">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Orléans">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="45.7786,3.0860" title="Riom">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Riom">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="44.8412,-0.5800" title="Talence">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Talence">
                    </gmp-icon>
                </gmp-advanced-marker>
                <gmp-advanced-marker position="49.2583,4.0317" title="Reims">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Reims">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.5839,7.7455" title="Colmar">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Colmar">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.0042,0.1972" title="Le Mans">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Le Mans">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="45.1885,5.7245" title="Grenoble">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Grenoble">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.8170,2.3388" title="Villejuif">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Villejuif">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="49.4305,1.0920" title="Rouen">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Rouen">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="47.2806,-2.2234" title="Saint-Nazaire">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Saint-Nazaire">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="49.1833,-0.3707" title="Caen">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Caen">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.0658,-1.6412" title="Rennes">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Rennes">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="44.0561,4.8384" title="Avignon">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Avignon">
                    </gmp-icon>
                </gmp-advanced-marker>
                <gmp-advanced-marker position="48.8566,2.3522" title="Paris">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Paris">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="45.7640,4.8357" title="Lyon">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Lyon">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="43.6045,1.4442" title="Toulouse">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Toulouse">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="43.2965,5.3698" title="Marseille">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Marseille">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="47.2184,-1.5536" title="Nantes">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Nantes">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="50.6292,3.0573" title="Lille">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Lille">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="49.4432,1.0999" title="Rouen">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Rouen">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.1173,-1.6778" title="Rennes">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Rennes">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="43.7102,7.2620" title="Nice">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Nice">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="45.1885,5.7245" title="Grenoble">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Grenoble">
                    </gmp-icon>
                </gmp-advanced-marker>

                <!-- 10 autres marqueurs jaunes -->

                <!-- 20 Marqueurs Bleus -->
                <gmp-advanced-marker position="48.5734,7.7521" title="Strasbourg">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Strasbourg">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="46.2044,6.1432" title="Genève (proche France)">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Genève">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="44.8378,-0.5792" title="Bordeaux">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Bordeaux">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="49.2583,4.0317" title="Reims">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Reims">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="45.7578,4.8320" title="Villeurbanne">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Villeurbanne">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.3904,-4.4861" title="Brest">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Brest">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="49.0333,2.0667" title="Cergy">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Cergy">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="47.3220,5.0415" title="Dijon">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Dijon">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="50.6927,3.1819" title="Roubaix">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Roubaix">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="43.2938,5.5653" title="Aix-en-Provence">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Aix-en-Provence">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.8014,2.1301" title="Versailles">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Versailles">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="49.0343,2.0621" title="Cergy">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Cergy">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.7872,2.4549" title="Créteil">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Créteil">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.9904,2.2924" title="Argenteuil">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Argenteuil">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.4384,2.5983" title="Melun">
                    <gmp-icon class="marker marqueur-jaune">
                        <img src="public/images/marqueur-jaune.svg" alt="Melun">
                    </gmp-icon>
                </gmp-advanced-marker>

                <!-- 5 nouveaux marqueurs bleus -->
                <gmp-advanced-marker position="48.8607,2.2123" title="Nanterre">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Nanterre">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.7743,2.0431" title="Saint-Quentin-en-Yvelines">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Saint-Quentin-en-Yvelines">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.956,2.878" title="Meaux">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Meaux">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.5291,2.6606" title="Évry-Courcouronnes">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Évry-Courcouronnes">
                    </gmp-icon>
                </gmp-advanced-marker>

                <gmp-advanced-marker position="48.9458,2.4085" title="Bobigny">
                    <gmp-icon class="marker marqueur-bleu">
                        <img src="public/images/marqueur-bleu.svg" alt="Bobigny">
                    </gmp-icon>
                </gmp-advanced-marker>

            </gmp-map>
        </div>

    </div>
</section>

<div id="overlay-med" class="overlay">
    <div class="overlay-content">
        <div id="header-overlay">
            <div id="pp-psy"></div>
            <div>
                <h4>Mr PSY</h4>
                <p>psychologue</p>
            </div>
            <div>
                <p>1km</p>
                <div id="fonction"></div>
            </div>
        </div>
        <div id="pos">
            <img src="public/images/pos-bleu.svg" alt="">
            <p>1 rue des Oppas, Gangnam Style, <span id="overlay-title"></span></p>
        </div>
        <button class="button">Prendre contact</button>
        <span id="overlay-close">&times;</span>
    </div>
</div>