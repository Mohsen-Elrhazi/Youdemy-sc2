<?php 
// require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use Youdemy\App\Controllers\CategoryController;
use Youdemy\App\Models\Category;
use Youdemy\App\Services\CategoryService;

use Youdemy\App\Controllers\TagController;
use Youdemy\App\Models\Tag;
use Youdemy\App\Services\TagService;


$categoryController = new CategoryController();

$categorys = $categoryController->afficherCategorys();

$tagController = new TagController();

$tags = $tagController->afficherTags();


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Modal - Design Raffiné</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../../../../public/assets/css/Dashboard/Enseignant/Forms/ajouter_course.css" rel="stylesheet">


</head>

<body>

    <!-- Bouton pour ouvrir la modal -->
    <div class="container mt-5 text-center">
        <button type="button" class="btn btn-primary p-3 btn-modal" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            Ouvrir le formulaire
        </button>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulaire Produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Formulaire -->
                    <form method="post">
                        <div class="mb-3">
                            <label for="title" class="form-label">Titre</label>
                            <input type="text" class="form-control" id="title" placeholder="Entrez le titre"
                                name="title">
                        </div>
                        <div class=" mb-3">
                            <label for="imageURL" class="form-label">URL de l'image</label>
                            <input type="url" class="form-control" id="imageURL" placeholder="Entrez l'URL de l'image"
                                name="imageURL">
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" rows="3" placeholder="Entrez la description"
                                name="description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="contentURL" class="form-label">URL du contenu</label>
                            <input type="url" class="form-control" id="contentURL" placeholder="Entrez l'URL du contenu"
                                name="contenuURL">
                        </div>
                        <div class="mb-3">

                            <select id="categorys" name="category">
                                <?php
                                foreach($categorys as $category){
                                    echo CategoryService::rendreOption($category);
                                }
                                  ?>
                            </select>
                        </div>
                        <div class="mb-3 tags">
                            <?php
                                foreach($tags as $tag){
                                    echo TagService::rendreCheckbox($tag);
                                }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Prix</label>
                            <input type="number" class="form-control" id="price" placeholder="Entrez le prix"
                                name="price">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" id="submitForm">Soumettre</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS et Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>

    </script>

</body>

</html>