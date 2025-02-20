<?php

//le controller sert à charger les différentes données

namespace app\controller;

/**
 * Contrôleur responsable de la gestion de la page d'accueil de l'application.
 *
 * @package app\controller
 */

class Article3Controller extends Controller
{
    /**
     * Génère la page d'accueil.
     */
    public function genererPageArticle3()
    {
        // Données nécessaires à la génération de la page
        $data = [
            'page_title' => 'Article | POM',
            'css' => 'blog.css',
            'fontAwesome' => true,
            'scripts' => ['blog.js','header.js'],
            'view' => 'app/view/article3.view.php',
            'layout' => 'app/view/common/layout.php',
        ];

        $this->genererPage($data);

    }
}
