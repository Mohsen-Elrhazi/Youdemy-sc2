<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Ajouter Catégorie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../../../../public/assets/css/Dashboard/Admin/Forms/ajouter_categorie.css" rel="stylesheet">

</head>

<body>
    <button class="modal-trigger" data-bs-toggle="modal" data-bs-target="#categoryModal">
        Ajouter une Catégorie
    </button>

    <div class="modal fade" id="categoryModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter une Catégorie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                </div>
                <div class="modal-body">
                    <form id="categoryForm" method="post" action="/app/views/Dashboard/Admin/admin.php?page=categorie">
                        <div class="form-group">
                            <label class="form-label" for="categoryName">Nom de la catégorie</label>
                            <input type="text" class="form-control" id="categoryName" name="name"
                                placeholder="Entrez le nom de la catégorie">
                        </div>
                        <div class="form-group">
                            <label class="form-label" for="categoryDescription">Description</label>
                            <textarea class="form-control" id="categoryDescription" name="description"
                                placeholder="Entrez une description pour la catégorie"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-cancel" data-bs-dismiss="modal">Annuler</button>
                    <button type="submit" form="categoryForm" class="btn-submit" name="ajouterCategory">Ajouter</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>