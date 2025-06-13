<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SCOREFLIX - Accueil</title>
    <style>
        /* Couleurs */
        :root {
            --rouge-s: #6B0000; /* Rouge très foncé pour le S */
            --rouge-bg: #990000; /* Rouge assombri pour le bandeau */
            --blanc-clair: #FFFFFF; /* Texte blanc */
            --fond-noir: #121212; /* Fond noir très foncé */
            --gris-deco: #330000; /* Couleur décorations sportives */
        }

        /* Reset simple */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--fond-noir);
            color: var(--blanc-clair);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 20px;
        }

        header {
            width: 100%;
            max-width: 900px;
            background-color: var(--rouge-bg);
            padding: 15px 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.7);
            display: flex;
            align-items: center;
            gap: 10px;
            border-radius: 12px 12px 0 0;
            position: relative;
            overflow: hidden;
        }

        /* Décorations sportives */
        header::before, header::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            opacity: 0.15;
            background: var(--gris-deco);
            z-index: 0;
        }
        header::before {
            width: 80px;
            height: 80px;
            top: -20px;
            left: -30px;
        }
        header::after {
            width: 100px;
            height: 100px;
            bottom: -40px;
            right: -50px;
        }

        /* Logo avec S rouge foncé */
        .logo {
            font-size: 2.8rem;
            font-weight: 900;
            color: var(--blanc-clair);
            letter-spacing: 3px;
            user-select: none;
            display: flex;
            align-items: center;
            gap: 6px;
            position: relative;
            z-index: 1;
        }

        .logo .red-s {
            color: var(--rouge-s);
            font-weight: 900;
        }

        .logo .ballon {
            font-size: 2.4rem;
            user-select: none;
        }

        main {
            flex: 1;
            width: 100%;
            max-width: 900px;
            margin: 30px auto 50px;
            background: #1e1e1e; /* gris très foncé */
            border-radius: 16px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.9);
            padding: 40px 50px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        /* Décorations sportives dans main */
        main::before, main::after {
            content: "";
            position: absolute;
            border-radius: 50%;
            opacity: 0.12;
            background: var(--gris-deco);
            z-index: 0;
        }
        main::before {
            width: 100px;
            height: 100px;
            top: -40px;
            left: -40px;
        }
        main::after {
            width: 140px;
            height: 140px;
            bottom: -60px;
            right: -70px;
        }

        main h1 {
            font-size: 2.6rem;
            margin-bottom: 20px;
            color: var(--rouge-s);
            position: relative;
            z-index: 1;
        }

        main p {
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 40px;
            color: #ddd;
            position: relative;
            z-index: 1;
        }

        .btn-login {
            background-color: var(--rouge-bg);
            border: none;
            padding: 14px 28px;
            color: var(--blanc-clair);
            font-size: 1.1rem;
            border-radius: 12px;
            cursor: pointer;
            font-weight: 700;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
            user-select: none;
            position: relative;
            z-index: 1;
        }

        .btn-login:hover {
            background-color: var(--rouge-s);
        }

        footer {
            margin: 40px 0 20px;
            font-size: 0.9rem;
            color: #666;
            user-select: none;
        }

    </style>
</head>
<body>

<header>
    <div class="logo">
        <span class="red-s">S</span>COREFLIX <span class="ballon">⚽</span>
    </div>
</header>

<main>
    <h1>Bienvenue sur SCOREFLIX</h1>
    <p>Votre plateforme complète pour gérer les résultats et statistiques de votre championnat de football.</p>
    <a href="login.php" class="btn-login" aria-label="Aller à la page de connexion">Se connecter</a><br>
    <p>Idéal aussi pour vous connectez en tant qu'utilisateur pour consulter les résulats de votre équipe favorite </p>
    <a href="register.php" class="btn-login" aria-label="Aller à la page d'inscription">S'inscrire</a>
</main>

<footer>
    &copy; 2025 SCOREFLIX. Tous droits réservés.
</footer>

</body>
</html>