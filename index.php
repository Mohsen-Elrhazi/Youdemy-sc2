<?php
require_once __DIR__ .'/vendor/autoload.php';

use Youdemy\App\Controllers\UserController;
use Youdemy\App\Controllers\AuthController;
use Youdemy\App\Controllers\TagController;


session_start(); 

$page = $_GET['page'] ?? 'platform';
$AuthController = new AuthController();

switch ($page) {
    case 'register':
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
            // si c'est une soumission de formulaire
            $AuthController->register();
        } else {
            // si c'est juste l'affichage du formulaire
            $AuthController->showRegisterForm();
        }
        break;

    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
            $AuthController->login();
        } else {
            $AuthController->showLoginForm();
        }
        break;

    case 'platform':
        include 'app/views/Platform/platform.php';
        break;
        
    case 'enseignant':
        include 'app/views/Dashboard/Enseignant/enseignant.php';
    break;

    case 'admin':
        include 'app/views/Dashboard/Admin/admin.php';
    break;
    
    default:
        http_response_code(404);
        echo "Page introuvable";
        break;
}