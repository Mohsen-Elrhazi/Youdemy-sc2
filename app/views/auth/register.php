<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="../../../public/assets/css/auth/register.css" />
    <title>Inscription</title>

</head>

<body>
    <div class="signup-container">
        <a class="back-home" href="./../../../index.php?page=platform"><i class="fa-solid fa-arrow-left-long"></i></a>

        <form class="signup-form">
            <div class="signup-header">
                <h1>S'inscrire et commencer à apprendre</h1>
            </div>

            <div class="form-group">
                <label for="fullname">Nom complet</label>
                <input type="text" id="fullname" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="role">Vous êtes</label>
                <select id="role" class="form-control" required>
                    <option value="">Sélectionnez votre rôle</option>
                    <option value="student">Étudiant</option>
                    <option value="teacher">Enseignant</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" placeholder="nom@exemple.com" required>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" class="form-control" placeholder="••••••••" required>
            </div>

            <button type="submit" class="signup-btn">S'inscrire</button>



            <div class="signin-prompt">
                Vous avez déjà un compte ? <a href="./../../../index.php?page=login">Se connecter</a>
            </div>
        </form>
    </div>


</body>

</html>