<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="stylesheet" href="../../../public/assets/css/auth/login.css" />
    <title>Connexion</title>

</head>

<body>
    <div class="signin-container">
        <a class="back-home" href="./../../../index.php?page=platform"><i class="fa-solid fa-arrow-left-long"></i></a>
        <form class="signin-form">
            <div class="signin-header">
                <h1>Se connecter</h1>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="nom@exemple.com" required />
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" class="form-control" placeholder="••••••••" required />
            </div>

            <div class="forgot-password">
                <a href="#">Mot de passe oublié ?</a>
            </div>

            <button type="submit" class="signin-btn">Se connecter</button>

            <div class="signup-prompt">
                Vous n'avez pas de compte ? <a href="./../../../index.php?page=register">S'inscrire</a>
            </div>
        </form>
    </div>


</body>

</html>