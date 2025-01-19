<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youdemy - Ajouter Tag</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../../../../../public/assets/css/Dashboard/Admin/Forms/ajouter_tag.css" rel="stylesheet">


</head>

<body>
    <button class="modal-trigger" data-bs-toggle="modal" data-bs-target="#tagModal">
        Ajouter un Tag
    </button>


    <div class="modal fade" id="tagModal" tabindex="-1">

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un Tag</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                </div>
                <div class="modal-body">
                    <form id="tagForm" method="post" action="/app/views/Dashboard/Admin/admin.php?page=tag">
                        <div class="form-group">
                            <label class="form-label" for="tagName">Nom du tag</label>
                            <input type="text" class="form-control" id="tagName" placeholder="ex: JavaScript"
                                name="tagName">

                        </div>
                        <div class=" modal-footer">
                            <button type="button" class="btn-cancel" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn-submit" name="ajouterTag">Créer le tag</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>