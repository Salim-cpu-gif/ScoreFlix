<?php
// header.php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>SCOREFLIX - Gestion Championnat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #111;
            color: #eee;
            margin: 0; padding: 0;
        }
        header {
            background: #900; /* rouge foncé */
            color: white;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        header img {
            height: 35px;
        }
        header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
            letter-spacing: 2px;
        }
        nav {
            margin-left: auto;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #f33;
        }
        main {
            padding: 20px;
            min-height: 80vh;
        }
        footer {
            background: #222;
            color: #999;
            text-align: center;
            padding: 10px;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }
        th, td {
            padding: 8px 12px;
            border: 1px solid #333;
            text-align: left;
        }
        th {
            background: #900;
        }
        a.button {
            background: #900;
            color: white;
            padding: 8px 15px;
            text-decoration: none;
            border-radius: 4px;
            display: inline-block;
            margin-top: 10px;
        }
        a.button:hover {
            background: #f33;
        }
    </style>
</head>
<body>
<header>
    <img src="https://cdn-icons-png.flaticon.com/512/616/616408.png" alt="Ballon" />
    <h1>SCOREFLIX</h1>
    <nav>
        <a href="index.php">Accueil</a>
        <?php if(isset($_SESSION['user'])): ?>
            <a href="dashboard.php">Dashboard</a>
            <a href="logout.php">Déconnexion</a>
        <?php else: ?>
            <a href="login.php">Connexion</a>
            <a href="register.php">Inscription</a>
        <?php endif; ?>
    </nav>
</header>
<main></main>