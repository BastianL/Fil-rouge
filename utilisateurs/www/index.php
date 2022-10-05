<?php

echo '<pre>'.var_export($_GET, true);

$page = $_GET['page'] ?? 'home';


switch($page)
{
    case 'home':
        include '../View/home.php';
    break;
    case 'profile':
        include '../Controller/ProfileController.php';
        $controller = new Users\Controller\ProfileController();
        $controller->index();
    break;
    case 'groupes':
        include '../Controller/GroupController.php';
        $controller = new Users\Controller\GroupController();
        $controller->index();
    break;
    default:
        echo 'Erreur 404';
    break;
}
?>