<?php
    $titre="dashboard";
 
  
    
include './layouts/header.php';
include './layouts/sidebar.php';
include './layouts/section.php';
include './layouts/navbar.php';
include './layouts/homeContent.php';

// Recuperer la page depuis l'URL
 $page = $_GET['page'] ?? 'enseignants';

switch ($page) {
 case 'enseignants':
include './pages/enseignants.php';
break;
case 'utilisateurs':
include './pages/utilisateurs.php';
break;
case 'cours':
include './pages/cours.php';
break;
case 'categorie':
include './pages/categorie.php';
break;
case 'modifier_categorie':
include './pages/modifier_categorie.php';
break;
case 'tag':
include './pages/tag.php';
break;
case 'modifier_tag':
include './pages/modifier_tag.php';
break;
case 'messages':
include './pages/messages.php';
break;
case 'analyses':
include './pages/analyses.php';
break;
case 'logout':
include './pages/logout.php';
break;
case 'ajouter_produit':
default:
include './pages/enseignants.php';
break;
}

include './layouts/endHomeContent.php';
include './layouts/endSection.php';

include './layouts/footer.php';


?>