<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SCOREFLIX - Arbitres</title>
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
    
    .search-bar {
      display: flex;
      margin-bottom: 25px;
      gap: 10px;
    }
    
    .search-input {
      flex: 1;
      padding: 12px 15px;
      border-radius: 25px;
      border: 2px solid var(--primary-color);
      background: var(--bg-color);
      color: var(--text-color);
      font-size: 1rem;
    }
    
    .search-btn {
      background: var(--primary-color);
      color: var(--text-color);
      border: none;
      padding: 0 25px;
      border-radius: 25px;
      cursor: pointer;
      transition: background 0.3s;
    }
    
    .search-btn:hover {
      background: var(--primary-light);
    }
    
    .arbitres-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      gap: 25px;
      margin-top: 20px;
    }
    
    .arbitre-card {
      background: var(--card-color);
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 15px rgba(0,0,0,0.3);
      transition: transform 0.3s;
      border-top: 4px solid var(--primary-color);
    }
    
    .arbitre-card:hover {
      transform: translateY(-5px);
    }
    
    .arbitre-photo {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-bottom: 1px solid #333;
    }
    
    .arbitre-info {
      padding: 20px;
    }
    
    .arbitre-nom {
      color: var(--primary-light);
      margin: 0 0 10px 0;
      font-size: 1.3rem;
    }
    
    .arbitre-details {
      color: var(--text-secondary);
      margin-bottom: 8px;
      font-size: 0.95rem;
    }
    
    .arbitre-stats {
      display: flex;
      justify-content: space-between;
      margin-top: 15px;
      padding-top: 15px;
      border-top: 1px solid #333;
    }
    
    .stat-item {
      text-align: center;
    }
    
    .stat-value {
      font-weight: bold;
      color: var(--primary-light);
    }
    
    .stat-label {
      font-size: 0.8rem;
      color: var(--text-secondary);
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
      .arbitres-grid {
        grid-template-columns: 1fr;
      }
      
      .sidebar {
        width: 100%;
        left: -100%;
      }
      
      .sidebar.open {
        left: 0;
      }
      
      .search-bar {
        flex-direction: column;
      }
      
      .search-btn {
        padding: 12px;
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
  <a href="public.php">🏟️ Stades</a>
  <a href="arbitres.php" class="active">🧑‍⚖️ Arbitres</a>
  <a href="saisons.php">📅 Saisons</a>
  <a href="statistiques.php">📊 Statistiques</a>
  <a href="classement.php">🎯 Classements</a>
  <a href="equipes.php">🥇 Équipes</a>
  <a href="archives.php">📁 Archives</a>
  <a href="logout.php">🚪 Déconnexion</a>
</div>

<div class="container">
  <h2>Liste des Arbitres</h2>
  
  <div class="search-bar">
    <input type="text" class="search-input" placeholder="Rechercher un arbitre...">
    <button class="search-btn">Rechercher</button>
  </div>
  
  <div class="arbitres-grid">
    <!-- Arbitre 1 -->
    <div class="arbitre-card">
      <img src="https://images.daznservices.com/di/library/DAZN_News/bc/b3/clement-turpin_1ou4yp0dt22vu1f6extx8h378m.jpg?t=-261871764" alt="Clément Turpin" class="arbitre-photo">
      <div class="arbitre-info">
        <h3 class="arbitre-nom">Clément Turpin</h3>
        <p class="arbitre-details">Nationalité: Française</p>
        <p class="arbitre-details">Expérience: 15 ans</p>
        <div class="arbitre-stats">
          <div class="stat-item">
            <div class="stat-value">142</div>
            <div class="stat-label">Matchs</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">12</div>
            <div class="stat-label">Cartons</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">4.8</div>
            <div class="stat-label">Note</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Arbitre 2 -->
    <div class="arbitre-card">
      <img src="https://th.bing.com/th/id/R.1fea54b773474435bbed25bbd8651c78?rik=RUu6VzLXpg61lg&pid=ImgRaw&r=0" alt="Benoît Bastien" class="arbitre-photo">
      <div class="arbitre-info">
        <h3 class="arbitre-nom">Benoît Bastien</h3>
        <p class="arbitre-details">Nationalité: Française</p>
        <p class="arbitre-details">Expérience: 12 ans</p>
        <div class="arbitre-stats">
          <div class="stat-item">
            <div class="stat-value">128</div>
            <div class="stat-label">Matchs</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">15</div>
            <div class="stat-label">Cartons</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">4.6</div>
            <div class="stat-label">Note</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Arbitre 3 -->
    <div class="arbitre-card">
      <img src="https://i0.wp.com/asm-supporters.fr/wp-content/uploads/2021/05/Icon__D1R0377.jpg?fit=2000%2C1333&ssl=1" alt="Ruddy Buquet" class="arbitre-photo">
      <div class="arbitre-info">
        <h3 class="arbitre-nom">Ruddy Buquet</h3>
        <p class="arbitre-details">Nationalité: Française</p>
        <p class="arbitre-details">Expérience: 14 ans</p>
        <div class="arbitre-stats">
          <div class="stat-item">
            <div class="stat-value">135</div>
            <div class="stat-label">Matchs</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">11</div>
            <div class="stat-label">Cartons</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">4.7</div>
            <div class="stat-label">Note</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Arbitre 4 -->
    <div class="arbitre-card">
      <img src="https://tse1.mm.bing.net/th/id/OIP.O_qtRSszoYj-CyfuLY35qgHaE8?r=0&rs=1&pid=ImgDetMain" alt="Amaury Delerue" class="arbitre-photo">
      <div class="arbitre-info">
        <h3 class="arbitre-nom">Amaury Delerue</h3>
        <p class="arbitre-details">Nationalité: Française</p>
        <p class="arbitre-details">Expérience: 8 ans</p>
        <div class="arbitre-stats">
          <div class="stat-item">
            <div class="stat-value">98</div>
            <div class="stat-label">Matchs</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">9</div>
            <div class="stat-label">Cartons</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">4.5</div>
            <div class="stat-label">Note</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Arbitre 5 -->
    <div class="arbitre-card">
      <img src="https://tse4.mm.bing.net/th/id/OIP.KAtbdE20qtU8VvbMnCrHPwHaE7?r=0&rs=1&pid=ImgDetMain" alt="François Letexier" class="arbitre-photo">
      <div class="arbitre-info">
        <h3 class="arbitre-nom">François Letexier</h3>
        <p class="arbitre-details">Nationalité: Française</p>
        <p class="arbitre-details">Expérience: 6 ans</p>
        <div class="arbitre-stats">
          <div class="stat-item">
            <div class="stat-value">76</div>
            <div class="stat-label">Matchs</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">7</div>
            <div class="stat-label">Cartons</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">4.4</div>
            <div class="stat-label">Note</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Arbitre 6 -->
    <div class="arbitre-card">
      <img src="https://th.bing.com/th/id/R.c2bb37a61181514fd17a5a79ea0faaa8?rik=5LmousQEWpPHag&pid=ImgRaw&r=0" alt="Jérôme Brisard" class="arbitre-photo">
      <div class="arbitre-info">
        <h3 class="arbitre-nom">Jérôme Brisard</h3>
        <p class="arbitre-details">Nationalité: Française</p>
        <p class="arbitre-details">Expérience: 5 ans</p>
        <div class="arbitre-stats">
          <div class="stat-item">
            <div class="stat-value">65</div>
            <div class="stat-label">Matchs</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">6</div>
            <div class="stat-label">Cartons</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">4.3</div>
            <div class="stat-label">Note</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Arbitre 7 -->
    <div class="arbitre-card">
      <img src="https://www.ogcnice-assets.com/images/articles/unes/2021/01/arbitre-ogcnfcgb.jpg" alt="Thomas Léonard" class="arbitre-photo">
      <div class="arbitre-info">
        <h3 class="arbitre-nom">Thomas Léonard</h3>
        <p class="arbitre-details">Nationalité: Française</p>
        <p class="arbitre-details">Expérience: 7 ans</p>
        <div class="arbitre-stats">
          <div class="stat-item">
            <div class="stat-value">82</div>
            <div class="stat-label">Matchs</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">8</div>
            <div class="stat-label">Cartons</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">4.5</div>
            <div class="stat-label">Note</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Arbitre 8 -->
    <div class="arbitre-card">
      <img src="https://tse1.mm.bing.net/th/id/OIP.fJ10OCqnsC7D_KGE93_82gHaE7?r=0&rs=1&pid=ImgDetMain" alt="Eric Wattellier" class="arbitre-photo">
      <div class="arbitre-info">
        <h3 class="arbitre-nom">Eric Wattellier</h3>
        <p class="arbitre-details">Nationalité: Française</p>
        <p class="arbitre-details">Expérience: 10 ans</p>
        <div class="arbitre-stats">
          <div class="stat-item">
            <div class="stat-value">112</div>
            <div class="stat-label">Matchs</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">10</div>
            <div class="stat-label">Cartons</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">4.6</div>
            <div class="stat-label">Note</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Arbitre 9 -->
    <div class="arbitre-card">
      <img src="https://tse1.mm.bing.net/th/id/OIP.JMm-eJ7g1sn4hw0TJAXegQHaE7?r=0&rs=1&pid=ImgDetMain" alt="Florent Batta" class="arbitre-photo">
      <div class="arbitre-info">
        <h3 class="arbitre-nom">Florent Batta</h3>
        <p class="arbitre-details">Nationalité: Française</p>
        <p class="arbitre-details">Expérience: 9 ans</p>
        <div class="arbitre-stats">
          <div class="stat-item">
            <div class="stat-value">105</div>
            <div class="stat-label">Matchs</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">9</div>
            <div class="stat-label">Cartons</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">4.5</div>
            <div class="stat-label">Note</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Arbitre 10 -->
    <div class="arbitre-card">
      <img src="https://i0.wp.com/www.lepetitlillois.com/wp-content/uploads/2020/12/48379121-scaled-e1607994098845.jpg?fit=2560%2C1580&ssl=1" alt="Hakim Ben El Hadj" class="arbitre-photo">
      <div class="arbitre-info">
        <h3 class="arbitre-nom">Hakim Ben El Hadj</h3>
        <p class="arbitre-details">Nationalité: Française</p>
        <p class="arbitre-details">Expérience: 11 ans</p>
        <div class="arbitre-stats">
          <div class="stat-item">
            <div class="stat-value">120</div>
            <div class="stat-label">Matchs</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">11</div>
            <div class="stat-label">Cartons</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">4.7</div>
            <div class="stat-label">Note</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Arbitre 11 -->
    <div class="arbitre-card">
      <img src="https://tse2.mm.bing.net/th/id/OIP.OU8O46LTQDToyMTrwu2ldgHaFV?r=0&rs=1&pid=ImgDetMain" alt="Stéphanie Frappart" class="arbitre-photo">
      <div class="arbitre-info">
        <h3 class="arbitre-nom">Stéphanie Frappart</h3>
        <p class="arbitre-details">Nationalité: Française</p>
        <p class="arbitre-details">Expérience: 8 ans</p>
        <div class="arbitre-stats">
          <div class="stat-item">
            <div class="stat-value">95</div>
            <div class="stat-label">Matchs</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">7</div>
            <div class="stat-label">Cartons</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">4.8</div>
            <div class="stat-label">Note</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Arbitre 12 -->
    <div class="arbitre-card">
      <img src="https://tse2.mm.bing.net/th/id/OIP.O2-KX9tQdROijvTqdAhcgQHaE7?r=0&rs=1&pid=ImgDetMain" alt="Willy Delajod" class="arbitre-photo">
      <div class="arbitre-info">
        <h3 class="arbitre-nom">Willy Delajod</h3>
        <p class="arbitre-details">Nationalité: Française</p>
        <p class="arbitre-details">Expérience: 5 ans</p>
        <div class="arbitre-stats">
          <div class="stat-item">
            <div class="stat-value">68</div>
            <div class="stat-label">Matchs</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">6</div>
            <div class="stat-label">Cartons</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">4.4</div>
            <div class="stat-label">Note</div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Arbitre 13 -->
    <div class="arbitre-card">
      <img src="https://tribunenantaise.fr/wp-content/uploads/2021/10/Bastien-Dechepy.jpg" alt="Bastien Dechepy" class="arbitre-photo">
      <div class="arbitre-info">
        <h3 class="arbitre-nom">Bastien Dechepy</h3>
        <p class="arbitre-details">Nationalité: Française</p>
        <p class="arbitre-details">Expérience: 4 ans</p>
        <div class="arbitre-stats">
          <div class="stat-item">
            <div class="stat-value">52</div>
            <div class="stat-label">Matchs</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">5</div>
            <div class="stat-label">Cartons</div>
          </div>
          <div class="stat-item">
            <div class="stat-value">4.3</div>
            <div class="stat-label">Note</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer">SCOREFLIX © 2023 - Tous droits réservés</div>

<script>
  function toggleMenu() {
    document.getElementById("sidebar").classList.toggle("open");
  }
  
  // Fermer le menu si on clique à l'extérieur
  document.addEventListener('click', function(event) {
    const sidebar = document.getElementById('sidebar');
    const menuToggle = document.querySelector('.menu-toggle');
    
    if (!sidebar.contains(event.target)) {
      if (event.target !== menuToggle && !menuToggle.contains(event.target)) {
        sidebar.classList.remove('open');
      }
    }
  });
  
  // Fonction de recherche (basique)
  document.querySelector('.search-btn').addEventListener('click', function() {
    const searchTerm = document.querySelector('.search-input').value.toLowerCase();
    const cards = document.querySelectorAll('.arbitre-card');
    
    cards.forEach(card => {
      const nom = card.querySelector('.arbitre-nom').textContent.toLowerCase();
      if (nom.includes(searchTerm)) {
        card.style.display = 'block';
      } else {
        card.style.display = 'none';
      }
    });
  });
  
  // Permettre la recherche avec la touche Entrée
  document.querySelector('.search-input').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
      document.querySelector('.search-btn').click();
    }
  });
</script>
</body>
</html>