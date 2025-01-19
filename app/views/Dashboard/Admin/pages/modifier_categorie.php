<?php 
use Youdemy\App\Controllers\CategoryController;
use Youdemy\App\Models\Category;

$categoryController= new CategoryController();
$category=null;
 if(isset($_GET['id'])){
     $id=$_GET['id'];
    $category= $categoryController->editCategory($id);
 }

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Ajouter Catégorie</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../../../../public/assets/css/Dashboard/Admin/Forms/modifier_categorie.css" rel="stylesheet">

    <style>

    </style>
</head>

<body>
    <div class="form-container">
        <div class="form-header">
            <h5>Modifier une Catégorie</h5>
            <!-- <p>Créez une nouvelle catégorie pour organiser vos cours</p> -->
        </div>
        <form id="categoryForm" method="post">
            <div class="form-group">
                <label class="form-label" for="categoryName">Nom de la catégorie</label>
                <input type="text" class="form-control" id="categoryName" name="name"
                    placeholder="Entrez le nom de la catégorie" value="<?php echo $category->getName(); ?>">
            </div>
            <div class="form-group">
                <label class="form-label" for="categoryDescription">Description</label>
                <textarea class="form-control" id="categoryDescription" name="description"
                    placeholder="Entrez une description pour la catégorie"> <?php echo $category->getDescription(); ?></textarea>
            </div>
            <div class="form-actions">
                <button type="reset" class="btn-cancel"><a class="text-decoration-none"
                        href=" /app/views/Dashboard/Admin/admin.php?page=categorie">Annuler</a></button>
                <button type="submit" class="btn-submit" name="edit">Modifier</button>
            </div>
        </form>
    </div>
</body>

</html>