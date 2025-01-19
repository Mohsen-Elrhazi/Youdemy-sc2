<?php

use Youdemy\App\Controllers\TagController;
use Youdemy\App\Models\Tag;

$tagController= new TagController();
$tag=null;
 if(isset($_GET['id'])){
     $id=$_GET['id'];
    $tag= $tagController->editTag($id);
 }

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Ajouter Tag</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../../../../public/assets/css/Dashboard/Admin/Forms/modifier_tag.css" rel="stylesheet">


</head>

<body>

    <div class="form-container">

        <h1 class="form-title">Modifier un Tag</h1>

        <form id="tagForm" method="post">
            <div class=" form-group">
                <label class="form-label" for="tagName">Nom du tag</label>
                <input type="text" class="form-control" id="tagName" placeholder="ex: JavaScript" name="name"
                    value="<?php echo $tag->getName(); ?>">
            </div>
            <div class="form-actions">
                <button type="reset" class="btn-cancel">Annuler</button>
                <button type="submit" class="btn-submit" name="edit">Modifier</button>
            </div>
        </form>
    </div>


</body>

</html>