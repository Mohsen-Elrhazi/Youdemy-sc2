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
                <input type="text" id="name" placeholder="Entrez votre nom" />
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" placeholder="Entrez votre email" />
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" placeholder="Créez un mot de passe" />
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role">
                    <option value="etudiant">Etudiant</option>
                    <option value="enseignant">Enseignant</option>
                </select>
            </div>
            <button type="submit" class="btn">S'inscrire</button>
            <div class="login-link">
                Déjà un compte ? <a href="./login.php">Se connecter</a>
            </div>
        </form>
    </div>
</body>

</html>