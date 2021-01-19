<?php
namespace Valarep;


session_start();
// début de l'application web

// inclusion des classes externes
use Valarep\controller\HomeController;
use Valarep\controller\UserController;

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
        HomeController::home($page);
        break;
    case 'list':
        UserController::listUser($page);
        break;
    case 'profil':
        $id = (int)$_GET['id'];
        UserController::profilUser($id);
        break;
    default:
        //todo: ERREUR 404
        break;
}
