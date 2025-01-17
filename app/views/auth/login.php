<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!--Bottstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="../../../public/assets/css/auth/login.css" />
    <title>Connexion</title>

</head>

<body>
    <div class="signin-container">
        <?php
        if (isset($_SESSION['error'])) {
            // session_start();
            echo "<div class='alert alert-danger text-center'>".$_SESSION['error']."</div>";
            unset($_SESSION['error']);
        }
        // if (isset($_SESSION['success'])) {
        //     echo "<div class='alert alert-success text-center'>{$_SESSION['success']}</div>";
        //     unset($_SESSION['success']);
        // }
        ?>

        <a class="back-home" href="./../../../index.php?page=platform"><i class="fa-solid fa-arrow-left-long"></i></a>

        <form class="signin-form" method="post" action="../../../index.php?page=login">
            <div class=" signin-header">
                <h1>Se connecter</h1>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="nom@exemple.com" name="email" />
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" class="form-control" placeholder="••••••••" name="password" />
            </div>

            <div class="forgot-password">
                <a href="#">Mot de passe oublié ?</a>
            </div>

            <button type="submit" class="signin-btn" name="login">Se connecter</button>

            <div class="signup-prompt">
                Vous n'avez pas de compte ? <a href="./../../../index.php?page=register">S'inscrire</a>
            </div>
        </form>
    </div>


    <!-- bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>