<?php
namespace Valarep;


session_start();
// début de l'application web

// inclusion des classes externes
use Valarep\controller\HomeController;

// Chargement automatique des classes
require_once "vendor/autoload.php";



// récupération de la variable transmise par GET
// est ce qu'on a cliqué sur le navbar ?
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    // page par défaut
    $page = 'home';
}
switch ($page) {
    case 'home':
        HomeController::home();
        break;
    default:
        //todo: ERREUR 404
        break;
}
