<?php

//le controller sert à charger les différentes données

namespace app\controller;

/**
 * Contrôleur responsable de la gestion de la page d'accueil de l'application.
 *
 * @package app\controller
 */

class FAQController extends Controller
{
    /**
     * Génère la page d'accueil.
     */
    public function genererPageFAQ()
    {
        // Données nécessaires à la génération de la page
        $data = [
            'page_title' => "FAQ",
            'css' => 'faq.css',
            'fontAwesome' => true,
            'scripts' => ['faq.js'],
            'view' => 'app/view/faq.view.php',
            'layout' => 'app/view/common/layout.php',
        ];

        $this->genererPage($data);

    }
}
