<?php
    $titre="dashboard";
 
  
    
include './layouts/header.php';
include './layouts/sidebar.php';
include './layouts/section.php';
include './layouts/navbar.php';
include './layouts/homeContent.php';

// Recuperer la page depuis l'URL
$page = $_GET['page'] ?? 'ajouter_cours';

switch ($page) {
 case 'ajouter_cours':
include './pages/ajouter_cours.php';
break;
case 'modifier_cours':
include './pages/modifier_cours.php';
break;
case 'cours':
include './pages/cours.php';
break;
case 'inscriptions':
include './pages/inscriptions.php';
break;
case 'analyses':
include './pages/analyses.php';
break;
case 'logout':
include './pages/logout.php';
break;
// case 'ajouter_cours':
default:
include './pages/ajouter_cours.php';
break;
}

include './layouts/endHomeContent.php';
include './layouts/endSection.php';

include './layouts/footer.php';


?>