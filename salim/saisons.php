<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<title>Accueil - Championnat Foot</title>
<style>
    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #121212;
        color: #f44336;
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
    nav a::after {
        content: "";
        display: block;
        height: 3px;
        background: #f44336;
        width: 0;
        transition: width 0.3s;
        position: absolute;
        bottom: -8px;
        left: 0;
    }
    nav a:hover::after {
        width: 100%;
    }
    main {
        padding: 30px;
    }
    h1 {
        margin-bottom: 20px;
    }
</style>
</head>
<body>
<nav>
    <a href="public.php">Stade</a>
    <a href="equipes.php">Joueur</a>
    <a href="equipes.php">Équipe</a>
    <a href="arbitres.php">Arbitre</a>
    <a href="saisons.php">Saisons</a>
</nav>
<main>
    <h1>Bienvenue sur le Championnat de Football</h1>
    <p>Sélectionnez une section dans le menu pour consulter les informations.</p>
</main>
</body>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SCOREFLIX - Historique des Saisons</title>
  <style>
    body {
      background: #111 url('data:image/svg+xml;utf8,<svg width="40" height="40" xmlns="http://www.w3.org/2000/svg"><circle cx="10" cy="10" r="2" fill="%236B0000" fill-opacity="0.1"/><circle cx="30" cy="30" r="2" fill="%236B0000" fill-opacity="0.1"/></svg>') repeat;
      color: #eee;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background: #6B0000;
      padding: 20px 60px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 0 15px #6B0000aa;
    }

    .logo {
      font-size: 2.5rem;
      font-weight: bold;
    }

    .letter-s {
      color: #440000;
    }

    .ballon {
      margin-left: 10px;
      font-size: 2rem;
    }

    .menu-toggle {
      font-size: 2rem;
      cursor: pointer;
    }

    .sidebar {
      position: fixed;
      top: 0;
      left: -250px;
      width: 220px;
      height: 100%;
      background: #1a1a1a;
      box-shadow: 2px 0 5px rgba(0,0,0,0.5);
      padding: 60px 20px;
      transition: left 0.3s ease;
      z-index: 1000;
    }

    .sidebar.open {
      left: 0;
    }

    .sidebar a {
      display: block;
      color: #eee;
      text-decoration: none;
      margin: 15px 0;
      font-size: 1.1rem;
      padding: 10px;
      border-left: 4px solid transparent;
    }

    .sidebar a:hover {
      background: #6B0000;
      border-left: 4px solid #ff4444;
    }

    .close-btn {
      position: absolute;
      top: 15px;
      right: 15px;
      color: #eee;
      font-size: 1.5rem;
      cursor: pointer;
    }

    .container {
      padding: 30px;
      max-width: 1200px;
      margin: 0 auto;
    }

    h2 {
      color: #ff4444;
      border-bottom: 2px solid #6B0000;
      padding-bottom: 5px;
      margin-top: 40px;
    }

    .season-selector {
      display: flex;
      overflow-x: auto;
      gap: 10px;
      padding: 10px 0;
      margin-bottom: 20px;
    }

    .season-tab {
      padding: 8px 15px;
      background: #333;
      border-radius: 20px;
      cursor: pointer;
      white-space: nowrap;
    }

    .season-tab.active {
      background: #6B0000;
      font-weight: bold;
    }

    .season-content {
      display: none;
    }

    .season-content.active {
      display: block;
    }

    .season-card {
      background: #222;
      border-left: 4px solid #6B0000;
      margin: 20px 0;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 0 15px #6B000066;
    }

    .season-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .season-title {
      font-size: 1.5rem;
      margin: 0;
      color: #ffcc00;
    }

    .season-champion {
      display: flex;
      align-items: center;
    }

    .team-logo {
      width: 40px;
      height: 40px;
      margin-right: 10px;
      background: #333;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
    }

    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 20px;
      margin-top: 20px;
    }

    .stats-card {
      background: #333;
      padding: 15px;
      border-radius: 8px;
    }

    .stats-title {
      color: #ff4444;
      margin-top: 0;
      border-bottom: 1px solid #444;
      padding-bottom: 10px;
    }

    .stats-item {
      margin: 10px 0;
      display: flex;
      justify-content: space-between;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
      background: #222;
      box-shadow: 0 0 15px #6B000066;
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #444;
    }

    th {
      background-color: #6B0000;
      color: white;
    }

    tr:hover {
      background-color: #333;
    }

    .pos {
      width: 30px;
      text-align: center;
      font-weight: bold;
    }

    .footer {
      text-align: center;
      color: #666;
      font-size: 0.9rem;
      padding: 20px;
      margin-top: 60px;
    }

    @media (max-width: 768px) {
      .stats-grid {
        grid-template-columns: 1fr;
      }
      
      .season-header {
        flex-direction: column;
        align-items: flex-start;
      }
      
      .season-champion {
        margin-top: 10px;
      }
    }
  </style>
</head>
<body>

<header>
  <div class="menu-toggle" onclick="toggleMenu()">☰</div>
  <div class="logo"><span class="letter-s">S</span>COREFLIX <span class="ballon">⚽</span></div>
</header>

<div id="sidebar" class="sidebar">
  <div class="close-btn" onclick="toggleMenu()">×</div>
  <a href="public.php">🏟️ Stades</a>
  <a href="arbitres.php">🧑‍⚖️ Arbitres</a>
  <a href="saisons.php">📅 Saisons</a>
  <a href="equipes.php">🥇Équipes</a>
  <a href="statistiques.php">📊 Statistiques</a>
  <a href="classement.php">🎯 Classements</a>
  <a href="archives.php">📁 Archives</a>
  <a href="logout.php">🚪 Déconnexion</a>
</div>

<div class="container">
  <h2>Historique des Saisons de Ligue 1</h2>
  
  <div class="season-selector">
    <div class="season-tab active" onclick="showSeason('s2023')">2023-2024</div>
    <div class="season-tab" onclick="showSeason('s2022')">2022-2023</div>
    <div class="season-tab" onclick="showSeason('s2021')">2021-2022</div>
    <div class="season-tab" onclick="showSeason('s2020')">2020-2021</div>
    <div class="season-tab" onclick="showSeason('s2019')">2019-2020</div>
    <div class="season-tab" onclick="showSeason('s2018')">2018-2019</div>
    <div class="season-tab" onclick="showSeason('s2017')">2017-2018</div>
    <div class="season-tab" onclick="showSeason('s2016')">2016-2017</div>
    <div class="season-tab" onclick="showSeason('s2015')">2015-2016</div>
    <div class="season-tab" onclick="showSeason('s2014')">2014-2015</div>
  </div>
  
  <!-- Saison 2023-2024 -->
  <div id="s2023" class="season-content active">
    <div class="season-card">
      <div class="season-header">
        <h3 class="season-title">Saison 2023-2024</h3>
        <div class="season-champion">
          <div class="team-logo">PSG</div>
          <div>Champion: Paris Saint-Germain</div>
        </div>
      </div>
      
      <div class="stats-grid">
        <div class="stats-card">
          <h4 class="stats-title">Top 5 Buteurs</h4>
          <div class="stats-item">
            <span>Kylian Mbappé (PSG)</span>
            <span>24 buts</span>
          </div>
          <div class="stats-item">
            <span>Jonathan David (Lille)</span>
            <span>18 buts</span>
          </div>
          <div class="stats-item">
            <span>Alexandre Lacazette (Lyon)</span>
            <span>15 buts</span>
          </div>
          <div class="stats-item">
            <span>Pierre-Emerick Aubameyang (Marseille)</span>
            <span>14 buts</span>
          </div>
          <div class="stats-item">
            <span>Wissam Ben Yedder (Monaco)</span>
            <span>13 buts</span>
          </div>
        </div>
        
        <div class="stats-card">
          <h4 class="stats-title">Top 5 Passeurs</h4>
          <div class="stats-item">
            <span>Ousmane Dembélé (PSG)</span>
            <span>11 passes</span>
          </div>
          <div class="stats-item">
            <span>Teji Savanier (Montpellier)</span>
            <span>9 passes</span>
          </div>
          <div class="stats-item">
            <span>Lionel Messi (PSG)</span>
            <span>8 passes</span>
          </div>
          <div class="stats-item">
            <span>Caio Henrique (Monaco)</span>
            <span>7 passes</span>
          </div>
          <div class="stats-item">
            <span>Benjamin Bourigeaud (Rennes)</span>
            <span>7 passes</span>
          </div>
        </div>
        
        <div class="stats-card">
          <h4 class="stats-title">Cartons & Blessures</h4>
          <div class="stats-item">
            <span>Total cartons jaunes:</span>
            <span>842</span>
          </div>
          <div class="stats-item">
            <span>Total cartons rouges:</span>
            <span>56</span>
          </div>
          <div class="stats-item">
            <span>Blessures majeures:</span>
            <span>23</span>
          </div>
          <div class="stats-item">
            <span>Équipe la plus sanctionnée:</span>
            <span>Nantes (78 cartons)</span>
          </div>
        </div>
      </div>
      
      <h4>Classement Final</h4>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Équipe</th>
            <th>Pts</th>
            <th>J</th>
            <th>G</th>
            <th>N</th>
            <th>P</th>
            <th>BP</th>
            <th>BC</th>
            <th>Diff</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Paris SG</td>
            <td>68</td>
            <td>28</td>
            <td>20</td>
            <td>8</td>
            <td>0</td>
            <td>65</td>
            <td>20</td>
            <td>+45</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Brest</td>
            <td>53</td>
            <td>28</td>
            <td>15</td>
            <td>8</td>
            <td>5</td>
            <td>41</td>
            <td>23</td>
            <td>+18</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Monaco</td>
            <td>52</td>
            <td>28</td>
            <td>15</td>
            <td>7</td>
            <td>6</td>
            <td>53</td>
            <td>38</td>
            <td>+15</td>
          </tr>
          <!-- Ajouter les autres équipes -->
        </tbody>
      </table>
    </div>
  </div>
  
  <!-- Saison 2022-2023 -->
  <div id="s2022" class="season-content">
    <div class="season-card">
      <div class="season-header">
        <h3 class="season-title">Saison 2022-2023</h3>
        <div class="season-champion">
          <div class="team-logo">RCL</div>
          <div>Champion: RC Lens</div>
        </div>
      </div>
      
      <div class="stats-grid">
        <div class="stats-card">
          <h4 class="stats-title">Top 5 Buteurs</h4>
          <div class="stats-item">
            <span>Kylian Mbappé (PSG)</span>
            <span>29 buts</span>
          </div>
          <div class="stats-item">
            <span>Alexandre Lacazette (Lyon)</span>
            <span>27 buts</span>
          </div>
          <div class="stats-item">
            <span>Jonathan David (Lille)</span>
            <span>24 buts</span>
          </div>
          <div class="stats-item">
            <span>Loïs Openda (Lens)</span>
            <span>21 buts</span>
          </div>
          <div class="stats-item">
            <span>Wissam Ben Yedder (Monaco)</span>
            <span>19 buts</span>
          </div>
        </div>
        
        <div class="stats-card">
          <h4 class="stats-title">Top 5 Passeurs</h4>
          <div class="stats-item">
            <span>Lionel Messi (PSG)</span>
            <span>16 passes</span>
          </div>
          <div class="stats-item">
            <span>Neymar (PSG)</span>
            <span>11 passes</span>
          </div>
          <div class="stats-item">
            <span>Teji Savanier (Montpellier)</span>
            <span>10 passes</span>
          </div>
          <div class="stats-item">
            <span>Benjamin Bourigeaud (Rennes)</span>
            <span>9 passes</span>
          </div>
          <div class="stats-item">
            <span>Caio Henrique (Monaco)</span>
            <span>8 passes</span>
          </div>
        </div>
        
        <div class="stats-card">
          <h4 class="stats-title">Cartons & Blessures</h4>
          <div class="stats-item">
            <span>Total cartons jaunes:</span>
            <span>876</span>
          </div>
          <div class="stats-item">
            <span>Total cartons rouges:</span>
            <span>62</span>
          </div>
          <div class="stats-item">
            <span>Blessures majeures:</span>
            <span>28</span>
          </div>
          <div class="stats-item">
            <span>Équipe la plus sanctionnée:</span>
            <span>Marseille (85 cartons)</span>
          </div>
        </div>
      </div>
      
      <h4>Classement Final</h4>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Équipe</th>
            <th>Pts</th>
            <th>J</th>
            <th>G</th>
            <th>N</th>
            <th>P</th>
            <th>BP</th>
            <th>BC</th>
            <th>Diff</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>RC Lens</td>
            <td>84</td>
            <td>38</td>
            <td>25</td>
            <td>9</td>
            <td>4</td>
            <td>68</td>
            <td>29</td>
            <td>+39</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Paris SG</td>
            <td>82</td>
            <td>38</td>
            <td>26</td>
            <td>4</td>
            <td>8</td>
            <td>89</td>
            <td>40</td>
            <td>+49</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Marseille</td>
            <td>73</td>
            <td>38</td>
            <td>22</td>
            <td>7</td>
            <td>9</td>
            <td>67</td>
            <td>40</td>
            <td>+27</td>
          </tr>
          <!-- Ajouter les autres équipes -->
        </tbody>
      </table>
    </div>
  </div>
  
  <!-- Ajouter les autres saisons (2021-2022 à 2014-2015) avec la même structure -->
  
</div>

<div class="footer">Merci d'utiliser Scoreflix ⚽</div>

<script>
  function toggleMenu() {
    document.getElementById("sidebar").classList.toggle("open");
  }
  
  function showSeason(seasonId) {
    // Désactiver tous les onglets et contenus
    document.querySelectorAll('.season-tab').forEach(tab => {
      tab.classList.remove('active');
    });
    document.querySelectorAll('.season-content').forEach(content => {
      content.classList.remove('active');
    });
    
    // Activer l'onglet et le contenu sélectionnés
    document.querySelector(`.season-tab[onclick="showSeason('${seasonId}')"]`).classList.add('active');
    document.getElementById(seasonId).classList.add('active');
  }
</script>
</body>
</html>