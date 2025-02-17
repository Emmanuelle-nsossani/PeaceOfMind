<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

require_once 'autoload.php';
require_once 'config.php'; //A metttre apres création db
require_once 'app/model/database.php'; //A metttre apres création db

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$page = 'accueil';
if (!empty($_GET['page'])) {
    $page = $_GET['page'];
}


try {
    switch ($page) {
        case 'accueil':
            $accueilController = new app\controller\AccueilController();
            $accueilController->genererPageAccueil();
            break;
        case 'besoin-aide':
            $besoinAideController = new app\controller\BesoinAideController();
            $besoinAideController->genererPageBesoinAide();
            break;
        case 'connexion':
            $besoinAideController = new app\controller\ConnexionController();
            $besoinAideController->genererPageConnexion();
            break;
        case 'send-inscription':
            $besoinAideController = new app\controller\ConnexionController();
            $besoinAideController->ajouterUtilisateur();
            break;
        case 'send-connection':
            $besoinAideController = new app\controller\ConnexionController();
            $besoinAideController->ajouterUtilisateur();
            break;
        case 'qui-sommes-nous':
            $quiSommesNousController = new app\controller\QuiSommesNousController();
            $quiSommesNousController->genererPageQuiSommesNous();
            break;
        default:
            throw new Exception("Page inconnue : {$page}");
    }
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
