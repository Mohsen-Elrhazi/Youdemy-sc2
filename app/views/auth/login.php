<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/assets/css/auth/login.css" />

    <title>Login</title>

</head>

<body>
    <div class="container">
        <h1 class="title">Connexion</h1>
        <form>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" required placeholder="Entrez votre email" />
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" required placeholder="Entrez votre mot de passe" />
            </div>
            <div class="forgot-password">
                <a href="#">Mot de passe oublié ?</a>
            </div>
            <button type="submit" class="btn">Se connecter</button>
            <div class="register-link">
                Pas encore de compte ? <a href="./register.php">S'inscrire</a>
            </div>
        </form>
    </div>
</body>

</html>