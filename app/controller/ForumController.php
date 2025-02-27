<?php

//le controller sert à charger les différentes données

namespace app\controller;

/**
 * Contrôleur responsable de la gestion de la page d'accueil de l'application.
 *
 * @package app\controller
 */

class ForumController extends Controller
{
    /**
     * Génère la page d'accueil.
     */
    public function genererPageForum()
    {
        // Données nécessaires à la génération de la page
        $data = [
            'page_title' => 'Forum',
            'css' => 'forum.css',
            'fontAwesome' => true,
            'scripts' => ['header.js'],
            'view' => 'app/view/forum.view.php',
            'layout' => 'app/view/common/layout.php',
        ];

        $this->genererPage($data);

    }
}
