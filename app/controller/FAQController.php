<?php

namespace app\controller;

use app\model\FAQ;

/**
 * Contrôleur responsable de la gestion de la FAQ.
 */
class FAQController extends Controller
{
    /**
     * Génère la page de la FAQ.
     */
    public function genererPageFAQ(): void
    {
        // Récupérer toutes les questions classées par catégorie
        $questionsParCategorie = FAQ::getAllQuestions();

        // Préparer les données à transmettre à la vue
        $data = [
            'page_title' => "FAQ",
            'css' => 'faq.css',
            'fontAwesome' => true,
            'scripts' => ['faq.js'],
            'view' => 'app/view/faq.view.php',
            'layout' => 'app/view/common/layout.php',
            'questions' => $questionsParCategorie
        ];

        // Générer la page avec les données fournies
        $this->genererPage($data);
    }
}
