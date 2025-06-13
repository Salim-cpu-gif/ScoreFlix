<?php
// archive.php - Page d'archives des matchs

include 'db_connect.php'; // Inclure le fichier de configuration pour la base de données

    
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCOREFLIX - Archives des matchs</title>
    <style>
        :root {
            --primary-color: #6B0000;
            --primary-light: #ff4444;
            --bg-color: #111;
            --card-color: #222;
            --text-color: #eee;
            --text-secondary: #aaa;
        }
        
        body {
            background: var(--bg-color);
            color: var(--text-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background: var(--primary-color);
            padding: 15px 30px;
            box-shadow: 0 0 15px #6B0000aa;
        }
        
        .logo {
            font-size: 2rem;
            font-weight: 900;
            color: var(--text-color);
            text-decoration: none;
        }
        
        .logo span {
            color: #440000;
        }
        
        h1 {
            color: var(--primary-light);
            text-align: center;
            margin: 30px 0;
        }
        
        .saison-selector {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 10px;
        }
        
        .saison-btn {
            background: var(--card-color);
            color: var(--text-color);
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .saison-btn:hover {
            background: var(--primary-color);
        }
        
        .saison-btn.active {
            background: var(--primary-color);
            font-weight: bold;
        }
        
        .matchs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 20px;
        }
        
        .match-card {
            background: var(--card-color);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            transition: transform 0.3s;
        }
        
        .match-card:hover {
            transform: translateY(-5px);
        }
        
        .match-date {
            color: var(--text-secondary);
            font-size: 0.9rem;
            margin-bottom: 10px;
        }
        
        .match-teams {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 15px 0;
        }
        
        .team {
            text-align: center;
            flex: 1;
        }
        
        .team-name {
            font-weight: bold;
            margin-bottom: 5px;
        }
        
        .vs {
            font-size: 1.2rem;
            font-weight: bold;
            margin: 0 15px;
        }
        
        .score {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-light);
        }
        
        .match-info {
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #333;
            font-size: 0.9rem;
            color: var(--text-secondary);
        }
        
        .no-matchs {
            text-align: center;
            grid-column: 1 / -1;
            color: var(--text-secondary);
            padding: 40px 0;
        }
        
        @media (max-width: 768px) {
            .matchs-grid {
                grid-template-columns: 1fr;
            }
            
            .saison-selector {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.html" class="logo"><span>S</span>COREFLIX⚽️</a>
    </header>
    
    <div class="container">
        <h1>Archives des matchs</h1>
        
        <!-- Sélecteur de saison -->
        <div class="saison-selector" id="seasonSelector">
            <!-- Les boutons seront générés par JavaScript -->
        </div>
        
        <!-- Liste des matchs -->
        <div class="matchs-grid" id="matchesGrid">
            <!-- Les matchs seront chargés par JavaScript -->
        </div>
    </div>

    <script>
        // Données simulées
        const data = {
            saisons: [
                { id: 1, saisonchamp: "2022-2023" },
                { id: 2, saisonchamp: "2021-2022" },
                { id: 3, saisonchamp: "2020-2021" }
            ],
            matchs: [
                {
                    id: 1,
                    datematch: "2023-05-27",
                    equipe_dom: "Paris Saint-Germain",
                    equipe_ext: "Olympique de Marseille",
                    score_dom: 3,
                    score_ext: 1,
                    nomstade: "Parc des Princes",
                    nomarbitre: "Clément Turpin",
                    idSaison: 1
                },
                {
                    id: 2,
                    datematch: "2023-04-15",
                    equipe_dom: "Olympique Lyonnais",
                    equipe_ext: "AS Monaco",
                    score_dom: 2,
                    score_ext: 2,
                    nomstade: "Groupama Stadium",
                    nomarbitre: "François Letexier",
                    idSaison: 1
                },
                {
                    id: 3,
                    datematch: "2022-11-06",
                    equipe_dom: "Olympique de Marseille",
                    equipe_ext: "Paris Saint-Germain",
                    score_dom: 0,
                    score_ext: 1,
                    nomstade: "Orange Vélodrome",
                    nomarbitre: "Benoît Bastien",
                    idSaison: 2
                }
            ]
        };

        // Fonction pour formater la date en français
        function formatDateFr(dateStr) {
            const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
            const date = new Date(dateStr);
            return date.toLocaleDateString('fr-FR', options);
        }

        // Afficher les boutons de saison
        function renderSeasonButtons() {
            const seasonSelector = document.getElementById('seasonSelector');
            seasonSelector.innerHTML = '';
            
            data.saisons.forEach(saison => {
                const button = document.createElement('button');
                button.className = 'saison-btn';
                button.textContent = saison.saisonchamp;
                button.onclick = () => loadMatches(saison.id);
                
                // Sélectionner la première saison par défaut
                if (saison.id === 1) {
                    button.classList.add('active');
                }
                
                seasonSelector.appendChild(button);
            });
        }

        // Charger les matchs d'une saison
        function loadMatches(seasonId) {
            const matchesGrid = document.getElementById('matchesGrid');
            const filteredMatches = data.matchs.filter(match => match.idSaison === seasonId);
            
            // Mettre à jour l'état actif des boutons
            document.querySelectorAll('.saison-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            event.target.classList.add('active');
            
            // Afficher les matchs
            if (filteredMatches.length === 0) {
                matchesGrid.innerHTML = `
                    <div class="no-matchs">
                        Aucun match archivé pour cette saison.
                    </div>
                `;
            } else {
                matchesGrid.innerHTML = '';
                filteredMatches.forEach(match => {
                    const matchCard = document.createElement('div');
                    matchCard.className = 'match-card';
                    matchCard.innerHTML = `
                        <div class="match-date">
                            ${formatDateFr(match.datematch)} - ${match.nomstade}
                        </div>
                        
                        <div class="match-teams">
                            <div class="team">
                                <div class="team-name">${match.equipe_dom}</div>
                            </div>
                            
                            <div class="vs">vs</div>
                            
                            <div class="team">
                                <div class="team-name">${match.equipe_ext}</div>
                            </div>
                        </div>
                        
                        <div class="score">
                            ${match.score_dom} - ${match.score_ext}
                        </div>
                        
                        <div class="match-info">
                            Arbitre : ${match.nomarbitre}
                        </div>
                    `;
                    matchesGrid.appendChild(matchCard);
                });
            }
        }

        // Initialisation
        document.addEventListener('DOMContentLoaded', () => {
            renderSeasonButtons();
            loadMatches(1); // Charger les matchs de la première saison par défaut
        });
    </script>
</body>
</html>