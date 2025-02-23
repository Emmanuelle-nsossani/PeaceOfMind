<?php

//le controller sert à charger les différentes données

namespace app\controller;

/**
 * Contrôleur responsable de la gestion de la page d'accueil de l'application.
 *
 * @package app\controller
 */

class TestController extends Controller
{
    /**
     * Génère la page de test.
     */
    public function genererPageTest()
    {
        // Données nécessaires à la génération de la page
        $data = [
            'page_title' => 'Test',
            'css' => 'test.css',
            'fontAwesome' => true,
            'scripts' => ['test.js','header.js'],
            'view' => 'app/view/accueil.view.php',
            'layout' => 'app/view/common/layout.php',
        ];

        $this->genererPage($data);

    }
}
