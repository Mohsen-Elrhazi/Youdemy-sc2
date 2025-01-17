<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!--Bottstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../public/assets/css/auth/register.css" />
    <title>Inscription</title>

</head>

<body>
    <div class="signup-container">
        <?php
        if (isset($_SESSION['error'])) {
            // session_start();
            echo "<div class='alert alert-danger text-center'>{$_SESSION['error']}</div>";
            unset($_SESSION['error']);
        }
        if (isset($_SESSION['success'])) {
            echo "<div class='alert alert-success text-center'>{$_SESSION['success']}</div>";
            unset($_SESSION['success']);
        }
        ?>
        <a class="back-home" href="./../../../index.php?page=platform"><i class="fa-solid fa-arrow-left-long"></i></a>

        <form class="signup-form" method="post" action="../../../index.php?page=register">
            <div class="signup-header">
                <h1>S'inscrire et commencer à apprendre</h1>
            </div>

            <div class="form-group">
                <label for="fullname">Nom complet</label>
                <input type="text" id="fullname" class="form-control" name="username">
            </div>

            <div class="form-group">
                <label for="role">Vous êtes</label>
                <select id="role" class="form-control" name="role">
                    <option value="">Sélectionnez votre rôle</option>
                    <option value="Etudiant">Étudiant</option>
                    <option value="Enseignant">Enseignant</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="nom@exemple.com" name="email">
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" class="form-control" placeholder="••••••••" name="password">
            </div>

            <button type="submit" class="signup-btn" name="register">S'inscrire</button>



            <div class="signin-prompt">
                Vous avez déjà un compte ? <a href="./../../../index.php?page=login">Se connecter</a>
            </div>
        </form>
    </div>

    <!-- bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>