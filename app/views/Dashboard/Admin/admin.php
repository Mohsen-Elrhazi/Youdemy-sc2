<?php
        // if (isset($_SESSION['role'])!='Admin') {
        // session_start();
        //     unset($_SESSION['role']);
        // }
        
    // $titre="Admin";
    
    require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
    
    
    session_start();
    
include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/layouts/header.php';
include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/layouts/sidebar.php';
include $_SERVER['DOCUMENT_ROOT']. '/app/views/Dashboard/Admin/layouts/section.php';
include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/layouts/navbar.php';
include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/layouts/homeContent.php';

// Recuperer la page depuis URL
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
include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/pages/categorie.php';
break;
case 'modifier_categorie':
include $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Admin/pages/modifier_categorie.php';
break;
case 'tag':
    if (isset($_SESSION['error'])) {
        echo "<div class='alert alert-danger text-center'>".$_SESSION['error']."</div>";
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
        echo "<div class='alert alert-success text-center'>{$_SESSION['success']}</div>";
        unset($_SESSION['success']);
    }
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


?>