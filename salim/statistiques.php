<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCOREFLIX - Statistiques</title>
  <style>
    :root {
      --primary-color: #6B0000;
      --primary-light: #ff4444;
      --bg-color: #111;
      --card-color: #222;
      --text-color: #eee;
      --text-secondary: #aaa;
      --sidebar-width: 250px;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      background: var(--bg-color);
      color: var(--text-color);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }
    
    header {
      background: var(--primary-color);
      padding: 15px 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 0 15px #6B0000aa;
      position: relative;
      z-index: 10;
    }
    
    .menu-toggle {
      font-size: 1.5rem;
      cursor: pointer;
      padding: 5px;
    }
    
    .logo {
      font-size: 1.8rem;
      font-weight: 900;
      color: var(--text-color);
      display: flex;
      align-items: center;
      gap: 5px;
    }
    
    .letter-s {
      color: #440000;
    }
    
    .ballon {
      font-size: 1.2rem;
    }
    
    .sidebar {
      position: fixed;
      top: 0;
      left: calc(-1 * var(--sidebar-width));
      width: var(--sidebar-width);
      height: 100vh;
      background: var(--card-color);
      box-shadow: 2px 0 10px rgba(0,0,0,0.5);
      transition: left 0.3s ease;
      z-index: 20;
      padding-top: 20px;
      display: flex;
      flex-direction: column;
    }
    
    .sidebar.open {
      left: 0;
    }
    
    .close-btn {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 1.8rem;
      cursor: pointer;
      color: var(--text-secondary);
    }
    
    .sidebar a {
      color: var(--text-color);
      text-decoration: none;
      padding: 15px 25px;
      transition: all 0.3s;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    
    .sidebar a:hover {
      background: var(--primary-color);
      padding-left: 30px;
    }
    
    .container {
      max-width: 1200px;
      margin: 30px auto;
      padding: 0 20px;
      flex: 1;
      width: 100%;
    }
    
    h2 {
      color: var(--primary-light);
      margin-bottom: 25px;
      font-size: 1.8rem;
      text-align: center;
    }
    
    .stats-container {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 25px;
      margin-top: 20px;
    }
    
    .stats-card {
      background: var(--card-color);
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      transition: transform 0.3s;
      border-top: 4px solid var(--primary-color);
    }
    
    .stats-card:hover {
      transform: translateY(-5px);
    }
    
    .stats-title {
      color: var(--primary-light);
      margin: 0 0 15px 0;
      padding-bottom: 10px;
      border-bottom: 1px solid #333;
      font-size: 1.3rem;
    }
    
    .stats-item {
      margin: 18px 0;
    }
    
    .stats-label {
      display: block;
      margin-bottom: 8px;
      color: var(--text-secondary);
      font-size: 0.95rem;
    }
    
    .stats-value {
      font-size: 1.2rem;
      font-weight: bold;
    }
    
    .progress-bar {
      height: 8px;
      background: #333;
      border-radius: 4px;
      margin-top: 8px;
      overflow: hidden;
    }
    
    .progress {
      height: 100%;
      background: linear-gradient(90deg, var(--primary-color), var(--primary-light));
    }
    
    .footer {
      background: var(--card-color);
      color: var(--text-secondary);
      text-align: center;
      padding: 15px;
      margin-top: 40px;
      font-size: 0.9rem;
    }
    
    @media (max-width: 768px) {
      .stats-container {
        grid-template-columns: 1fr;
      }
      
      .sidebar {
        width: 100%;
        left: -100%;
      }
      
      .sidebar.open {
        left: 0;
      }
    }
  </style>
</head>
<body>

<header>
  <div class="menu-toggle" onclick="toggleMenu()">☰</div>
  <div class="logo">
    <span class="letter-s">S</span>COREFLIX 
    <span class="ballon">⚽</span>
  </div>
</header>

<div id="sidebar" class="sidebar">
  <div class="close-btn" onclick="toggleMenu()">×</div>
  <a href="stades.php">🏟️ Stades</a>
  <a href="arbitres.php">🧑‍⚖️ Arbitres</a>
  <a href="saisons.php">📅 Saisons</a>
  <a href="statistiques.php" class="active">📊 Statistiques</a>
  <a href="classement.php">🎯 Classements</a>
  <a href="equipes.php">🥇 Équipes</a>
  <a href="archives.php">📁 Archives</a>
  <a href="logout.php">🚪 Déconnexion</a>
</div>

<div class="container">
  <h2>Statistiques de la saison 2024-2025</h2>
  
  <div class="stats-container">
    <div class="stats-card">
      <h3 class="stats-title">Meilleurs Buteurs</h3>
      <div class="stats-item">
        <span class="stats-label">Kylian Mbappé (PSG)</span>
        <span class="stats-value">24 buts</span>
        <div class="progress-bar">
          <div class="progress" style="width: 100%"></div>
        </div>
      </div>
      <div class="stats-item">
        <span class="stats-label">Jonathan David (Lille)</span>
        <span class="stats-value">18 buts</span>
        <div class="progress-bar">
          <div class="progress" style="width: 75%"></div>
        </div>
      </div>
      <div class="stats-item">
        <span class="stats-label">Alexandre Lacazette (Lyon)</span>
        <span class="stats-value">15 buts</span>
        <div class="progress-bar">
          <div class="progress" style="width: 62.5%"></div>
        </div>
      </div>
    </div>
    
    <div class="stats-card">
      <h3 class="stats-title">Meilleurs Passeurs</h3>
      <div class="stats-item">
        <span class="stats-label">Ousmane Dembélé (PSG)</span>
        <span class="stats-value">11 passes</span>
        <div class="progress-bar">
          <div class="progress" style="width: 100%"></div>
        </div>
      </div>
      <div class="stats-item">
        <span class="stats-label">Teji Savanier (Montpellier)</span>
        <span class="stats-value">9 passes</span>
        <div class="progress-bar">
          <div class="progress" style="width: 82%"></div>
        </div>
      </div>
      <div class="stats-item">
        <span class="stats-label">Lionel Messi (PSG)</span>
        <span class="stats-value">8 passes</span>
        <div class="progress-bar">
          <div class="progress" style="width: 73%"></div>
        </div>
      </div>
    </div>
    
    <div class="stats-card">
      <h3 class="stats-title">Cartons Jaunes</h3>
      <div class="stats-item">
        <span class="stats-label">Sinaly Diomandé (Lyon)</span>
        <span class="stats-value">12 cartons</span>
        <div class="progress-bar">
          <div class="progress" style="width: 100%"></div>
        </div>
      </div>
      <div class="stats-item">
        <span class="stats-label">Nicolas Pallois (Nantes)</span>
        <span class="stats-value">10 cartons</span>
        <div class="progress-bar">
          <div class="progress" style="width: 83%"></div>
        </div>
      </div>
      <div class="stats-item">
        <span class="stats-label">Benjamin André (Lille)</span>
        <span class="stats-value">9 cartons</span>
        <div class="progress-bar">
          <div class="progress" style="width: 75%"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer">SCOREFLIX © 2025 MBSB - Tous droits réservés</div>


<script> 
  function toggleMenu() {
    document.getElementById("sidebar").classList.toggle("open");
  }
  
  // Fermer le menu si on clique à l'extérieur
  document.addEventListener('click', function(event) {
    const sidebar = document.getElementById('sidebar');
    const menuToggle = document.querySelector('.menu-toggle');
    
    if (!sidebar.contains(event.target) {
      if (event.target !== menuToggle && !menuToggle.contains(event.target)) {
        sidebar.classList.remove('open');
      }
    }
  });
</script>
</body>
</html>