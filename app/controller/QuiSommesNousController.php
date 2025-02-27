<?php

//le controller sert à charger les différentes données

namespace app\controller;

/**
 * Contrôleur responsable de la gestion de la page d'accueil de l'application.
 *
 * @package app\controller
 */

class QuiSommesNousController extends Controller
{
    /**
     * Génère la page d'accueil.
     */
    public function genererPageQuiSommesNous()
    {
        // Données nécessaires à la génération de la page
        $data = [
            'page_title' => "Qui sommes-nous ?",
            'css' => 'qui-sommes-nous.css',
            'fontAwesome' => true,
            'scripts' => ['header.js','besoin-aide.js'],
            'view' => 'app/view/qui-sommes-nous.view.php',
            'layout' => 'app/view/common/layout.php',
        ];

        $this->genererPage($data);

    }
}
