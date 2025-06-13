<?php
include 'db_connect.php';

// Titre de la page
$title = "SCOREFLIX - Classement Ligue 1";

// Données du classement (simulées)
$standings = [
    [
        'rank' => 1,
        'team' => ['name' => 'Paris SG', 'logo' => 'https://th.bing.com/th/id/R.6be3f917b50e3707fbafee465f27c139?rik=ZnmZENGpqRPWRw&pid=ImgRaw&r=0'],
        'points' => 48,
        'all' => [
            'played' => 18,
            'win' => 15,
            'draw' => 3,
            'lose' => 0,
            'goals' => ['for' => 52, 'against' => 12]
        ],
        'goalsDiff' => +40,
        'form' => 'WWWDW'
    ],
    [
        'rank' => 2,
        'team' => ['name' => 'Olympique de Marseille', 'logo' => 'https://th.bing.com/th/id/R.0eb672819952dfa2330901bb743c8534?rik=VJgHzCSFJtL2dA&pid=ImgRaw&r=0'],
        'points' => 42,
        'all' => [
            'played' => 18,
            'win' => 13,
            'draw' => 3,
            'lose' => 2,
            'goals' => ['for' => 38, 'against' => 18]
        ],
        'goalsDiff' => +20,
        'form' => 'WWLDW'
    ],
    [
        'rank' => 3,
        'team' => ['name' => 'AS Monaco', 'logo' => 'https://tse1.mm.bing.net/th/id/OIP.PV2M0mmx0-HTmCGSKfqaNgHaHa?r=0&rs=1&pid=ImgDetMain'],
        'points' => 38,
        'all' => [
            'played' => 18,
            'win' => 11,
            'draw' => 5,
            'lose' => 2,
            'goals' => ['for' => 42, 'against' => 24]
        ],
        'goalsDiff' => +18,
        'form' => 'WDWLW'
    ],
    [
        'rank' => 4,
        'team' => ['name' => 'Stade Rennais', 'logo' => 'https://tse3.mm.bing.net/th/id/OIP.WjOs8i3jkq1nXxWdVZyR7wHaIL?r=0&rs=1&pid=ImgDetMain'],
        'points' => 36,
        'all' => [
            'played' => 18,
            'win' => 10,
            'draw' => 6,
            'lose' => 2,
            'goals' => ['for' => 35, 'against' => 19]
        ],
        'goalsDiff' => +16,
        'form' => 'DWWWD'
    ],
    [
        'rank' => 5,
        'team' => ['name' => 'OGC Nice', 'logo' => 'https://1000logos.net/wp-content/uploads/2020/09/Nice-logo-1536x960.png'],
        'points' => 35,
        'all' => [
            'played' => 18,
            'win' => 10,
            'draw' => 5,
            'lose' => 3,
            'goals' => ['for' => 28, 'against' => 14]
        ],
        'goalsDiff' => +14,
        'form' => 'WLWDD'
    ],
    [
        'rank' => 6,
        'team' => ['name' => 'Lille OSC', 'logo' => 'https://th.bing.com/th/id/R.82392b851c53be23b7be5ccdc9299e29?rik=kN4wQAn06FWL%2bA&riu=http%3a%2f%2fufopedia.it%2fimages%2fc%2fcb%2fLogo_LOSC_Lille_2018.svg.png&ehk=D75%2bvQI5Hyq5dL9kK6verWQL%2fVTfGhiavr2LyXpWDaY%3d&risl=&pid=ImgRaw&r=0'],
        'points' => 33,
        'all' => [
            'played' => 18,
            'win' => 9,
            'draw' => 6,
            'lose' => 3,
            'goals' => ['for' => 32, 'against' => 22]
        ],
        'goalsDiff' => +10,
        'form' => 'DWLDW'
    ],
    [
        'rank' => 7,
        'team' => ['name' => 'RC Lens', 'logo' => 'https://th.bing.com/th/id/OIP.TeKgGhHFaZtwIovzfN-PqQHaKF?r=0&rs=1&pid=ImgDetMain'],
        'points' => 31,
        'all' => [
            'played' => 18,
            'win' => 9,
            'draw' => 4,
            'lose' => 5,
            'goals' => ['for' => 30, 'against' => 25]
        ],
        'goalsDiff' => +5,
        'form' => 'LWWDL'
    ],
    [
        'rank' => 8,
        'team' => ['name' => 'Olympique Lyonnais', 'logo' => 'https://th.bing.com/th/id/R.37a777c9322c4980086758eb16159e5e?rik=BHmz8hrmeT1iDQ&pid=ImgRaw&r=0'],
        'points' => 28,
        'all' => [
            'played' => 18,
            'win' => 8,
            'draw' => 4,
            'lose' => 6,
            'goals' => ['for' => 29, 'against' => 23]
        ],
        'goalsDiff' => +6,
        'form' => 'WWLLW'
    ],
    [
        'rank' => 9,
        'team' => ['name' => 'FC Nantes', 'logo' => 'https://tse4.mm.bing.net/th/id/OIP.0O-TabyqLgVXadLI439J2AHaHa?r=0&rs=1&pid=ImgDetMain'],
        'points' => 25,
        'all' => [
            'played' => 18,
            'win' => 7,
            'draw' => 4,
            'lose' => 7,
            'goals' => ['for' => 22, 'against' => 26]
        ],
        'goalsDiff' => -4,
        'form' => 'LLWDD'
    ],
    [
        'rank' => 10,
        'team' => ['name' => 'Montpellier HSC', 'logo' => 'https://tse2.mm.bing.net/th/id/OIP.w-f4iAtBuiEsfQ0ZwmekQwHaHa?r=0&rs=1&pid=ImgDetMain'],
        'points' => 22,
        'all' => [
            'played' => 18,
            'win' => 6,
            'draw' => 4,
            'lose' => 8,
            'goals' => ['for' => 27, 'against' => 32]
        ],
        'goalsDiff' => -5,
        'form' => 'LWLLD'
    ]
];

// Données du classement précédent (saison 2022-2023)
$previousStandings = [
    [
        'rank' => 1,
        'team' => ['name' => 'Paris SG', 'logo' => 'https://th.bing.com/th/id/R.6be3f917b50e3707fbafee465f27c139?rik=ZnmZENGpqRPWRw&pid=ImgRaw&r=0'],
        'points' => 85,
        'all' => [
            'played' => 38,
            'win' => 27,
            'draw' => 4,
            'lose' => 7,
            'goals' => ['for' => 89, 'against' => 40]
        ],
        'goalsDiff' => +49,
        'form' => 'WWWWW'
    ],
    [
        'rank' => 2,
        'team' => ['name' => 'Olympique de Marseille', 'logo' => 'https://th.bing.com/th/id/R.0eb672819952dfa2330901bb743c8534?rik=VJgHzCSFJtL2dA&pid=ImgRaw&r=0'],
        'points' => 73,
        'all' => [
            'played' => 38,
            'win' => 22,
            'draw' => 7,
            'lose' => 9,
            'goals' => ['for' => 67, 'against' => 40]
        ],
        'goalsDiff' => +27,
        'form' => 'WWLDW'
    ],
    [
        'rank' => 3,
        'team' => ['name' => 'AS Monaco', 'logo' => 'https://tse1.mm.bing.net/th/id/OIP.PV2M0mmx0-HTmCGSKfqaNgHaHa?r=0&rs=1&pid=ImgDetMain'],
        'points' => 71,
        'all' => [
            'played' => 38,
            'win' => 20,
            'draw' => 11,
            'lose' => 7,
            'goals' => ['for' => 70, 'against' => 51]
        ],
        'goalsDiff' => +19,
        'form' => 'WDWLW'
    ],
    [
        'rank' => 4,
        'team' => ['name' => 'Stade Rennais', 'logo' => 'https://tse3.mm.bing.net/th/id/OIP.WjOs8i3jkq1nXxWdVZyR7wHaIL?r=0&rs=1&pid=ImgDetMain'],
        'points' => 68,
        'all' => [
            'played' => 38,
            'win' => 20,
            'draw' => 8,
            'lose' => 10,
            'goals' => ['for' => 82, 'against' => 52]
        ],
        'goalsDiff' => +30,
        'form' => 'DWWWD'
    ],
    [
        'rank' => 5,
        'team' => ['name' => 'Lille OSC', 'logo' => 'https://th.bing.com/th/id/R.82392b851c53be23b7be5ccdc9299e29?rik=kN4wQAn06FWL%2bA&riu=http%3a%2f%2fufopedia.it%2fimages%2fc%2fcb%2fLogo_LOSC_Lille_2018.svg.png&ehk=D75%2bvQI5Hyq5dL9kK6verWQL%2fVTfGhiavr2LyXpWDaY%3d&risl=&pid=ImgRaw&r=0'],
        'points' => 67,
        'all' => [
            'played' => 38,
            'win' => 19,
            'draw' => 10,
            'lose' => 9,
            'goals' => ['for' => 65, 'against' => 44]
        ],
        'goalsDiff' => +21,
        'form' => 'DWLDW'
    ],
    [
        'rank' => 6,
        'team' => ['name' => 'Olympique Lyonnais', 'logo' => 'https://th.bing.com/th/id/R.37a777c9322c4980086758eb16159e5e?rik=BHmz8hrmeT1iDQ&pid=ImgRaw&r=0'],
        'points' => 62,
        'all' => [
            'played' => 38,
            'win' => 18,
            'draw' => 8,
            'lose' => 12,
            'goals' => ['for' => 65, 'against' => 47]
        ],
        'goalsDiff' => +18,
        'form' => 'WWLLW'
    ],
    [
        'rank' => 7,
        'team' => ['name' => 'RC Lens', 'logo' => 'https://th.bing.com/th/id/OIP.TeKgGhHFaZtwIovzfN-PqQHaKF?r=0&rs=1&pid=ImgDetMain'],
        'points' => 60,
        'all' => [
            'played' => 38,
            'win' => 17,
            'draw' => 9,
            'lose' => 12,
            'goals' => ['for' => 60, 'against' => 52]
        ],
        'goalsDiff' => +8,
        'form' => 'LWWDL'
    ],
    [
        'rank' => 8,
        'team' => ['name' => 'OGC Nice', 'logo' => 'https://1000logos.net/wp-content/uploads/2020/09/Nice-logo-1536x960.png'],
        'points' => 58,
        'all' => [
            'played' => 38,
            'win' => 15,
            'draw' => 13,
            'lose' => 10,
            'goals' => ['for' => 48, 'against' => 37]
        ],
        'goalsDiff' => +11,
        'form' => 'WLWDD'
    ],
    [
        'rank' => 9,
        'team' => ['name' => 'Montpellier HSC', 'logo' => 'https://tse2.mm.bing.net/th/id/OIP.w-f4iAtBuiEsfQ0ZwmekQwHaHa?r=0&rs=1&pid=ImgDetMain'],
        'points' => 50,
        'all' => [
            'played' => 38,
            'win' => 14,
            'draw' => 8,
            'lose' => 16,
            'goals' => ['for' => 56, 'against' => 53]
        ],
        'goalsDiff' => +3,
        'form' => 'LWLLD'
    ],
    [
        'rank' => 10,
        'team' => ['name' => 'FC Nantes', 'logo' => 'https://tse4.mm.bing.net/th/id/OIP.0O-TabyqLgVXadLI439J2AHaHa?r=0&rs=1&pid=ImgDetMain'],
        'points' => 48,
        'all' => [
            'played' => 38,
            'win' => 13,
            'draw' => 9,
            'lose' => 16,
            'goals' => ['for' => 47, 'against' => 58]
        ],
        'goalsDiff' => -11,
        'form' => 'LLWDD'
    ]
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title; ?></title>
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

    .standings-card {
      background: #222;
      border-left: 4px solid #6B0000;
      margin: 20px 0;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 0 15px #6B000066;
    }

    .standings-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
    }

    .standings-title {
      font-size: 1.5rem;
      margin: 0;
      color: #ffcc00;
    }

    .standings-update {
      color: #aaa;
      font-size: 0.9rem;
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
      text-align: center;
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
      font-weight: bold;
    }

    .team-cell {
      display: flex;
      align-items: center;
      text-align: left;
    }

    .team-logo {
      width: 25px;
      height: 25px;
      margin-right: 10px;
    }

    .promotion {
      background-color: #1a3a1a;
    }

    .europa {
      background-color: #2a2a4a;
    }

    .conference {
      background-color: #3a3a5a;
    }

    .relegation {
      background-color: #4a1a1a;
    }

    .form-bubble {
      display: inline-block;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      text-align: center;
      line-height: 20px;
      font-size: 0.7rem;
      margin-right: 3px;
    }

    .win {
      background-color: #2e7d32;
      color: white;
    }

    .draw {
      background-color: #f9a825;
      color: black;
    }

    .lose {
      background-color: #c62828;
      color: white;
    }

    .footer {
      text-align: center;
      color: #666;
      font-size: 0.9rem;
      padding: 20px;
      margin-top: 60px;
    }

    @media (max-width: 768px) {
      .standings-header {
        flex-direction: column;
        align-items: flex-start;
      }
      
      .standings-update {
        margin-top: 10px;
      }
      
      th, td {
        padding: 8px 5px;
        font-size: 0.8rem;
      }
      
      .team-logo {
        width: 20px;
        height: 20px;
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
  <a href="arbitres.php">🧑 Arbitres</a>
  <a href="equipes.php">🥇Équipes</a>
  <a href="saisons.php">📅 Saisons</a>
  <a href="statistiques.php">📊 Statistiques</a>
  <a href="classement.php">🎯 Classements</a>
  <a href="archives.php">📁 Archives</a>
  <a href="logout.php">🚪 Déconnexion</a>
</div>

<div class="container">
  <h2>Classement Ligue 1 <?php echo date('Y'); ?>-<?php echo date('Y')+1; ?></h2>
  
  <div class="season-selector">
    <div class="season-tab active" onclick="showSeason('current')">Actuelle</div>
    <div class="season-tab" onclick="showSeason('previous')">Précédente</div>
  </div>
  
  <!-- Classement actuel -->
  <div id="current" class="standings-card">
    <div class="standings-header">
      <h3 class="standings-title">Classement en cours</h3>
      <div class="standings-update">Mis à jour: <?php echo date('d/m/Y H:i'); ?></div>
    </div>
    
    <?php if (!empty($standings)): ?>
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
            <th>Form</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($standings as $team): ?>
            <?php 
              $rowClass = '';
              if ($team['rank'] <= 2) {
                $rowClass = 'promotion'; // Ligue des Champions
              } elseif ($team['rank'] <= 4) {
                $rowClass = 'europa'; // Ligue Europa
              } elseif ($team['rank'] == 5) {
                $rowClass = 'conference'; // Conference League
              } elseif ($team['rank'] >= 18) {
                $rowClass = 'relegation'; // Relégation
              }
            ?>
            <tr class="<?php echo $rowClass; ?>">
              <td class="pos"><?php echo $team['rank']; ?></td>
              <td class="team-cell">
                <img src="<?php echo $team['team']['logo']; ?>" alt="<?php echo $team['team']['name']; ?>" class="team-logo">
                <span><?php echo $team['team']['name']; ?></span>
              </td>
              <td><strong><?php echo $team['points']; ?></strong></td>
              <td><?php echo $team['all']['played']; ?></td>
              <td><?php echo $team['all']['win']; ?></td>
              <td><?php echo $team['all']['draw']; ?></td>
              <td><?php echo $team['all']['lose']; ?></td>
              <td><?php echo $team['all']['goals']['for']; ?></td>
              <td><?php echo $team['all']['goals']['against']; ?></td>
              <td><?php echo $team['goalsDiff']; ?></td>
              <td>
                <?php 
                  if (isset($team['form'])) {
                    $form = substr($team['form'], 0, 5); // Prend les 5 derniers matchs
                    $formArray = str_split($form);
                    foreach ($formArray as $result) {
                      $class = '';
                      if ($result == 'W') $class = 'win';
                      elseif ($result == 'D') $class = 'draw';
                      elseif ($result == 'L') $class = 'lose';
                      echo "<span class='form-bubble $class'>$result</span>";
                    }
                  }
                ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p>Aucune donnée de classement disponible pour le moment.</p>
    <?php endif; ?>
  </div>
  
  <!-- Classement précédent -->
  <div id="previous" class="standings-card" style="display: none;">
    <div class="standings-header">
      <h3 class="standings-title">Classement <?php echo date('Y')-1; ?>-<?php echo date('Y'); ?></h3>
      <div class="standings-update">Saison terminée</div>
    </div>
    
    <?php if (!empty($previousStandings)): ?>
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
          <?php foreach ($previousStandings as $team): ?>
            <?php 
              $rowClass = '';
              if ($team['rank'] <= 2) {
                $rowClass = 'promotion'; // Ligue des Champions
              } elseif ($team['rank'] <= 4) {
                $rowClass = 'europa'; // Ligue Europa
              } elseif ($team['rank'] == 5) {
                $rowClass = 'conference'; // Conference League
              } elseif ($team['rank'] >= 18) {
                $rowClass = 'relegation'; // Relégation
              }
            ?>
            <tr class="<?php echo $rowClass; ?>">
              <td class="pos"><?php echo $team['rank']; ?></td>
              <td class="team-cell">
                <img src="<?php echo $team['team']['logo']; ?>" alt="<?php echo $team['team']['name']; ?>" class="team-logo">
                <span><?php echo $team['team']['name']; ?></span>
              </td>
              <td><strong><?php echo $team['points']; ?></strong></td>
              <td><?php echo $team['all']['played']; ?></td>
              <td><?php echo $team['all']['win']; ?></td>
              <td><?php echo $team['all']['draw']; ?></td>
              <td><?php echo $team['all']['lose']; ?></td>
              <td><?php echo $team['all']['goals']['for']; ?></td>
              <td><?php echo $team['all']['goals']['against']; ?></td>
              <td><?php echo $team['goalsDiff']; ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    <?php else: ?>
      <p>Aucune donnée de classement disponible pour la saison précédente.</p>
    <?php endif; ?>
  </div>
</div>

<div class="footer">Merci d'utiliser Scoreflix ⚽</div>

<script>
  function toggleMenu() {
    document.getElementById("sidebar").classList.toggle("open");
  }
  
  function showSeason(seasonId) {
    // Désactiver tous les onglets
    document.querySelectorAll('.season-tab').forEach(tab => {
      tab.classList.remove('active');
    });
    
    // Activer l'onglet sélectionné
    document.querySelector(`.season-tab[onclick="showSeason('${seasonId}')"]`).classList.add('active');
    
    // Gérer l'affichage des contenus
    if (seasonId === 'current') {
      document.getElementById('current').style.display = 'block';
      document.getElementById('previous').style.display = 'none';
    } else {
      document.getElementById('current').style.display = 'none';
      document.getElementById('previous').style.display = 'block';
    }
  }
</script>
</body>
</html>