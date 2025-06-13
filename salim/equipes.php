<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Équipes Ligue 1 - Effectifs Complets</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        
        h1 {
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        
        .equipe {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-bottom: 40px;
            overflow: hidden;
        }
        
        .equipe-header {
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        /* Couleurs spécifiques pour chaque équipe */
        .psg { background-color: #004170; }
        .ol { background-color: #a50044; }
        .om { background-color: #0a2e7a; }
        .losc { background-color: #e2001a; }
        .nantes { background-color: #009a44; }
        .rennes { background-color: #e2001a; }
        .nice { background-color: #e2001a; }
        .monaco { background-color: #e2001a; }
        .mhsc { background-color: #6c2c91; }
        .lens { background-color: #e2001a; }
        
        .equipe-nom {
            font-size: 1.5em;
            font-weight: bold;
        }
        
        .equipe-info {
            font-size: 0.9em;
            opacity: 0.9;
        }
        
        .joueurs-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 15px;
            padding: 20px;
        }
        
        .joueur {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            background-color: #f9f9f9;
        }
        
        .joueur-nom {
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 5px;
            font-size: 1.1em;
        }
        
        .joueur-info {
            display: flex;
            justify-content: space-between;
            font-size: 0.9em;
            color: #7f8c8d;
            margin-bottom: 10px;
        }
        
        .joueur-stats {
            background-color: #ecf0f1;
            padding: 10px;
            border-radius: 4px;
            margin-top: 10px;
        }
        
        .stat-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        
        .stat-label {
            font-weight: 600;
        }
        
        .poste-title {
            grid-column: 1 / -1;
            font-size: 1.2em;
            color: #3498db;
            margin: 15px 0 5px 0;
            padding-bottom: 5px;
            border-bottom: 1px solid #3498db;
        }
        
        @media (max-width: 768px) {
            .joueurs-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <h1>Équipes Ligue 1 - Effectifs Complets 2023/2024</h1>
    
    <!-- PSG -->
    <div class="equipe">
        <div class="equipe-header psg">
            <div class="equipe-nom">Paris Saint-Germain</div>
            <div class="equipe-info">Ville: Paris | Entraîneur: Christophe Galtier</div>
        </div>
        
        <div class="joueurs-container">
            <div class="poste-title">Gardiens</div>
            
            <!-- Gardien 1 -->
            <div class="joueur">
                <div class="joueur-nom">Lucas Lefevre</div>
                <div class="joueur-info">
                    <span>Âge: 19 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>12</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Arrêts:</span>
                        <span>34</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Clean sheets:</span>
                        <span>5</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.8/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Gardien 2 -->
            <div class="joueur">
                <div class="joueur-nom">Tom Lambert</div>
                <div class="joueur-info">
                    <span>Âge: 21 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>8</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Arrêts:</span>
                        <span>22</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Clean sheets:</span>
                        <span>3</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.5/10</span>
                    </div>
                </div>
            </div>
            
            <div class="poste-title">Défenseurs</div>
            
            <!-- Défenseur 1 -->
            <div class="joueur">
                <div class="joueur-nom">Arthur Noel</div>
                <div class="joueur-info">
                    <span>Âge: 23 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>24</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>38</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>42</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.1/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Défenseur 2 -->
            <div class="joueur">
                <div class="joueur-nom">Simon Tom</div>
                <div class="joueur-info">
                    <span>Âge: 25 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>22</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>35</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>39</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.9/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Défenseur 3 -->
            <div class="joueur">
                <div class="joueur-nom">Moulin Lucas</div>
                <div class="joueur-info">
                    <span>Âge: 27 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>26</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>41</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>37</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.0/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Défenseur 4 -->
            <div class="joueur">
                <div class="joueur-nom">Noel Maxime</div>
                <div class="joueur-info">
                    <span>Âge: 28 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>20</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>32</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>35</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.8/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Défenseur 5 -->
            <div class="joueur">
                <div class="joueur-nom">Lefevre Louis</div>
                <div class="joueur-info">
                    <span>Âge: 24 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>18</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>29</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>31</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.7/10</span>
                    </div>
                </div>
            </div>
            
            <div class="poste-title">Milieux</div>
            
            <!-- Milieu 1 -->
            <div class="joueur">
                <div class="joueur-nom">Leo Simon</div>
                <div class="joueur-info">
                    <span>Âge: 20 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>25</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>5</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>8</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.2/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Milieu 2 -->
            <div class="joueur">
                <div class="joueur-nom">Louis Moulin</div>
                <div class="joueur-info">
                    <span>Âge: 22 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>23</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>4</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>6</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.0/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Milieu 3 -->
            <div class="joueur">
                <div class="joueur-nom">Lambert Leo</div>
                <div class="joueur-info">
                    <span>Âge: 26 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>21</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>3</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>7</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.9/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Milieu 4 -->
            <div class="joueur">
                <div class="joueur-nom">Simon Leo</div>
                <div class="joueur-info">
                    <span>Âge: 30 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>28</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>6</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>9</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.3/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Milieu 5 -->
            <div class="joueur">
                <div class="joueur-nom">Lambert Tom</div>
                <div class="joueur-info">
                    <span>Âge: 31 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>19</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>2</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>5</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.8/10</span>
                    </div>
                </div>
            </div>
            
            <div class="poste-title">Attaquants</div>
            
            <!-- Attaquant 1 -->
            <div class="joueur">
                <div class="joueur-nom">Moulin Louis</div>
                <div class="joueur-info">
                    <span>Âge: 32 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>27</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>15</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>7</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.6/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 2 -->
            <div class="joueur">
                <div class="joueur-nom">Noel Arthur</div>
                <div class="joueur-info">
                    <span>Âge: 18 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>14</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>8</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>4</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.1/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 3 -->
            <div class="joueur">
                <div class="joueur-nom">Lefevre Louis</div>
                <div class="joueur-info">
                    <span>Âge: 19 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>16</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>7</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>3</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.9/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 4 -->
            <div class="joueur">
                <div class="joueur-nom">Simon Tom</div>
                <div class="joueur-info">
                    <span>Âge: 20 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>12</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>5</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>2</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.7/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 5 -->
            <div class="joueur">
                <div class="joueur-nom">Lambert Leo</div>
                <div class="joueur-info">
                    <span>Âge: 21 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>10</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>4</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>1</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.5/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 6 -->
            <div class="joueur">
                <div class="joueur-nom">Moulin Lucas</div>
                <div class="joueur-info">
                    <span>Âge: 22 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>9</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>3</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>2</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.4/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 7 -->
            <div class="joueur">
                <div class="joueur-nom">Noel Maxime</div>
                <div class="joueur-info">
                    <span>Âge: 23 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>8</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>2</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>1</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.3/10</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Olympique Lyonnais -->
    <div class="equipe">
        <div class="equipe-header ol">
            <div class="equipe-nom">Olympique Lyonnais</div>
            <div class="equipe-info">Ville: Lyon | Entraîneur: Laurent Blanc</div>
        </div>
        
        <div class="joueurs-container">
            <div class="poste-title">Gardiens</div>
            
            <!-- Gardien 1 -->
            <div class="joueur">
                <div class="joueur-nom">Lucas Lefevre</div>
                <div class="joueur-info">
                    <span>Âge: 24 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>20</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Arrêts:</span>
                        <span>58</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Clean sheets:</span>
                        <span>7</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.0/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Gardien 2 -->
            <div class="joueur">
                <div class="joueur-nom">Tom Simon</div>
                <div class="joueur-info">
                    <span>Âge: 25 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>12</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Arrêts:</span>
                        <span>34</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Clean sheets:</span>
                        <span>4</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.7/10</span>
                    </div>
                </div>
            </div>
            
            <div class="poste-title">Défenseurs</div>
            
            <!-- Défenseur 1 -->
            <div class="joueur">
                <div class="joueur-nom">Leo Lambert</div>
                <div class="joueur-info">
                    <span>Âge: 26 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>23</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>41</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>38</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.2/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Défenseur 2 -->
            <div class="joueur">
                <div class="joueur-nom">Louis Moulin</div>
                <div class="joueur-info">
                    <span>Âge: 27 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>22</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>37</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>42</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.1/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Défenseur 3 -->
            <div class="joueur">
                <div class="joueur-nom">Maxime Noel</div>
                <div class="joueur-info">
                    <span>Âge: 28 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>21</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>39</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>35</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.0/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Défenseur 4 -->
            <div class="joueur">
                <div class="joueur-nom">Lefevre Lucas</div>
                <div class="joueur-info">
                    <span>Âge: 29 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>19</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>33</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>37</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.9/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Défenseur 5 -->
            <div class="joueur">
                <div class="joueur-nom">Simon Leo</div>
                <div class="joueur-info">
                    <span>Âge: 30 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>18</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>31</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>34</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.8/10</span>
                    </div>
                </div>
            </div>
            
            <div class="poste-title">Milieux</div>
            
            <!-- Milieu 1 -->
            <div class="joueur">
                <div class="joueur-nom">Lambert Tom</div>
                <div class="joueur-info">
                    <span>Âge: 31 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>26</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>6</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>9</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.3/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Milieu 2 -->
            <div class="joueur">
                <div class="joueur-nom">Moulin Louis</div>
                <div class="joueur-info">
                    <span>Âge: 32 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>24</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>5</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>7</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.1/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Milieu 3 -->
            <div class="joueur">
                <div class="joueur-nom">Noel Arthur</div>
                <div class="joueur-info">
                    <span>Âge: 18 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>22</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>4</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>6</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.0/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Milieu 4 -->
            <div class="joueur">
                <div class="joueur-nom">Lefevre Louis</div>
                <div class="joueur-info">
                    <span>Âge: 19 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>20</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>3</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>5</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.9/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Milieu 5 -->
            <div class="joueur">
                <div class="joueur-nom">Simon Tom</div>
                <div class="joueur-info">
                    <span>Âge: 20 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>18</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>2</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>4</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.8/10</span>
                    </div>
                </div>
            </div>
            
            <div class="poste-title">Attaquants</div>
            
            <!-- Attaquant 1 -->
            <div class="joueur">
                <div class="joueur-nom">Lambert Leo</div>
                <div class="joueur-info">
                    <span>Âge: 21 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>28</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>14</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>8</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.5/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 2 -->
            <div class="joueur">
                <div class="joueur-nom">Moulin Lucas</div>
                <div class="joueur-info">
                    <span>Âge: 22 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>25</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>12</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>6</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.3/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 3 -->
            <div class="joueur">
                <div class="joueur-nom">Noel Maxime</div>
                <div class="joueur-info">
                    <span>Âge: 23 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>22</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>10</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>5</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.1/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 4 -->
            <div class="joueur">
                <div class="joueur-nom">Lefevre Lucas</div>
                <div class="joueur-info">
                    <span>Âge: 24 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>20</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>8</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>4</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.9/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 5 -->
            <div class="joueur">
                <div class="joueur-nom">Simon Leo</div>
                <div class="joueur-info">
                    <span>Âge: 25 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>18</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>7</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>3</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.8/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 6 -->
            <div class="joueur">
                <div class="joueur-nom">Lambert Tom</div>
                <div class="joueur-info">
                    <span>Âge: 26 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>16</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>6</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>2</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.7/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 7 -->
            <div class="joueur">
                <div class="joueur-nom">Moulin Louis</div>
                <div class="joueur-info">
                    <span>Âge: 27 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>14</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>5</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>1</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.6/10</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Olympique de Marseille -->
    <div class="equipe">
        <div class="equipe-header om">
            <div class="equipe-nom">Olympique de Marseille</div>
            <div class="equipe-info">Ville: Marseille | Entraîneur: Igor Tudor</div>
        </div>
        
        <div class="joueurs-container">
            <div class="poste-title">Gardiens</div>
            
            <!-- Gardien 1 -->
            <div class="joueur">
                <div class="joueur-nom">Noel Arthur</div>
                <div class="joueur-info">
                    <span>Âge: 28 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>26</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Arrêts:</span>
                        <span>72</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Clean sheets:</span>
                        <span>9</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.2/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Gardien 2 -->
            <div class="joueur">
                <div class="joueur-nom">Lefevre Louis</div>
                <div class="joueur-info">
                    <span>Âge: 29 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>14</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Arrêts:</span>
                        <span>41</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Clean sheets:</span>
                        <span>5</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.9/10</span>
                    </div>
                </div>
            </div>
            
            <div class="poste-title">Défenseurs</div>
            
            <!-- Défenseur 1 -->
            <div class="joueur">
                <div class="joueur-nom">Simon Tom</div>
                <div class="joueur-info">
                    <span>Âge: 30 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>25</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>43</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>39</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.3/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Défenseur 2 -->
            <div class="joueur">
                <div class="joueur-nom">Lambert Leo</div>
                <div class="joueur-info">
                    <span>Âge: 31 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>23</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>40</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>44</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.2/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Défenseur 3 -->
            <div class="joueur">
                <div class="joueur-nom">Moulin Lucas</div>
                <div class="joueur-info">
                    <span>Âge: 32 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>22</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>38</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>36</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.1/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Défenseur 4 -->
            <div class="joueur">
                <div class="joueur-nom">Noel Maxime</div>
                <div class="joueur-info">
                    <span>Âge: 18 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>20</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>35</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>38</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.0/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Défenseur 5 -->
            <div class="joueur">
                <div class="joueur-nom">Lefevre Lucas</div>
                <div class="joueur-info">
                    <span>Âge: 19 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>18</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>32</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>35</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.9/10</span>
                    </div>
                </div>
            </div>
            
            <div class="poste-title">Milieux</div>
            
            <!-- Milieu 1 -->
            <div class="joueur">
                <div class="joueur-nom">Simon Leo</div>
                <div class="joueur-info">
                    <span>Âge: 20 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>27</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>7</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>10</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.4/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Milieu 2 -->
            <div class="joueur">
                <div class="joueur-nom">Lambert Tom</div>
                <div class="joueur-info">
                    <span>Âge: 21 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>25</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>6</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>8</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.2/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Milieu 3 -->
            <div class="joueur">
                <div class="joueur-nom">Moulin Louis</div>
                <div class="joueur-info">
                    <span>Âge: 22 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>23</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>5</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>7</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.1/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Milieu 4 -->
            <div class="joueur">
                <div class="joueur-nom">Noel Arthur</div>
                <div class="joueur-info">
                    <span>Âge: 23 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>21</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>4</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>6</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.0/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Milieu 5 -->
            <div class="joueur">
                <div class="joueur-nom">Lefevre Louis</div>
                <div class="joueur-info">
                    <span>Âge: 24 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>19</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>3</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>5</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.9/10</span>
                    </div>
                </div>
            </div>
            
            <div class="poste-title">Attaquants</div>
            
            <!-- Attaquant 1 -->
            <div class="joueur">
                <div class="joueur-nom">Simon Tom</div>
                <div class="joueur-info">
                    <span>Âge: 25 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>29</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>16</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>9</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.6/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 2 -->
            <div class="joueur">
                <div class="joueur-nom">Lambert Leo</div>
                <div class="joueur-info">
                    <span>Âge: 26 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>26</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>13</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>7</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.4/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 3 -->
            <div class="joueur">
                <div class="joueur-nom">Moulin Lucas</div>
                <div class="joueur-info">
                    <span>Âge: 27 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>24</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>11</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>6</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.2/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 4 -->
            <div class="joueur">
                <div class="joueur-nom">Noel Maxime</div>
                <div class="joueur-info">
                    <span>Âge: 28 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>22</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>9</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>5</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.0/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 5 -->
            <div class="joueur">
                <div class="joueur-nom">Lefevre Lucas</div>
                <div class="joueur-info">
                    <span>Âge: 29 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>20</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>8</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>4</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.9/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 6 -->
            <div class="joueur">
                <div class="joueur-nom">Simon Leo</div>
                <div class="joueur-info">
                    <span>Âge: 30 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>18</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>7</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>3</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.8/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Attaquant 7 -->
            <div class="joueur">
                <div class="joueur-nom">Lambert Tom</div>
                <div class="joueur-info">
                    <span>Âge: 31 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>16</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Buts:</span>
                        <span>6</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Passes décisives:</span>
                        <span>2</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>6.7/10</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOSC Lille -->
    <div class="equipe">
        <div class="equipe-header losc">
            <div class="equipe-nom">LOSC Lille</div>
            <div class="equipe-info">Ville: Lille | Entraîneur: Paulo Fonseca</div>
        </div>
        
        <div class="joueurs-container">
            <div class="poste-title">Gardiens</div>
            
            <!-- Gardien 1 -->
            <div class="joueur">
                <div class="joueur-nom">Moulin Louis</div>
                <div class="joueur-info">
                    <span>Âge: 32 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>28</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Arrêts:</span>
                        <span>76</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Clean sheets:</span>
                        <span>10</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.3/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Gardien 2 -->
            <div class="joueur">
                <div class="joueur-nom">Noel Arthur</div>
                <div class="joueur-info">
                    <span>Âge: 18 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>16</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Arrêts:</span>
                        <span>45</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Clean sheets:</span>
                        <span>6</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.0/10</span>
                    </div>
                </div>
            </div>
            
            <div class="poste-title">Défenseurs</div>
            
            <!-- Défenseur 1 -->
            <div class="joueur">
                <div class="joueur-nom">Lefevre Louis</div>
                <div class="joueur-info">
                    <span>Âge: 19 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>26</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>45</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>41</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.3/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Défenseur 2 -->
            <div class="joueur">
                <div class="joueur-nom">Simon Tom</div>
                <div class="joueur-info">
                    <span>Âge: 20 ans</span>
                    <span>Nationalité: Française</span>
                    <span>Pied: Gauche</span>
                </div>
                <div class="joueur-stats">
                    <div class="stat-row">
                        <span class="stat-label">Matchs joués:</span>
                        <span>24</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Tacles réussis:</span>
                        <span>42</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Interceptions:</span>
                        <span>44</span>
                    </div>
                    <div class="stat-row">
                        <span class="stat-label">Note moyenne:</span>
                        <span>7.2/10</span>
                    </div>
                </div>
            </div>
            
            <!-- Défenseur 3 -->
            <div class="joueur">
                <div class="joueur-nom">Lambert Leo</div>
                <div class="joueur-info">
                    <span>Âge: 21