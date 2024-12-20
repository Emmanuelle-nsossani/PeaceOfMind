<?php

namespace app\controller;

/**
 * Classe de base pour tous les contrôleurs de l'application.
 * Fournit une méthode générique pour la génération de pages web.
 * 
 * classe abstraite
 *
 * @package app\controller
 */
abstract class Controller
{
    /**
     * Générer une page web à partir des données contenues dans le tableau data.
     * Le tableau data doit à minima contenir les champs 'view' et 'layout'.
     *
     * @param array $data Tableau contenant les données nécessaires à la génération de la page.
     *                    Les clés obligatoires sont 'view' (vue) 
     * @return void
     */
    protected function genererPage(array $data)

    {
        // Extraction des données pour les rendre accessibles dans les vues
        extract($data);

        // Récupération d'un éventuel message 
        if (!empty($_SESSION['message'])) {
            $message = $_SESSION['message'];  // Variable $message utilisée par le fichier layout.php
            unset($_SESSION['message']);
        }

        if (!file_exists($view)) {
            die("Erreur : Le fichier de vue spécifié n'existe pas ({$view}).");
        }

        // Capture le contenu généré par la vue
        ob_start();
        require_once $view;
        $content = ob_get_clean();  // Variable $content utilisée par le fichier layout.php

         // Inclut la mise en page qui intègre le contenu de la vue
         require_once $layout;
    }
     /**
     * Redirige l'utilisateur vers la page d'accueil avec un message spécifié.
     *
     * Cette méthode est utilisée pour rediriger l'utilisateur vers la page d'accueil
     * avec un message d'erreur ou d'information spécifié dans la variable de session.
     *
     * @param string $message Message à afficher à l'utilisateur.
     * @return void
     */
    protected function redirigerVersAccueil(string $message)
    {
        $_SESSION['message'] = $message;
        header("Location: index.php?page=accueil");
        exit();
    }
}
