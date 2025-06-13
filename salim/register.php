<?php
include 'db_connect.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des données du formulaire
    $nom = trim($_POST['nom'] ?? '');
    $prenom = trim($_POST['prenom'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $role = $_POST['role'] ?? 'spectateur';
    $sexe = $_POST['sexe'] ?? 'Neutre';

    // Validation des données
    if (empty($nom) || empty($prenom) || empty($email) || empty($password) || empty($confirm_password)) {
        $error = "Tous les champs obligatoires doivent être remplis.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "L'adresse email n'est pas valide.";
    } elseif ($password !== $confirm_password) {
        $error = "Les mots de passe ne correspondent pas.";
    } elseif (strlen($password) < 8) {
        $error = "Le mot de passe doit contenir au moins 8 caractères.";
    } else {
        try {
            // Vérification si l'email existe déjà
            $stmt = $conn->prepare("SELECT idusr FROM utilisateur WHERE email = :email");
            $stmt->execute([':email' => $email]);
            
            if ($stmt->fetch()) {
                $error = "Cette adresse email est déjà utilisée.";
            } else {
                // Hashage du mot de passe
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                
                // Insertion dans la base de données
                $stmt = $conn->prepare("INSERT INTO utilisateur (nomusr, prenomusr, email, motdepasse, roleusr, sexeusr) 
                                      VALUES (:nom, :prenom, :email, :password, :role, :sexe)");
                $stmt->execute([
                    ':nom' => $nom,
                    ':prenom' => $prenom,
                    ':email' => $email,
                    ':password' => $hashed_password,
                    ':role' => $role,
                    ':sexe' => $sexe
                ]);
                
                // Si l'utilisateur est un admin, on l'ajoute aussi dans la table admin
                if ($role === 'admin') {
                    $last_id = $conn->lastInsertId();
                    $stmt = $conn->prepare("INSERT INTO admin (idadmin) VALUES (:id)");
                    $stmt->execute([':id' => $last_id]);
                }
                
                $success = "Inscription réussie ! Vous pouvez maintenant vous connecter.";
            }
        } catch (PDOException $e) {
            error_log("Erreur d'inscription: " . $e->getMessage());
            $error = "Une erreur est survenue lors de l'inscription. Veuillez réessayer.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>Inscription - Championnat Foot</title>
<style>
    body {
        margin: 0; 
        font-family: Arial, sans-serif; 
        background: #121212; 
        color: #fff;
    }
    nav {
        background-color: #1c1c1c;
        border-bottom: 3px solid #f44336;
        padding: 15px 30px;
        display: flex;
        gap: 30px;
    }
    nav a {
        color: #f44336;
        text-decoration: none;
        font-weight: bold;
        position: relative;
    }
    nav a:hover::after {
        width: 100%;
    }
    main {
        padding: 30px;
        max-width: 600px;
        margin: 0 auto;
    }
    form {
        background: #222;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(244, 67, 54, 0.3);
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        display: block;
        margin-bottom: 8px;
        color: #f44336;
        font-weight: bold;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"],
    select {
        width: 100%;
        padding: 10px;
        background: #333;
        border: 1px solid #444;
        color: #fff;
        border-radius: 4px;
    }
    input:focus, select:focus {
        outline: none;
        border-color: #f44336;
    }
    button {
        background: #f44336;
        color: white;
        border: none;
        padding: 12px 20px;
        cursor: pointer;
        border-radius: 4px;
        font-weight: bold;
        width: 100%;
        margin-top: 10px;
    }
    button:hover {
        background: #d32f2f;
    }
    .error {
        color: #ff5252;
        margin-bottom: 20px;
        padding: 10px;
        background: #330000;
        border-radius: 4px;
    }
    .success {
        color: #4caf50;
        margin-bottom: 20px;
        padding: 10px;
        background: #003300;
        border-radius: 4px;
    }
    .login-link {
        text-align: center;
        margin-top: 20px;
    }
    .login-link a {
        color: #f44336;
    }
</style>
</head>
<body>
<nav>
    <a href="index.php">Accueil</a>
    <a href="public.php">Stade</a>
    <a href="equipes.php">Joueur</a>
    <a href="equipes.php">Équipe</a>
    <a href="arbitres.php">Arbitre</a>
</nav>

<main>
    <h1>Inscription</h1>
    
    <?php if ($error): ?>
        <div class="error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    
    <?php if ($success): ?>
        <div class="success"><?= htmlspecialchars($success) ?></div>
    <?php endif; ?>
    
    <form method="POST" action="register.php">
        <div class="form-group">
            <label for="nom">Nom *</label>
            <input type="text" id="nom" name="nom" required value="<?= htmlspecialchars($_POST['nom'] ?? '') ?>">
        </div>
        
        <div class="form-group">
            <label for="prenom">Prénom *</label>
            <input type="text" id="prenom" name="prenom" required value="<?= htmlspecialchars($_POST['prenom'] ?? '') ?>">
        </div>
        
        <div class="form-group">
            <label for="email">Email *</label>
            <input type="email" id="email" name="email" required value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
        </div>
        
        <div class="form-group">
            <label for="password">Mot de passe (8 caractères minimum) *</label>
            <input type="password" id="password" name="password" required minlength="8">
        </div>
        
        <div class="form-group">
            <label for="confirm_password">Confirmer le mot de passe *</label>
            <input type="password" id="confirm_password" name="confirm_password" required minlength="8">
        </div>
        
        <div class="form-group">
            <label for="role">Rôle</label>
            <select id="role" name="role">
                <option value="spectateur" <?= ($_POST['role'] ?? '') === 'spectateur' ? 'selected' : '' ?>>Spectateur</option>
                <option value="user" <?= ($_POST['role'] ?? '') === 'user' ? 'selected' : '' ?>>Utilisateur</option>
                <option value="admin" <?= ($_POST['role'] ?? '') === 'admin' ? 'selected' : '' ?>>Administrateur</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="sexe">Sexe</label>
            <select id="sexe" name="sexe">
                <option value="Neutre" <?= ($_POST['sexe'] ?? '') === 'Neutre' ? 'selected' : '' ?>>Neutre</option>
                <option value="Homme" <?= ($_POST['sexe'] ?? '') === 'Homme' ? 'selected' : '' ?>>Homme</option>
                <option value="Femme" <?= ($_POST['sexe'] ?? '') === 'Femme' ? 'selected' : '' ?>>Femme</option>
                <option value="M" <?= ($_POST['sexe'] ?? '') === 'M' ? 'selected' : '' ?>>Masculin (M)</option>
                <option value="F" <?= ($_POST['sexe'] ?? '') === 'F' ? 'selected' : '' ?>>Féminin (F)</option>
            </select>
        </div>
        
        <button type="submit">S'inscrire</button>
    </form>
    
    <div class="login-link">
        Déjà inscrit ? <a href="login.php">Connectez-vous ici</a>
    </div>
</main>
</body>
</html>