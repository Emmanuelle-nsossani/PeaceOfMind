<?php

namespace app\controller;

require_once __DIR__ . '/../controller/Controller.php';  // Inclure le fichier de la classe Controller

use app\model\Connexion;

/**
 * Contrôleur responsable de la gestion des pages de connexion et des utilisateurs.
 *
 * @package app\controller
 */
class ConnexionController extends Controller
{
    // Méthode pour générer les données communes de la page
    private function genererData($view, $utilisateurs = [])
    {
        return [
            'utilisateurs' => $utilisateurs,  
            'page_title' => "J'ai besoin d'aide",  
            'css' => 'connexion.css', 
            'fontAwesome' => true,  
            'scripts' => ['header.js', 'connexion.js'],  
            'view' => $view,  
            'layout' => 'app/view/common/layout.php', 
        ];
    }

    /**
     * Méthode pour connecter un utilisateur 
     */

    //  Etape 1
    // Verifier les diiférentes informations

    // Etape 2
    // Ouvrir un session à l'utilisateur

    //faire un bouton de déconndxion

    //verifier si l'utilisateur peut ecrire un article

    /**
     * Méthode pour ajouter un utilisateur à la base de données.
     */
    public function ajouterUtilisateur()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer les données du formulaire
            $prenom = $_POST['prenom'];
            $nom = $_POST['nom'];
            $pseudo = $_POST['pseudo'];
            $email = $_POST['mail'];
            // $password = ['password']; // Hashage du mot de passe
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashage du mot de passe

            // // Vérifier si l'email existe déjà
            if (Connexion::emailExiste($email)) {
                echo "Cet email est déjà utilisé.";
                return;
            }

            // Créer un nouvel objet Connexion et l'hydrater
            $utilisateur = new Connexion();
            $utilisateur->setPrenom($prenom);
            $utilisateur->setNom($nom);
            $utilisateur->setUsername($pseudo);
            $utilisateur->setMail($email);
            $utilisateur->setPassword($password);

            // Sauvegarder l'utilisateur dans la base de données
            $utilisateur->save(); // Méthode à ajouter dans le modèle Connexion

            // Rediriger l'utilisateur après inscription
            header("Location: index.php?page=besoin-aide");
            exit();
        }
    }

    /**
     * Affiche la liste des utilisateurs.
     */
    public function afficherUtilisateurs()
    {
        $users = Connexion::getAllUsers(); // Récupération des utilisateurs

        $data = $this->genererData('app/view/utilisateurs.view.php', $users); // Utilise la méthode générant les données

        $this->genererPage($data);  // Passe les données à la méthode de génération de page
    }

    /**
     * Génère la page de connexion avec la liste des utilisateurs.
     */
    public function genererPageConnexion()
    {
        // Récupérer tous les utilisateurs depuis le modèle
        $utilisateurs = Connexion::getAllUsers();

        $data = $this->genererData('app/view/connexion.view.php', $utilisateurs);  // Utilise la méthode générant les données

        $this->genererPage($data);  // Passe les données à la méthode de génération de page
    }
}
