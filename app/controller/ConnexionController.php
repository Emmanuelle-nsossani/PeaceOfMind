<?php

namespace app\controller;

use app\model\Connexion;

/**
 * Contrôleur responsable de la gestion de la page d'accueil de l'application.
 *
 * @package app\controller
 */

class ConnexionController extends Controller
{
    /**
     * Génère la page d'accueil.
     */
    public function genererPageConnexion()
    {
        // Données nécessaires à la génération de la page
        $data = [
            // 'utilisateur' => new Connexion(),
            'page_title' => "J'ai besoin d'aide",
            'css' => 'connexion.css',
            'fontAwesome' => true,
            'scripts' => ['carte.js','connexion.js'],
            'view' => 'app/view/connexion.view.php',
            'layout' => 'app/view/common/layout.php',
        ];

        $this->genererPage($data);

    }
}
