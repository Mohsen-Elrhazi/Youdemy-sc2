<?php
include_once 'includes/check_admin_session.php'; 

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Youdemy\App\Controllers\UserController;
use Youdemy\App\Controllers\AuthController;
use Youdemy\App\Controllers\TagController;
use Youdemy\App\Controllers\CategoryController;

$tagController = new TagController();
$categoryController = new CategoryController();

ob_start();
// session_start();

include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/layouts/header.php';
include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/layouts/sidebar.php';
include $_SERVER['DOCUMENT_ROOT']. '/app/views/Dashboard/Admin/layouts/section.php';
include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/layouts/navbar.php';
include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/layouts/homeContent.php';

include_once 'includes/session_messages.php'; 

// Récupérer la page depuis l'URL
$page = $_GET['page'] ?? 'enseignants';

switch ($page) {
    case 'enseignants':
        include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/pages/enseignants.php';
        break;
    case 'utilisateurs':
        include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/pages/utilisateurs.php';
        break;
    case 'cours':
        include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/pages/cours.php';
        break;
    case 'categorie':
        $categoryController->ajouterCategory();
        include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/pages/categorie.php';
        break;
    case 'modifier_categorie':
        include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/pages/modifier_categorie.php';
        break;
    case 'tag':
        $tagController->ajouterTag();
        include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/pages/tag.php';
        break;
    case 'modifier_tag':
        include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/pages/modifier_tag.php';
        break;
    case 'messages':
        include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/pages/messages.php';
        break;
    case 'analyses':
        include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/pages/analyses.php';
        break;
    case 'logout':
        include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/pages/logout.php';
        break;
    default:
        include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/pages/enseignants.php';
        break;
}

include $_SERVER['DOCUMENT_ROOT']. '/app/views/Dashboard/Admin/layouts/endHomeContent.php';
include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/layouts/endSection.php';
include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/layouts/footer.php';

ob_end_flush();
?>