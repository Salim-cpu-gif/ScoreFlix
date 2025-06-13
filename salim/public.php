<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SCOREFLIX - Matchs</title>
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
      max-width: 900px;
      margin: 0 auto;
    }

    h2 {
      color: #ff4444;
      border-bottom: 2px solid #6B0000;
      padding-bottom: 5px;
      margin-top: 40px;
    }

    .match, .stade, .arbitre, .saison {
      background: #222;
      border-left: 4px solid #6B0000;
      margin: 15px 0;
      padding: 15px 20px;
      border-radius: 12px;
      box-shadow: 0 0 15px #6B000066;
      overflow: auto;
    }

    .stade img {
      max-width: 100%;
      height: auto;
      margin-top: 10px;
      border-radius: 8px;
    }

    .arbitre-content {
      display: flex;
      align-items: center;
    }

    .arbitre-info {
      flex: 1;
    }

    .arbitre img {
      width: 100px;
      height: auto;
      border-radius: 8px;
      margin-left: 20px;
    }

    .footer {
      text-align: center;
      color: #666;
      font-size: 0.9rem;
      padding: 20px;
      margin-top: 60px;
    }

    @media (max-width: 600px) {
      .logo {
        font-size: 2rem;
      }

      .sidebar {
        width: 180px;
      }
      
      .arbitre-content {
        flex-direction: column;
      }
      
      .arbitre img {
        margin: 10px 0 0 0;
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
  <a href="equipes.php">⚽️Équipes</a>
  <a href="statistiques.php">📊 Statistiques</a>
  <a href="classement.php">🎯 Classements</a>
  <a href="archives.php">📁 Archives</a>
  <a href="logout.php">🚪 Déconnexion</a>
</div>

<div class="container">
  <h2>Stades</h2>
  <div class="stade">
    <strong>Stade de Lyon</strong> – Lyon – Capacité : 55000<br>
    <img src="https://th.bing.com/th/id/R.13aca8dabe00a105e248e7ec39ad9a15?rik=dZwHZ9Rxw4wAMg&riu=http%3a%2f%2fstadiumdb.com%2fpictures%2fstadiums%2ffra%2fparc_ol%2fparc_ol16.jpg&ehk=bx9SAxhuGtch2fVhKlEem2V6mq7GGG9hoMBJ9ffX240%3d&risl=&pid=ImgRaw&r=0" alt="Stade de Lyon">
  </div>
  <div class="stade">
    <strong>Stade Vélodrome</strong> – Marseille – Capacité : 67000<br>
    <img src="https://th.bing.com/th/id/R.e7958f483fee491be3fdcc76332ffa3b?rik=RvrxqhublJQFXQ&riu=http%3a%2f%2fstadiony.net%2fpictures%2fstadiums%2ffra%2fstade_velodrome%2fstade_velodrome58.jpg&ehk=SG4SqiUTz72mx2pkoQ2Jn4NRbB0va%2foERcHPbPkuIPU%3d&risl=&pid=ImgRaw&r=0" alt="Stade Vélodrome">
  </div>
  <div class="stade">
    <strong>Stade Pierre-Mauroy</strong> – Lille – Capacité : 50000<br>
    <img src="https://www.tz.de/bilder/2016/03/26/6160352/1156229909-2016-frankreich-stade-pierre-mauroy-QLBG.jpg" alt="Stade Pierre-Mauroy">
  </div>
  <div class="stade">
    <strong>Parc des Princes</strong> – Paris – Capacité : 42000<br>
    <img src="https://wallpapercave.com/wp/wp9718060.jpg" alt="Parc des Princes">
  </div>
  <div class="stade">
    <strong>Stade de la Beaujoire</strong> – Nantes – Capacité : 38000<br>
    <img src="img/beaujoire.jpg" alt="Stade de la Beaujoire">
  </div>
  <div class="stade">
    <strong>Stade Louis 2</strong> – Monaco – Capacité : 43000<br>
    <img src="https://th.bing.com/th/id/R.e4338c352fa3ac4155108fe89c58394e?rik=%2fEvdcfSuoYSg%2fQ&pid=ImgRaw&r=0" alt="Stade Louis 2">
  </div>
  <div class="stade">
    <strong>Stade de Lens</strong> – Lens – Capacité : 22000<br>
    <img src="https://olympic.ca/wp-content/uploads/2023/07/Nantes-Stadium-EXT-OLY.jpg?quality=100&w=1132" alt="Stade de Lens">
  </div>
  <div class="stade">
    <strong>Roazhon Park</strong> – Rennes – Capacité : 29000<br>
    <img src="https://www.arch2o.com/wp-content/uploads/2022/12/Arch2O-aarhus-stadium-3-2048x1448.jpg" alt="Roazhon Park">
  </div>
  <div class="stade">
    <strong>Allianz Stadium</strong> – Nice – Capacité : 19000<br>
    <img src="https://th.bing.com/th/id/R.d5e13ba6e5d5893ddb154a5e36263999?rik=BKj8KdXdaPopMg&pid=ImgRaw&r=0" alt="Allianz Stadium">
  </div>
  <div class="stade">
    <strong>Stade de la Mosson</strong> – Montpellier – Capacité : 32000<br>
    <img src="https://th.bing.com/th/id/R.e849131a8fc0b3aaf2a8431159ed415c?rik=34vzWyO4kZNNvw&riu=http%3a%2f%2fwww.info-stades.fr%2fuploads%2fstades%2fmontpellier-projet-renovation-la-mosson-51457.jpg&ehk=ssim2roPYIC8vySrFFYme86kyxyQpbPL94T8LYxyEGY%3d&risl=&pid=ImgRaw&r=0" alt="Stade de la Mosson">
  </div>

  <h2 href="arbitres.php">Arbitres</h2>
  <div class="arbitre">
    <div class="arbitre-content">
      <div class="arbitre-info">
        <strong>Martin Lucas</strong> – Homme
      </div>
      <img src="https://th.bing.com/th/id/OIP.uI3Ptu6mwGjc41wQTtaEmQHaDt?w=315&h=174&c=7&r=0&o=5&dpr=2&pid=1.7" alt="Martin Lucas">
    </div>
  </div>
  
  <div class="arbitre">
    <div class="arbitre-content">
      <div class="arbitre-info">
        <strong>Durand Clément</strong> – Homme
      </div>
      <img src="https://th.bing.com/th/id/OIP.RPONLFWCnEmXJCQka2vMYwHaE8?w=264&h=180&c=7&r=0&o=5&dpr=2&pid=1.7" alt="Durand Clément">
    </div>
  </div>
  
  <div class="arbitre">
    <div class="arbitre-content">
      <div class="arbitre-info">
        <strong>Lemoine Antoine</strong> – Homme
      </div>
      <img src="https://th.bing.com/th/id/R.763021d98c6426fc902b360d13d4e0a1?rik=yGnrVTusPqAjUg&pid=ImgRaw&r=0" alt="Lemoine Antoine">
    </div>
  </div>
  
  <div class="arbitre">
    <div class="arbitre-content">
      <div class="arbitre-info">
        <strong>Gauthier Manon</strong> – Femme
      </div>
    </div>
  </div>
  
  <div class="arbitre">
    <div class="arbitre-content">
      <div class="arbitre-info">
        <strong>Noël Hugo</strong> – Homme
      </div>
    </div>
  </div>
  
  <div class="arbitre">
    <div class="arbitre-content">
      <div class="arbitre-info">
        <strong>Renard Théo</strong> – Homme
      </div>
    </div>
  </div>

  <h2 href="saisons.php">Saisons</h2>
  <div class="saison">2023/2024 – Champion : PSG</div>
  <div class="saison">2022/2023 – Champion : Lens</div>
  <div class="saison">2021/2022 – Champion : PSG</div>
  <div class="saison">2020/2021 – Champion : Lille</div>
  <div class="saison">2019/2020 – Champion : PSG</div>
</div>

<div class="footer">Merci d'utiliser Scoreflix ⚽</div>

<script>
  function toggleMenu() {
    document.getElementById("sidebar").classList.toggle("open");
  }
</script>
</body>
</html>