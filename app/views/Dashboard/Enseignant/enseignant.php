<?php
include_once 'includes/check_enseignant_session.php'; 

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

     
     include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Enseignant/layouts/header.php';
     include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Enseignant/layouts/sidebar.php';
     include_once $_SERVER['DOCUMENT_ROOT']. '/app/views/Dashboard/Enseignant/layouts/section.php';
     include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Enseignant/layouts/navbar.php';
     include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Enseignant/layouts/homeContent.php';

// Recuperer la page depuis l'URL
$page = $_GET['page'] ?? 'ajouter_cours';

switch ($page) {
 case 'ajouter_cours':
include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Enseignant/pages/ajouter_cours.php';
break;
case 'modifier_cours':
include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Enseignant/pages/modifier_cours.php';
break;
case 'cours':
include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Enseignant/pages/cours.php';
break;
case 'inscriptions':
include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Enseignant/pages/inscriptions.php';
break;
case 'analyses':
include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Enseignant/pages/analyses.php';
break;
case 'logout':
include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Enseignant/pages/logout.php';
break;
default:
include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Enseignant/pages/ajouter_cours.php';
break;
}

include_once $_SERVER['DOCUMENT_ROOT']. '/app/views/Dashboard/Enseignant/layouts/endHomeContent.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Enseignant/layouts/endSection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/app/views/Dashboard/Enseignant/layouts/footer.php';


?>