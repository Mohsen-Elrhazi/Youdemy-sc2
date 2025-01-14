<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/assets/css/auth/register.css" />

    <title>Register</title>

</head>

<body>
    <div class="container">
        <h1 class="title">Créer un compte</h1>
        <form>
            <div class="form-group">
                <label for="name">Nom complet</label>
                <input type="text" id="name" required placeholder="Entrez votre nom" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" required placeholder="Entrez votre email" />
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" required placeholder="Créez un mot de passe" />
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirmer le mot de passe</label>
                <input type="password" id="confirm-password" required placeholder="Confirmez votre mot de passe" />
            </div>
            <button type="submit" class="btn">S'inscrire</button>
            <div class="login-link">
                Déjà un compte ? <a href="#">Se connecter</a>
            </div>
        </form>
    </div>
</body>

</html>