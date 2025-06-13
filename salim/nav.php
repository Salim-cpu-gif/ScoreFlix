<nav style="
    background-color: #990000;
    padding: 15px 25px;
    border-radius: 0 0 12px 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.6);
    position: relative;
    z-index: 10;
    overflow: hidden;
">
    <!-- Motifs en fond -->
    <div style="
        content: '';
        position: absolute;
        top: -30px;
        left: -40px;
        width: 100px;
        height: 100px;
        background-color: #330000;
        border-radius: 50%;
        opacity: 0.15;
        z-index: 1;
    "></div>
    <div style="
        content: '';
        position: absolute;
        bottom: -40px;
        right: -50px;
        width: 120px;
        height: 120px;
        background-color: #330000;
        border-radius: 50%;
        opacity: 0.15;
        z-index: 1;
    "></div>

    <!-- Menu principal -->
    <ul style="
        list-style: none;
        display: flex;
        gap: 25px;
        margin: 0;
        padding: 0;
        justify-content: center;
        z-index: 2;
        position: relative;
    ">
        <li><a href="index.php" style="
            color: #FFFFFF;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 8px;
            transition: background 0.3s;
        " onmouseover="this.style.backgroundColor='#6B0000'" onmouseout="this.style.backgroundColor='transparent'">Accueil</a></li>

        <li><a href="matchs.php" style="
            color: #FFFFFF;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 8px;
            transition: background 0.3s;
        " onmouseover="this.style.backgroundColor='#6B0000'" onmouseout="this.style.backgroundColor='transparent'">Matchs</a></li>

        <li><a href="equipes.php" style="
            color: #FFFFFF;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 8px;
            transition: background 0.3s;
        " onmouseover="this.style.backgroundColor='#6B0000'" onmouseout="this.style.backgroundColor='transparent'">Équipes</a></li>

        <li><a href="calendrier.php" style="
            color: #FFFFFF;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 8px;
            transition: background 0.3s;
        " onmouseover="this.style.backgroundColor='#6B0000'" onmouseout="this.style.backgroundColor='transparent'">Calendrier</a></li>

        <li><a href="statistiques.php" style="
            color: #FFFFFF;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 8px;
            transition: background 0.3s;
        " onmouseover="this.style.backgroundColor='#6B0000'" onmouseout="this.style.backgroundColor='transparent'">Statistiques</a></li>

        <li><a href="connexion.php" style="
            color: #FFFFFF;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 12px;
            border-radius: 8px;
            transition: background 0.3s;
        " onmouseover="this.style.backgroundColor='#6B0000'" onmouseout="this.style.backgroundColor='transparent'">Connexion</a></li>
    </ul>
</nav>
