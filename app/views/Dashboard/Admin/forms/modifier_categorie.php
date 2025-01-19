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
        </div>
        <form id="categoryForm">
            <div class="form-group">
                <label class="form-label" for="categoryName">Nom de la catégorie</label>
                <input type="text" class="form-control" id="categoryName" name="categoryName"
                    placeholder="Entrez le nom de la catégorie" required>
            </div>
            <div class="form-group">
                <label class="form-label" for="categoryDescription">Description</label>
                <textarea class="form-control" id="categoryDescription" name="categoryDescription"
                    placeholder="Entrez une description pour la catégorie" required></textarea>
            </div>
            <div class="form-actions">
                <button type="reset" class="btn-cancel">Annuler</button>
                <button type="submit" class="btn-submit">Modifier</button>
            </div>
        </form>
    </div>
</body>

</html>