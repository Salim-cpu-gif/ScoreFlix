<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SCOREFLIX - Composition d'Équipe</title>
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

    .match-info {
      background: #222;
      border-left: 4px solid #6B0000;
      margin: 15px 0;
      padding: 15px 20px;
      border-radius: 12px;
      box-shadow: 0 0 15px #6B000066;
      text-align: center;
    }

    .teams-container {
      display: flex;
      justify-content: space-between;
      margin: 30px 0;
    }

    .team {
      width: 48%;
      background: #222;
      border-radius: 12px;
      padding: 15px;
      box-shadow: 0 0 15px #6B000066;
    }

    .team-header {
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 1px solid #6B0000;
    }

    .team-logo {
      width: 60px;
      height: 60px;
      margin-right: 15px;
    }

    .team-name {
      font-size: 1.5rem;
      font-weight: bold;
    }

    .formation {
      font-style: italic;
      color: #aaa;
      margin-top: 5px;
    }

    .field {
      position: relative;
      width: 100%;
      height: 500px;
      background: #0a3d0a;
      border: 3px solid #fff;
      border-radius: 5px;
      margin: 20px 0;
      overflow: hidden;
    }

    .field-lines {
      position: absolute;
      width: 100%;
      height: 100%;
      background: transparent;
      border: 2px solid #fff;
      border-radius: 5px;
    }

    .half-line {
      position: absolute;
      width: 100%;
      height: 0;
      border-top: 2px dashed #fff;
      top: 50%;
    }

    .center-circle {
      position: absolute;
      width: 100px;
      height: 100px;
      border: 2px solid #fff;
      border-radius: 50%;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .player {
      position: absolute;
      width: 50px;
      height: 50px;
      background: rgba(107, 0, 0, 0.8);
      border-radius: 50%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 0.8rem;
      cursor: pointer;
      transition: all 0.3s;
      z-index: 10;
    }

    .player:hover {
      transform: scale(1.1);
      box-shadow: 0 0 10px #ff4444;
    }

    .player-number {
      font-weight: bold;
      font-size: 1rem;
    }

    .player-name {
      margin-top: 2px;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
      max-width: 60px;
    }

    .substitutes {
      margin-top: 30px;
    }

    .substitutes-title {
      font-weight: bold;
      color: #ff4444;
      margin-bottom: 10px;
    }

    .substitute {
      display: flex;
      align-items: center;
      padding: 8px;
      margin: 5px 0;
      background: #333;
      border-radius: 5px;
    }

    .substitute-number {
      background: #6B0000;
      width: 25px;
      height: 25px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-right: 10px;
      font-size: 0.8rem;
    }

    .match-stats {
      display: flex;
      justify-content: space-between;
      margin-top: 30px;
    }

    .stats-box {
      background: #222;
      border-left: 4px solid #6B0000;
      padding: 15px;
      border-radius: 8px;
      width: 32%;
      box-shadow: 0 0 10px #6B000066;
    }

    .stats-title {
      color: #ff4444;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .stat-item {
      display: flex;
      justify-content: space-between;
      margin: 8px 0;
    }

    .stat-value {
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
      .teams-container {
        flex-direction: column;
      }
      
      .team {
        width: 100%;
        margin-bottom: 20px;
      }
      
      .field {
        height: 400px;
      }
      
      .match-stats {
        flex-direction: column;
      }
      
      .stats-box {
        width: 100%;
        margin-bottom: 15px;
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
  <a href="equipes.php">⚽️ Équipes</a>
  <a href="compositions.php">📋 Compositions</a>
  <a href="statistiques.php">📊 Statistiques</a>
  <a href="classement.php">🎯 Classements</a>
  <a href="archives.php">📁 Archives</a>
  <a href="logout.php">🚪 Déconnexion</a>
</div>

<div class="container">
  <div class="match-info">
    <h1>Ligue 1 - Journée 24</h1>
    <div style="display: flex; justify-content: center; align-items: center; margin: 20px 0;">
      <div style="flex: 1; text-align: right;">
        <div style="font-size: 1.5rem; font-weight: bold;">Paris SG</div>
        <div style="font-size: 0.9rem; color: #aaa;">1ère place</div>
      </div>
      <div style="margin: 0 30px; font-size: 2rem; font-weight: bold;">3 - 1</div>
      <div style="flex: 1; text-align: left;">
        <div style="font-size: 1.5rem; font-weight: bold;">Olympique Lyonnais</div>
        <div style="font-size: 0.9rem; color: #aaa;">8ème place</div>
      </div>
    </div>
    <div style="color: #aaa;">Stade des Lumières • 10/02/2024 • 21:00</div>
  </div>

  <div class="teams-container">
    <!-- Équipe domicile -->
    <div class="team">
      <div class="team-header">
        <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/8/86/Paris_Saint-Germain_Logo.svg/1200px-Paris_Saint-Germain_Logo.svg.png" alt="PSG" class="team-logo">
        <div>
          <div class="team-name">Paris SG</div>
          <div class="formation">Formation : 4-3-3</div>
        </div>
      </div>

      <div class="field">
        <div class="field-lines"></div>
        <div class="half-line"></div>
        <div class="center-circle"></div>
        
        <!-- Gardien -->
        <div class="player" style="left: 10%; top: 50%; transform: translateY(-50%);">
          <div class="player-number">1</div>
          <div class="player-name">Donnarumma</div>
        </div>
        
        <!-- Défenseurs -->
        <div class="player" style="left: 25%; top: 20%;">
          <div class="player-number">2</div>
          <div class="player-name">Hakimi</div>
        </div>
        <div class="player" style="left: 25%; top: 35%;">
          <div class="player-number">5</div>
          <div class="player-name">Marquinhos</div>
        </div>
        <div class="player" style="left: 25%; top: 65%;">
          <div class="player-number">3</div>
          <div class="player-name">Kimpembe</div>
        </div>
        <div class="player" style="left: 25%; top: 80%;">
          <div class="player-number">25</div>
          <div class="player-name">Nuno Mendes</div>
        </div>
        
        <!-- Milieux -->
        <div class="player" style="left: 45%; top: 30%;">
          <div class="player-number">6</div>
          <div class="player-name">Verratti</div>
        </div>
        <div class="player" style="left: 45%; top: 50%;">
          <div class="player-number">8</div>
          <div class="player-name">Ruiz</div>
        </div>
        <div class="player" style="left: 45%; top: 70%;">
          <div class="player-number">17</div>
          <div class="player-name">Vitinha</div>
        </div>
        
        <!-- Attaquants -->
        <div class="player" style="left: 65%; top: 20%;">
          <div class="player-number">10</div>
          <div class="player-name">Neymar</div>
        </div>
        <div class="player" style="left: 65%; top: 50%;">
          <div class="player-number">7</div>
          <div class="player-name">Mbappé</div>
        </div>
        <div class="player" style="left: 65%; top: 80%;">
          <div class="player-number">30</div>
          <div class="player-name">Messi</div>
        </div>
      </div>

      <div class="substitutes">
        <div class="substitutes-title">Remplaçants :</div>
        <div class="substitute">
          <div class="substitute-number">16</div>
          <div>Rico</div>
        </div>
        <div class="substitute">
          <div class="substitute-number">4</div>
          <div>Ramos</div>
        </div>
        <div class="substitute">
          <div class="substitute-number">15</div>
          <div>Danilo</div>
        </div>
        <div class="substitute">
          <div class="substitute-number">28</div>
          <div>Soler</div>
        </div>
        <div class="substitute">
          <div class="substitute-number">33</div>
          <div>Ekitike</div>
        </div>
      </div>
    </div>

    <!-- Équipe extérieure -->
    <div class="team">
      <div class="team-header">
        <img src="https://upload.wikimedia.org/wikipedia/fr/thumb/0/0a/Olympique_lyonnais_%28logo%29.svg/1200px-Olympique_lyonnais_%28logo%29.svg.png" alt="OL" class="team-logo">
        <div>
          <div class="team-name">Olympique Lyonnais</div>
          <div class="formation">Formation : 4-2-3-1</div>
        </div>
      </div>

      <div class="field">
        <div class="field-lines"></div>
        <div class="half-line"></div>
        <div class="center-circle"></div>
        
        <!-- Gardien -->
        <div class="player" style="left: 10%; top: 50%; transform: translateY(-50%);">
          <div class="player-number">1</div>
          <div class="player-name">Lopes</div>
        </div>
        
        <!-- Défenseurs -->
        <div class="player" style="left: 25%; top: 20%;">
          <div class="player-number">20</div>
          <div class="player-name">Gusto</div>
        </div>
        <div class="player" style="left: 25%; top: 35%;">
          <div class="player-number">4</div>
          <div class="player-name">Lukeba</div>
        </div>
        <div class="player" style="left: 25%; top: 65%;">
          <div class="player-number">5</div>
          <div class="player-name">Diomandé</div>
        </div>
        <div class="player" style="left: 25%; top: 80%;">
          <div class="player-number">3</div>
          <div class="player-name">Tagliafico</div>
        </div>
        
        <!-- Milieux défensifs -->
        <div class="player" style="left: 40%; top: 40%;">
          <div class="player-number">6</div>
          <div class="player-name">Caqueret</div>
        </div>
        <div class="player" style="left: 40%; top: 60%;">
          <div class="player-number">24</div>
          <div class="player-name">Lepenant</div>
        </div>
        
        <!-- Milieux offensifs -->
        <div class="player" style="left: 55%; top: 30%;">
          <div class="player-number">10</div>
          <div class="player-name">Cherki</div>
        </div>
        <div class="player" style="left: 55%; top: 50%;">
          <div class="player-number">8</div>
          <div class="player-name">Tolisso</div>
        </div>
        <div class="player" style="left: 55%; top: 70%;">
          <div class="player-number">7</div>
          <div class="player-name">Barcola</div>
        </div>
        
        <!-- Attaquant -->
        <div class="player" style="left: 70%; top: 50%;">
          <div class="player-number">9</div>
          <div class="player-name">Dembélé</div>
        </div>
      </div>

      <div class="substitutes">
        <div class="substitutes-title">Remplaçants :</div>
        <div class="substitute">
          <div class="substitute-number">30</div>
          <div>Riou</div>
        </div>
        <div class="substitute">
          <div class="substitute-number">2</div>
          <div>Mendes</div>
        </div>
        <div class="substitute">
          <div class="substitute-number">12</div>
          <div>Henrique</div>
        </div>
        <div class="substitute">
          <div class="substitute-number">18</div>
          <div>El Arouch</div>
        </div>
        <div class="substitute">
          <div class="substitute-number">11</div>
          <div>Kadewere</div>
        </div>
      </div>
    </div>
  </div>

  <div class="match-stats">
    <div class="stats-box">
      <div class="stats-title">Statistiques du Match</div>
      <div class="stat-item">
        <span>Possession</span>
        <span class="stat-value">62% - 38%</span>
      </div>
      <div class="stat-item">
        <span>Tirs</span>
        <span class="stat-value">18 - 9</span>
      </div>
      <div class="stat-item">
        <span>Tirs cadrés</span>
        <span class="stat-value">8 - 3</span>
      </div>
      <div class="stat-item">
        <span>Corners</span>
        <span class="stat-value">7 - 2</span>
      </div>
    </div>

    <div class="stats-box">
      <div class="stats-title">Événements</div>
      <div class="stat-item">
        <span>⚽ 23' Mbappé</span>
        <span class="stat-value">1-0</span>
      </div>
      <div class="stat-item">
        <span>⚽ 45+2' Dembélé</span>
        <span class="stat-value">1-1</span>
      </div>
      <div class="stat-item">
        <span>⚽ 67' Messi</span>
        <span class="stat-value">2-1</span>
      </div>
      <div class="stat-item">
        <span>⚽ 89' Neymar</span>
        <span class="stat-value">3-1</span>
      </div>
      <div class="stat-item">
        <span>🟨 54' Caqueret</span>
        <span class="stat-value"></span>
      </div>
    </div>

    <div class="stats-box">
      <div class="stats-title">Arbitrage</div>
      <div class="stat-item">
        <span>Arbitre central</span>
        <span class="stat-value">Clément Turpin</span>
      </div>
      <div class="stat-item">
        <span>VAR</span>
        <span class="stat-value">François Letexier</span>
      </div>
      <div class="stat-item">
        <span>Fautes</span>
        <span class="stat-value">12 - 18</span>
      </div>
      <div class="stat-item">
        <span>Cartons jaunes</span>
        <span class="stat-value">1 - 3</span>
      </div>
      <div class="stat-item">
        <span>Cartons rouges</span>
        <span class="stat-value">0 - 0</span>
      </div>
    </div>
  </div>
</div>

<div class="footer">Merci d'utiliser Scoreflix ⚽</div>

<script>
  function toggleMenu() {
    document.getElementById("sidebar").classList.toggle("open");
  }
  
  // Animation des joueurs au clic
  document.querySelectorAll('.player').forEach(player => {
    player.addEventListener('click', function() {
      this.style.transform = this.style.transform.includes('scale(1.2)') ? 
        this.style.transform.replace('scale(1.2)', 'scale(1)') : 
        this.style.transform + ' scale(1.2)';
    });
  });
</script>
</body>
</html>