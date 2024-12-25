<?php

//le controller sert à charger les différentes données

namespace app\controller;

/**
 * Contrôleur responsable de la gestion de la page d'accueil de l'application.
 *
 * @package app\controller
 */

class AccueilController extends Controller
{
    /**
     * Génère la page d'accueil.
     */
    public function genererPageAccueil()
    {
        // Données nécessaires à la génération de la page
        $data = [
            'page_title' => 'Accueil',
            'css' => 'accueil.css',
            'fontAwesome' => true,
            'scripts' => ['acceuil.js'],
            'view' => 'app/view/accueil.view.php',
            'layout' => 'app/view/common/layout.php',
        ];

        $this->genererPage($data);

    }
}
