<?php
session_start();
include 'db_connect.php';

function redirect_dashboard($role) {
    switch ($role) {
        case 'admin':
            header("Location: dashboard_admin.php");
            exit;
        case 'user':
        case 'spectateur':
            header("Location: public.php");
            exit;
        default:
            header("Location: login.php?error=role_invalide");
            exit;
    }
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $role = $_POST['role'] ?? '';
    $sexe = $_POST['sexe'] ?? '';

    // Conversion des valeurs de sexe pour correspondre à la base
    $sexe_db = match($sexe) {
        'Homme' => 'Homme',
        'Femme' => 'Femme',
        'Neutre' => 'Neutre',
        'M' => 'M',
        'F' => 'F',
        default => 'Neutre'
    };

    if (empty($email) || empty($password) || empty($role) || empty($sexe)) {
        $error = "Veuillez remplir tous les champs.";
    } else {
        try {
            // Requête préparée pour éviter les injections SQL
            $stmt = $conn->prepare("SELECT idusr, motdepasse, roleusr, sexeusr FROM utilisateur WHERE email = :email");
            $stmt->execute([':email' => $email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                // Vérification du mot de passe avec password_verify()
                if (password_verify($password, $user['motdepasse'])) {
                    // Vérification du rôle et du sexe
                    if ($user['roleusr'] === $role && $user['sexeusr'] === $sexe_db) {
                        $_SESSION['user'] = [
                            'id' => $user['idusr'],
                            'email' => $email,
                            'role' => $user['roleusr'],
                            'sexe' => $user['sexeusr']
                        ];
                        
                        redirect_dashboard($user['roleusr']);
                    } else {
                        $error = "Le rôle ou le sexe ne correspondent pas à ce compte.";
                    }
                } else {
                    $error = "Mot de passe incorrect.";
                }
            } else {
                $error = "Aucun utilisateur trouvé avec cet email.";
            }
            
        } catch (PDOException $e) {
            error_log("Erreur de base de données: " . $e->getMessage());
            $error = "Une erreur technique est survenue. Veuillez réessayer plus tard.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>SCOREFLIX - Connexion</title>
<style>
  body {
    background: #111 url('data:image/svg+xml;utf8,<svg width="40" height="40" xmlns="http://www.w3.org/2000/svg"><circle cx="10" cy="10" r="2" fill="%236B0000" fill-opacity="0.1"/><circle cx="30" cy="30" r="2" fill="%236B0000" fill-opacity="0.1"/></svg>') repeat;
    color: #eee;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    margin: 0;
    padding: 20px;
  }

  header {
    margin-bottom: 40px;
    text-align: center;
    background: #6B0000;
    padding: 20px 40px;
    border-radius: 16px;
    box-shadow: 0 0 15px #6B0000aa;
    user-select: none;
  }

  header h1 {
    font-size: 4rem;
    font-weight: 900;
    color: #eee;
    margin: 0;
  }
  header h1 .letter-s {
    color: #440000;
  }
  header .ballon {
    font-size: 3rem;
    margin-left: 10px;
    vertical-align: middle;
  }

  form {
    background: #222;
    padding: 30px 40px;
    border-radius: 20px;
    box-shadow: 0 0 25px #6B0000cc;
    width: 320px;
    position: relative;
    background-image: radial-gradient(circle at 20px 20px, #6B000012 2px, transparent 3px),
                      radial-gradient(circle at 50px 50px, #6B000012 2px, transparent 3px);
    background-repeat: repeat;
    background-size: 40px 40px;
  }

  label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #6B0000;
  }
  
  input[type="email"],
  input[type="password"],
  select {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 2px solid #6B0000;
    border-radius: 10px;
    background: #111;
    color: #eee;
    font-size: 1rem;
    transition: border-color 0.3s ease;
  }
  
  input[type="email"]:focus,
  input[type="password"]:focus,
  select:focus {
    outline: none;
    border-color: #ff4444;
  }
  
  button {
    width: 100%;
    background: #6B0000;
    border: none;
    padding: 12px;
    color: #eee;
    font-weight: bold;
    font-size: 1.2rem;
    cursor: pointer;
    border-radius: 14px;
    transition: background 0.3s ease;
  }
  
  button:hover {
    background: #ff4444;
  }
  
  .footer {
    margin-top: 30px;
    color: #666;
    font-size: 0.9rem;
  }
  
  .error-message {
    color: #ff5555;
    margin-bottom: 20px;
    text-align: center;
    font-weight: 700;
    padding: 10px;
    background: #330000;
    border-radius: 8px;
  }
</style>
</head>
<body>
<header>
  <h1><span class="letter-s">S</span>COREFLIX <span class="ballon">⚽</span></h1>
</header>

<form method="POST" action="login.php" novalidate>
  <?php if ($error): ?>
    <div class="error-message"><?= htmlspecialchars($error) ?></div>
  <?php endif; ?>
  
  <label for="email">Email :</label>
  <input type="email" id="email" name="email" required autocomplete="username" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" />
  
  <label for="password">Mot de passe :</label>
  <input type="password" id="password" name="password" required autocomplete="current-password" />
  
  <label for="role">Rôle :</label>
  <select id="role" name="role" required>
    <option value="">-- Sélectionnez un rôle --</option>
    <option value="admin" <?= ($_POST['role'] ?? '') === 'admin' ? 'selected' : '' ?>>Administrateur</option>
    <option value="user" <?= ($_POST['role'] ?? '') === 'user' ? 'selected' : '' ?>>Utilisateur</option>
    <option value="spectateur" <?= ($_POST['role'] ?? '') === 'spectateur' ? 'selected' : '' ?>>Spectateur</option>
  </select>
  
  <label for="sexe">Sexe :</label>
  <select id="sexe" name="sexe" required>
    <option value="">-- Sélectionnez un sexe --</option>
    <option value="Homme" <?= ($_POST['sexe'] ?? '') === 'Homme' ? 'selected' : '' ?>>Homme</option>
    <option value="Femme" <?= ($_POST['sexe'] ?? '') === 'Femme' ? 'selected' : '' ?>>Femme</option>
    <option value="M" <?= ($_POST['sexe'] ?? '') === 'M' ? 'selected' : '' ?>>Masculin (M)</option>
    <option value="F" <?= ($_POST['sexe'] ?? '') === 'F' ? 'selected' : '' ?>>Féminin (F)</option>
    <option value="Neutre" <?= ($_POST['sexe'] ?? '') === 'Neutre' ? 'selected' : '' ?>>Neutre</option>
  </select>
  
  <button type="submit">Se connecter</button>
</form>

<div class="footer">Merci d'avoir choisi notre plateforme !</div>

</body>
</html>