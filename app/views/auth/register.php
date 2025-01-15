<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/assets/css/auth/register.css" />

    <!-- link cdn bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

    <title>Register</title>

</head>

<body>
    <div class="container">
        <h1 class="title">Créer un compte</h1>
        <form method="POST">
            <div class="form-group">
                <label for="name">Nom complet</label>
                <input type="text" id="name" placeholder="Entrez votre nom" name="username" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Entrez votre email" name="email" />
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" placeholder="Créez un mot de passe" name="password" />
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role" name="role">
                    <option value="etudiant">Etudiant</option>
                    <option value="enseignant">Enseignant</option>
                </select>
            </div>
            <button type="submit" class="btn" name="register">S'inscrire</button>
            <div class="login-link">
                Déjà un compte ? <a href="./login.php">Se connecter</a>
            </div>
        </form>
    </div>
</body>

</html>