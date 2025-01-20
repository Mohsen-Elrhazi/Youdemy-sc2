<?php
namespace Youdemy\App\Services;

use Youdemy\App\Models\Course;

class CourseService {

public static function rendreCard(Course $course) {
$title = htmlspecialchars($course->getTitle());
$imageURL = $course->getImageUrl();
$description = htmlspecialchars($course->getDescription());
$contentURL = $course->getContentUrl();
$typeContent = htmlspecialchars($course->getTypeContent());
$categoryID = htmlspecialchars($course->getCategoryId());
$price = htmlspecialchars($course->getPrice());

// Gérer le contenu (PDF ou vidéo)
$contentDisplay = '';
if ($typeContent === 'pdf') {
$contentDisplay = "<a href='{$contentURL}' target='_blank' class='btn btn-secondary'>Télécharger le PDF</a>";
} elseif ($typeContent === 'video') {
$contentDisplay = "
<video controls class='course-card-video'>
    <source src='{$contentURL}' type='video/mp4'>
    Votre navigateur ne supporte pas la lecture vidéo.
</video>
";
} else {
$contentDisplay = "<p>Type de contenu non supporté</p>";
}

// Retourner le HTML de la carte
return "
<div class='course-card'>
    <img src='{$imageURL}' alt='Image de cours' class='course-card-img'>
    <div class='course-card-body'>
        <h3 class='course-card-title'>{$title}</h3>
        <p class='course-card-description'>{$description}</p>
        <p class='course-card-category'><strong>Catégorie ID:</strong> {$categoryID}</p>
        <div class='course-card-footer'>
            <span class='course-card-price'><strong>Prix:</strong> {$price}€</span>
            {$contentDisplay}
        </div>
    </div>
</div>
";
}
}
?>