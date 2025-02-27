<main id="faq">
    <div id="intro">
        <h1>Peace&Answer</h1>
        <h2>FAQ - Vos questions les plus fréquentes :</h2>
    </div>

    <div id="container-liste-question">
        <?php 
        // Définition des titres correspondant aux catégories
        $titresCategories = [
            'aide' => 'Demander de l’aide',
            'comprendre' => 'Comprendre la santé mentale',
            'prevention' => 'Prévention et bien-être',
            'ressource' => 'Trouver des ressources',
            'trouble' => 'Identifier les troubles'
        ];
        
        foreach ($questions as $categorie => $listeQuestions): 
            // Vérifier si la catégorie a un titre défini
            $titre = $titresCategories[$categorie] ?? ucfirst($categorie);
        ?>
            <h3><?= htmlspecialchars($titre) ?></h3>
            <div class="question-categorie">
                <?php foreach ($listeQuestions as $faq): ?>
                    <div class="container-question">
                        <div class="question">
                            <p><?= htmlspecialchars($faq->getQuestion()) ?></p>
                            <img src="public/images/fleche-vers-le-bas.png" alt="Flèche">
                        </div>
                        <p class="reponse hidden-reponse"><?= htmlspecialchars($faq->getReponse()) ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</main>
