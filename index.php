<?php
require_once __DIR__ .'/vendor/autoload.php';

use Youdemy\App\Controllers\UserController;


session_start(); 

$page = $_GET['page'] ?? 'platform';
$controller = new UserController();

switch ($page) {
    case 'register':
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
            // Si c'est une soumission de formulaire
            $controller->register();
        } else {
            // Si c'est juste l'affichage du formulaire
            $controller->showRegisterForm();
        }
        break;

    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
            $controller->login();
        } else {
            $controller->showLoginForm();
        }
        break;

    case 'platform':
        include 'app/views/Platform/platform.php';
        break;

    default:
        http_response_code(404);
        echo "Page introuvable";
        break;
}