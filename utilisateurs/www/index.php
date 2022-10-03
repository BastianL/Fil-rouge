<?php

echo '<pre>'.var_export($_GET, true);

$page = $_GET['page'] ?? '404';


switch($page)
{
    case 'home':
        include '../View/home.php';
    break;
    case 'profile':
        include '../View/profile.php';
    break;
    default:
        echo 'Erreur 404';
    break;
}
?>