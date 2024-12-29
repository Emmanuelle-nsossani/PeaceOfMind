<?php
session_start();

require_once 'autoload.php';
// require_once 'config.php'; A metttre apres création db
// require_once 'app/model/database.php'; A metttre apres création db

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
        default:
            throw new Exception("Page inconnue : {$page}");
    }
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
