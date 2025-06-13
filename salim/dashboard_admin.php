<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SCOREFLIX - Admin Dashboard</title>
<style>
  :root {
    --primary-color: #6B0000;
    --primary-light: #ff4444;
    --bg-color: #111;
    --card-color: #222;
    --text-color: #eee;
    --text-secondary: #aaa;
  }
  
  /* Styles pour la page de connexion */
  .login-page {
    background: var(--bg-color);
    color: var(--text-color);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .login-container {
    background: var(--card-color);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0,0,0,0.5);
    width: 100%;
    max-width: 400px;
    text-align: center;
  }
  
  .logo {
    font-size: 2.5rem;
    font-weight: 900;
    color: var(--text-color);
    margin-bottom: 20px;
    display: block;
  }
  
  .logo span {
    color: #440000;
  }
  
  .login-title {
    color: var(--primary-light);
    margin-bottom: 30px;
  }
  
  .form-group {
    margin-bottom: 20px;
    text-align: left;
  }
  
  .form-group label {
    display: block;
    margin-bottom: 8px;
    color: var(--text-color);
  }
  
  .form-control {
    width: 100%;
    padding: 12px;
    border-radius: 5px;
    border: 1px solid #444;
    background: var(--bg-color);
    color: var(--text-color);
    font-size: 1rem;
    box-sizing: border-box;
  }
  
  .submit-btn {
    background: var(--primary-color);
    color: var(--text-color);
    border: none;
    padding: 12px;
    width: 100%;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1rem;
    transition: background 0.3s;
    margin-top: 10px;
  }
  
  .submit-btn:hover {
    background: var(--primary-light);
  }
  
  .error-message {
    color: #ff4444;
    margin-top: 15px;
    display: none;
  }
  
  /* Styles pour le dashboard */
  body.dashboard {
    background: var(--bg-color) url('data:image/svg+xml;utf8,<svg width="40" height="40" xmlns="http://www.w3.org/2000/svg"><circle cx="10" cy="10" r="2" fill="%236B0000" fill-opacity="0.1"/><circle cx="30" cy="30" r="2" fill="%236B0000" fill-opacity="0.1"/></svg>') repeat;
    color: var(--text-color);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
  }
  
  header {
    background: var(--primary-color);
    padding: 15px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 0 15px #6B0000aa;
  }
  
  .container {
    max-width: 1200px;
    margin: 30px auto;
    padding: 0 20px;
  }
  
  .search-bar {
    margin-bottom: 30px;
    display: flex;
    gap: 10px;
  }
  
  .search-input {
    flex: 1;
    padding: 10px 15px;
    border-radius: 20px;
    border: 2px solid var(--primary-color);
    background: var(--bg-color);
    color: var(--text-color);
    font-size: 1rem;
  }
  
  .search-btn {
    background: var(--primary-color);
    color: var(--text-color);
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
    transition: background 0.3s;
  }
  
  .search-btn:hover {
    background: var(--primary-light);
  }
  
  .dashboard-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
  }
  
  .card {
    background: var(--card-color);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
  }
  
  .card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 15px;
    padding-bottom: 10px;
    border-bottom: 1px solid var(--primary-color);
  }
  
  .card-title {
    margin: 0;
    color: var(--primary-light);
  }
  
  .add-btn {
    background: var(--primary-color);
    color: var(--text-color);
    border: none;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
  }
  
  .add-btn:hover {
    background: var(--primary-light);
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
  }
  
  th, td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #333;
  }
  
  th {
    background: var(--primary-color);
    color: var(--text-color);
  }
  
  tr:hover {
    background: #333;
  }
  
  .action-btn {
    background: none;
    border: none;
    color: var(--text-secondary);
    cursor: pointer;
    margin: 0 5px;
    transition: color 0.3s;
  }
  
  .edit-btn:hover {
    color: #4CAF50;
  }
  
  .delete-btn:hover {
    color: #f44336;
  }
  
  /* Modal styles */
  .modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.7);
    z-index: 1000;
    justify-content: center;
    align-items: center;
  }
  
  .modal-content {
    background: var(--card-color);
    padding: 20px;
    border-radius: 10px;
    width: 80%;
    max-width: 500px;
    max-height: 80vh;
    overflow-y: auto;
  }
  
  .modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
  }
  
  .close-btn {
    background: none;
    border: none;
    color: var(--text-secondary);
    font-size: 1.5rem;
    cursor: pointer;
  }
  
  .form-group-dashboard {
    margin-bottom: 15px;
  }
  
  .form-group-dashboard label {
    display: block;
    margin-bottom: 5px;
    color: var(--text-color);
  }
  
  .form-control-dashboard {
    width: 100%;
    padding: 8px 10px;
    border-radius: 5px;
    border: 1px solid #444;
    background: var(--bg-color);
    color: var(--text-color);
  }
  
  /* Responsive */
  @media (max-width: 768px) {
    .dashboard-grid {
      grid-template-columns: 1fr;
    }
  }
</style>
</head>
<body class="login-page" id="bodyElement">
  <!-- Section de connexion (visible par défaut) -->
  <div class="login-container" id="loginContainer">
    <span class="logo"><span>S</span>COREFLIX⚽️</span>
    <h2 class="login-title">Connexion Administrateur</h2>
    
    <form id="loginForm">
      <div class="form-group">
        <label for="password">Mot de passe système:</label>
        <input type="password" id="password" class="form-control" required>
      </div>
      
      <div class="form-group">
        <label for="adminCode">Code Admin personnel:</label>
        <input type="text" id="adminCode" class="form-control" required>
      </div>
      
      <button type="submit" class="submit-btn">Se connecter</button>
      
      <div id="errorMessage" class="error-message">
        Identifiants incorrects. Veuillez réessayer.
      </div>
    </form>
  </div>

  <!-- Section Dashboard (cachée par défaut) -->
  <div id="adminDashboard" style="display: none;">
    <header>
      <a href="#" class="logo"><span>S</span>COREFLIX</a>
    </header>

    <div class="container">
      <div class="search-bar">
        <input type="text" class="search-input" placeholder="Rechercher équipes, joueurs, matches..." id="searchInput">
        <button class="search-btn" onclick="performSearch()">Rechercher</button>
      </div>

      <div id="searchResults" style="display: none;">
        <div class="card">
          <h3>Résultats de recherche</h3>
          <table>
            <thead>
              <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody id="searchResultsBody">
              <!-- Les résultats de recherche seront ajoutés ici dynamiquement -->
            </tbody>
          </table>
        </div>
      </div>

      <div class="dashboard-grid">
        <!-- Carte Équipes -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Équipes</h3>
            <button class="add-btn" onclick="showAddForm('equipe')">+ Ajouter</button>
          </div>
          <div class="card-body">
            <table>
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Ville</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id="equipesTable">
                <tr>
                  <td>Paris Saint-Germain</td>
                  <td>Paris</td>
                  <td>
                    <button class="action-btn edit-btn" onclick="editItem('equipe', 1)">✏️</button>
                    <button class="action-btn delete-btn" onclick="confirmDelete('equipe', 1)">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td>Olympique de Marseille</td>
                  <td>Marseille</td>
                  <td>
                    <button class="action-btn edit-btn" onclick="editItem('equipe', 2)">✏️</button>
                    <button class="action-btn delete-btn" onclick="confirmDelete('equipe', 2)">🗑️</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Carte Joueurs -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Joueurs</h3>
            <button class="add-btn" onclick="showAddForm('joueur')">+ Ajouter</button>
          </div>
          <div class="card-body">
            <table>
              <thead>
                <tr>
                  <th>Nom</th>
                  <th>Équipe</th>
                  <th>Poste</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id="joueursTable">
                <tr>
                  <td>Kylian Mbappé</td>
                  <td>Paris Saint-Germain</td>
                  <td>Attaquant</td>
                  <td>
                    <button class="action-btn edit-btn" onclick="editItem('joueur', 1)">✏️</button>
                    <button class="action-btn delete-btn" onclick="confirmDelete('joueur', 1)">🗑️</button>
                  </td>
                </tr>
                <tr>
                  <td>Dimitri Payet</td>
                  <td>Olympique de Marseille</td>
                  <td>Milieu</td>
                  <td>
                    <button class="action-btn edit-btn" onclick="editItem('joueur', 2)">✏️</button>
                    <button class="action-btn delete-btn" onclick="confirmDelete('joueur', 2)">🗑️</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Carte Matchs -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Matchs</h3>
            <button class="add-btn" onclick="showAddForm('match')">+ Ajouter</button>
          </div>
          <div class="card-body">
            <table>
              <thead>
                <tr>
                  <th>Équipes</th>
                  <th>Date</th>
                  <th>Score</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id="matchsTable">
                <tr>
                  <td>Paris Saint-Germain vs Olympique de Marseille</td>
                  <td>25/04/2023</td>
                  <td>3 - 1</td>
                  <td>
                    <button class="action-btn edit-btn" onclick="editItem('match', 1)">✏️</button>
                    <button class="action-btn delete-btn" onclick="confirmDelete('match', 1)">🗑️</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Carte Commentaires -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Commentaires</h3>
          </div>
          <div class="card-body">
            <table>
              <thead>
                <tr>
                  <th>Auteur</th>
                  <th>Match</th>
                  <th>Date</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody id="commentairesTable">
                <tr>
                  <td>Jean Dupont</td>
                  <td>Paris Saint-Germain vs Olympique de Marseille</td>
                  <td>25/04/2023</td>
                  <td>
                    <button class="action-btn delete-btn" onclick="confirmDelete('commentaire', 1)">🗑️</button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Modals -->
    <div id="addModal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <h3 id="modalTitle">Ajouter</h3>
          <button class="close-btn" onclick="closeModal()">&times;</button>
        </div>
        <form id="addForm">
          <input type="hidden" name="table" id="formTable">
          <div id="formFields">
            <!-- Les champs seront générés dynamiquement -->
          </div>
          <button type="button" class="submit-btn" onclick="submitForm()">Enregistrer</button>
        </form>
      </div>
    </div>

    <div id="deleteModal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <h3>Confirmer la suppression</h3>
          <button class="close-btn" onclick="closeModal()">&times;</button>
        </div>
        <p>Êtes-vous sûr de vouloir supprimer cet élément ?</p>
        <div>
          <button class="submit-btn" onclick="confirmDeleteAction()">Confirmer</button>
          <button class="logout-btn" onclick="closeModal()">Annuler</button>
        </div>
      </div>
    </div>
  </div>

<script>
// Mot de passe et code admin (à changer pour la production)
const ADMIN_PASSWORD = "votre_mot_de_passe_secret"; // Mot de passe système
const ADMIN_CODE = "Admin_2025_Scoreflix"; // Code admin personnel

// Références aux éléments du DOM
const loginForm = document.getElementById('loginForm');
const passwordInput = document.getElementById('password');
const adminCodeInput = document.getElementById('adminCode');
const errorMessage = document.getElementById('errorMessage');
const adminDashboard = document.getElementById('adminDashboard');
const loginContainer = document.getElementById('loginContainer');
const bodyElement = document.getElementById('bodyElement');

// Variables globales pour le dashboard
let currentTable = '';
let currentId = 0;

// Données de démonstration
const demoData = {
  equipes: [
    { id: 1, nomequipe: 'Paris Saint-Germain', villeequipe: 'Paris', logo: '' },
    { id: 2, nomequipe: 'Olympique de Marseille', villeequipe: 'Marseille', logo: '' }
  ],
  joueurs: [
    { id: 1, nomjoueur: 'Mbappé', prenomjoueur: 'Kylian', nationalite: 'France', age: 24, idequipe: 1, poste: 'Attaquant', piedfort: 'Droit', sexejoueur: 'Homme' },
    { id: 2, nomjoueur: 'Payet', prenomjoueur: 'Dimitri', nationalite: 'France', age: 35, idequipe: 2, poste: 'Milieu', piedfort: 'Gauche', sexejoueur: 'Homme' }
  ],
  matchs: [
    { id: 1, datematch: '2023-04-25', idequipe_dom: 1, idequipe_ext: 2, score_dom: 3, score_ext: 1, statut: 'Terminé', idarbitre: 1, idstade: 1, idSaison: 1 }
  ],
  commentaires: [
    { id: 1, idusr: 1, idmatch: 1, texte: 'Super match!', datecomment: '2023-04-25' }
  ],
  arbitres: [
    { id: 1, nomarbitre: 'Turpin' }
  ],
  stades: [
    { id: 1, nomstade: 'Parc des Princes' }
  ],
  saisons: [
    { id: 1, saisonchamp: '2022-2023' }
  ]
};

// Vérifier l'authentification
function checkAuth() {
  const isAuthenticated = localStorage.getItem('adminAuthenticated') === 'true';
  
  if (isAuthenticated) {
    // Afficher le dashboard et masquer le formulaire de connexion
    bodyElement.classList.remove('login-page');
    bodyElement.classList.add('dashboard');
    loginContainer.style.display = 'none';
    adminDashboard.style.display = 'block';
    
    // Initialiser le dashboard
    initDashboard();
  }
}

// Initialiser le dashboard
function initDashboard() {
  updateTables();
  
  // Vérifier périodiquement l'authentification (toutes les 5 minutes)
  setInterval(() => {
    if (localStorage.getItem('adminAuthenticated') !== 'true') {
      logout();
    }
  }, 300000); // 5 minutes en millisecondes
}

// Gestion de la soumission du formulaire de connexion
loginForm.addEventListener('submit', function(e) {
  e.preventDefault();
  
  const password = passwordInput.value;
  const adminCode = adminCodeInput.value;
  
  if (password === ADMIN_PASSWORD && adminCode === ADMIN_CODE) {
    // Authentification réussie
    localStorage.setItem('adminAuthenticated', 'true');
    errorMessage.style.display = 'none';
    checkAuth();
  } else {
    // Authentification échouée
    errorMessage.style.display = 'block';
    passwordInput.value = '';
    adminCodeInput.value = '';
  }
});

// Fonction de déconnexion
function logout() {
  localStorage.removeItem('adminAuthenticated');
  bodyElement.classList.add('login-page');
  bodyElement.classList.remove('dashboard');
  loginContainer.style.display = 'block';
  adminDashboard.style.display = 'none';
  passwordInput.value = '';
  adminCodeInput.value = '';
}

// Fonctions de recherche
function performSearch() {
  const searchTerm = document.getElementById('searchInput').value.trim();
  if (searchTerm === '') return;
  
  const results = [];
  
  // Recherche dans les équipes
  demoData.equipes.forEach(equipe => {
    if (equipe.nomequipe.toLowerCase().includes(searchTerm.toLowerCase())) {
      results.push({
        id: equipe.id,
        nom: equipe.nomequipe,
        type: 'equipe'
      });
    }
  });
  
  // Recherche dans les joueurs
  demoData.joueurs.forEach(joueur => {
    const fullName = `${joueur.prenomjoueur} ${joueur.nomjoueur}`;
    if (joueur.nomjoueur.toLowerCase().includes(searchTerm.toLowerCase()) || 
        joueur.prenomjoueur.toLowerCase().includes(searchTerm.toLowerCase())) {
      results.push({
        id: joueur.id,
        nom: fullName,
        type: 'joueur'
      });
    }
  });
  
  // Recherche dans les matchs
  demoData.matchs.forEach(match => {
    const equipeDom = demoData.equipes.find(e => e.id === match.idequipe_dom);
    const equipeExt = demoData.equipes.find(e => e.id === match.idequipe_ext);
    const matchName = `${equipeDom.nomequipe} vs ${equipeExt.nomequipe}`;
    
    if (equipeDom.nomequipe.toLowerCase().includes(searchTerm.toLowerCase()) ||
        equipeExt.nomequipe.toLowerCase().includes(searchTerm.toLowerCase())) {
      results.push({
        id: match.id,
        nom: matchName,
        type: 'match'
      });
    }
  });
  
  // Afficher les résultats
  const resultsContainer = document.getElementById('searchResults');
  const resultsBody = document.getElementById('searchResultsBody');
  
  if (results.length > 0) {    resultsBody.innerHTML = '';
    
    results.forEach(result => {
      const row = document.createElement('tr');
      
      const typeCell = document.createElement('td');
      typeCell.textContent = result.type.charAt(0).toUpperCase() + result.type.slice(1);
      
      const nameCell = document.createElement('td');
      nameCell.textContent = result.nom;
      
      const actionsCell = document.createElement('td');
      const editBtn = document.createElement('button');
      editBtn.className = 'action-btn edit-btn';
      editBtn.innerHTML = '✏️';
      editBtn.onclick = () => editItem(result.type, result.id);
      
      const deleteBtn = document.createElement('button');
      deleteBtn.className = 'action-btn delete-btn';
      deleteBtn.innerHTML = '🗑️';
      deleteBtn.onclick = () => confirmDelete(result.type, result.id);
      
      actionsCell.appendChild(editBtn);
      actionsCell.appendChild(deleteBtn);
      
      row.appendChild(typeCell);
      row.appendChild(nameCell);
      row.appendChild(actionsCell);
      
      resultsBody.appendChild(row);
    });
    
    resultsContainer.style.display = 'block';
  } else {
    resultsContainer.style.display = 'none';
    alert('Aucun résultat trouvé');
  }
}

// Mettre à jour les tables avec les données
function updateTables() {
  // Mettre à jour la table des équipes
  const equipesTable = document.getElementById('equipesTable');
  equipesTable.innerHTML = '';
  
  demoData.equipes.forEach(equipe => {
    const row = document.createElement('tr');
    
    const nameCell = document.createElement('td');
    nameCell.textContent = equipe.nomequipe;
    
    const cityCell = document.createElement('td');
    cityCell.textContent = equipe.villeequipe;
    
    const actionsCell = document.createElement('td');
    const editBtn = document.createElement('button');
    editBtn.className = 'action-btn edit-btn';
    editBtn.innerHTML = '✏️';
    editBtn.onclick = () => editItem('equipe', equipe.id);
    
    const deleteBtn = document.createElement('button');
    deleteBtn.className = 'action-btn delete-btn';
    deleteBtn.innerHTML = '🗑️';
    deleteBtn.onclick = () => confirmDelete('equipe', equipe.id);
    
    actionsCell.appendChild(editBtn);
    actionsCell.appendChild(deleteBtn);
    
    row.appendChild(nameCell);
    row.appendChild(cityCell);
    row.appendChild(actionsCell);
    
    equipesTable.appendChild(row);
  });
  
  // Mettre à jour la table des joueurs
  const joueursTable = document.getElementById('joueursTable');
  joueursTable.innerHTML = '';
  
  demoData.joueurs.forEach(joueur => {
    const row = document.createElement('tr');
    
    const nameCell = document.createElement('td');
    nameCell.textContent = `${joueur.prenomjoueur} ${joueur.nomjoueur}`;
    
    const teamCell = document.createElement('td');
    const equipe = demoData.equipes.find(e => e.id === joueur.idequipe);
    teamCell.textContent = equipe ? equipe.nomequipe : 'Inconnue';
    
    const positionCell = document.createElement('td');
    positionCell.textContent = joueur.poste;
    
    const actionsCell = document.createElement('td');
    const editBtn = document.createElement('button');
    editBtn.className = 'action-btn edit-btn';
    editBtn.innerHTML = '✏️';
    editBtn.onclick = () => editItem('joueur', joueur.id);
    
    const deleteBtn = document.createElement('button');
    deleteBtn.className = 'action-btn delete-btn';
    deleteBtn.innerHTML = '🗑️';
    deleteBtn.onclick = () => confirmDelete('joueur', joueur.id);
    
    actionsCell.appendChild(editBtn);
    actionsCell.appendChild(deleteBtn);
    
    row.appendChild(nameCell);
    row.appendChild(teamCell);
    row.appendChild(positionCell);
    row.appendChild(actionsCell);
    
    joueursTable.appendChild(row);
  });
  
  // Mettre à jour la table des matchs
  const matchsTable = document.getElementById('matchsTable');
  matchsTable.innerHTML = '';
  
  demoData.matchs.forEach(match => {
    const row = document.createElement('tr');
    
    const teamsCell = document.createElement('td');
    const equipeDom = demoData.equipes.find(e => e.id === match.idequipe_dom);
    const equipeExt = demoData.equipes.find(e => e.id === match.idequipe_ext);
    teamsCell.textContent = `${equipeDom.nomequipe} vs ${equipeExt.nomequipe}`;
    
    const dateCell = document.createElement('td');
    const date = new Date(match.datematch);
    dateCell.textContent = date.toLocaleDateString('fr-FR');
    
    const scoreCell = document.createElement('td');
    scoreCell.textContent = `${match.score_dom} - ${match.score_ext}`;
    
    const actionsCell = document.createElement('td');
    const editBtn = document.createElement('button');
    editBtn.className = 'action-btn edit-btn';
    editBtn.innerHTML = '✏️';
    editBtn.onclick = () => editItem('match', match.id);
    
    const deleteBtn = document.createElement('button');
    deleteBtn.className = 'action-btn delete-btn';
    deleteBtn.innerHTML = '🗑️';
    deleteBtn.onclick = () => confirmDelete('match', match.id);
    
    actionsCell.appendChild(editBtn);
    actionsCell.appendChild(deleteBtn);
    
    row.appendChild(teamsCell);
    row.appendChild(dateCell);
    row.appendChild(scoreCell);
    row.appendChild(actionsCell);
    
    matchsTable.appendChild(row);
  });
  
  // Mettre à jour la table des commentaires
  const commentairesTable = document.getElementById('commentairesTable');
  commentairesTable.innerHTML = '';
  
  demoData.commentaires.forEach(comment => {
    const row = document.createElement('tr');
    
    const authorCell = document.createElement('td');
    authorCell.textContent = `Utilisateur ${comment.idusr}`;
    
    const matchCell = document.createElement('td');
    const match = demoData.matchs.find(m => m.id === comment.idmatch);
    if (match) {
      const equipeDom = demoData.equipes.find(e => e.id === match.idequipe_dom);
      const equipeExt = demoData.equipes.find(e => e.id === match.idequipe_ext);
      matchCell.textContent = `${equipeDom.nomequipe} vs ${equipeExt.nomequipe}`;
    } else {
      matchCell.textContent = 'Match inconnu';
    }
    
    const dateCell = document.createElement('td');
    const date = new Date(comment.datecomment);
    dateCell.textContent = date.toLocaleDateString('fr-FR');
    
    const actionsCell = document.createElement('td');
    const deleteBtn = document.createElement('button');
    deleteBtn.className = 'action-btn delete-btn';
    deleteBtn.innerHTML = '🗑️';
    deleteBtn.onclick = () => confirmDelete('commentaire', comment.id);
    
    actionsCell.appendChild(deleteBtn);
    
    row.appendChild(authorCell);
    row.appendChild(matchCell);
    row.appendChild(dateCell);
    row.appendChild(actionsCell);
    
    commentairesTable.appendChild(row);
  });
}

// Afficher le formulaire d'ajout
function showAddForm(table) {
  currentTable = table;
  currentId = 0;
  
  const modal = document.getElementById('addModal');
  const modalTitle = document.getElementById('modalTitle');
  const formFields = document.getElementById('formFields');
  const formTable = document.getElementById('formTable');
  
  formTable.value = table;
  modalTitle.textContent = `Ajouter ${getTableName(table)}`;
  formFields.innerHTML = '';
  
  // Générer les champs du formulaire en fonction de la table
  switch (table) {
    case 'equipe':
      formFields.innerHTML = `
        <div class="form-group-dashboard">
          <label for="nomequipe">Nom de l'équipe:</label>
          <input type="text" id="nomequipe" name="nomequipe" class="form-control-dashboard" required>
        </div>
        <div class="form-group-dashboard">
          <label for="villeequipe">Ville:</label>
          <input type="text" id="villeequipe" name="villeequipe" class="form-control-dashboard" required>
        </div>
        <div class="form-group-dashboard">
          <label for="logo">URL du logo:</label>
          <input type="text" id="logo" name="logo" class="form-control-dashboard">
        </div>
      `;
      break;
      
    case 'joueur':
      formFields.innerHTML = `
        <div class="form-group-dashboard">
          <label for="nomjoueur">Nom:</label>
          <input type="text" id="nomjoueur" name="nomjoueur" class="form-control-dashboard" required>
        </div>
        <div class="form-group-dashboard">
          <label for="prenomjoueur">Prénom:</label>
          <input type="text" id="prenomjoueur" name="prenomjoueur" class="form-control-dashboard" required>
        </div>
        <div class="form-group-dashboard">
          <label for="nationalite">Nationalité:</label>
          <input type="text" id="nationalite" name="nationalite" class="form-control-dashboard" required>
        </div>
        <div class="form-group-dashboard">
          <label for="age">Âge:</label>
          <input type="number" id="age" name="age" class="form-control-dashboard" required>
        </div>
        <div class="form-group-dashboard">
          <label for="idequipe">Équipe:</label>
          <select id="idequipe" name="idequipe" class="form-control-dashboard" required>
            ${demoData.equipes.map(equipe => `<option value="${equipe.id}">${equipe.nomequipe}</option>`).join('')}
          </select>
        </div>
        <div class="form-group-dashboard">
          <label for="poste">Poste:</label>
          <input type="text" id="poste" name="poste" class="form-control-dashboard" required>
        </div>
        <div class="form-group-dashboard">
          <label for="piedfort">Pied fort:</label>
          <select id="piedfort" name="piedfort" class="form-control-dashboard" required>
            <option value="Droit">Droit</option>
            <option value="Gauche">Gauche</option>
            <option value="Ambidextre">Ambidextre</option>
          </select>
        </div>
        <div class="form-group-dashboard">
          <label for="sexejoueur">Sexe:</label>
          <select id="sexejoueur" name="sexejoueur" class="form-control-dashboard" required>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
          </select>
        </div>
      `;
      break;
      
    case 'match':
      formFields.innerHTML = `
        <div class="form-group-dashboard">
          <label for="datematch">Date:</label>
          <input type="date" id="datematch" name="datematch" class="form-control-dashboard" required>
        </div>
        <div class="form-group-dashboard">
          <label for="idequipe_dom">Équipe domicile:</label>
          <select id="idequipe_dom" name="idequipe_dom" class="form-control-dashboard" required>
            ${demoData.equipes.map(equipe => `<option value="${equipe.id}">${equipe.nomequipe}</option>`).join('')}
          </select>
        </div>
        <div class="form-group-dashboard">
          <label for="idequipe_ext">Équipe extérieure:</label>
          <select id="idequipe_ext" name="idequipe_ext" class="form-control-dashboard" required>
            ${demoData.equipes.map(equipe => `<option value="${equipe.id}">${equipe.nomequipe}</option>`).join('')}
          </select>
        </div>
        <div class="form-group-dashboard">
          <label for="score_dom">Score domicile:</label>
          <input type="number" id="score_dom" name="score_dom" class="form-control-dashboard">
        </div>
        <div class="form-group-dashboard">
          <label for="score_ext">Score extérieur:</label>
          <input type="number" id="score_ext" name="score_ext" class="form-control-dashboard">
        </div>
        <div class="form-group-dashboard">
          <label for="statut">Statut:</label>
          <select id="statut" name="statut" class="form-control-dashboard" required>
            <option value="A venir">À venir</option>
            <option value="En cours">En cours</option>
            <option value="Terminé">Terminé</option>
          </select>
        </div>
        <div class="form-group-dashboard">
          <label for="idarbitre">Arbitre:</label>
          <select id="idarbitre" name="idarbitre" class="form-control-dashboard" required>
            ${demoData.arbitres.map(arbitre => `<option value="${arbitre.id}">${arbitre.nomarbitre}</option>`).join('')}
          </select>
        </div>
        <div class="form-group-dashboard">
          <label for="idstade">Stade:</label>
          <select id="idstade" name="idstade" class="form-control-dashboard" required>
            ${demoData.stades.map(stade => `<option value="${stade.id}">${stade.nomstade}</option>`).join('')}
          </select>
        </div>
        <div class="form-group-dashboard">
          <label for="idSaison">Saison:</label>
          <select id="idSaison" name="idSaison" class="form-control-dashboard" required>
            ${demoData.saisons.map(saison => `<option value="${saison.id}">${saison.saisonchamp}</option>`).join('')}
          </select>
        </div>
      `;
      break;
  }
  
  modal.style.display = 'flex';
}

// Afficher le formulaire de modification
function editItem(table, id) {
  currentTable = table;
  currentId = id;
  
  const modal = document.getElementById('addModal');
  const modalTitle = document.getElementById('modalTitle');
  const formFields = document.getElementById('formFields');
  const formTable = document.getElementById('formTable');
  
  formTable.value = table;
  modalTitle.textContent = `Modifier ${getTableName(table)}`;
  formFields.innerHTML = '';
  
  // Récupérer l'élément à modifier
  const item = demoData[table + 's'].find(item => item.id === id);
  if (!item) return;
  
  // Générer les champs du formulaire pré-remplis
  switch (table) {
    case 'equipe':
      formFields.innerHTML = `
        <div class="form-group-dashboard">
          <label for="nomequipe">Nom de l'équipe:</label>
          <input type="text" id="nomequipe" name="nomequipe" class="form-control-dashboard" value="${item.nomequipe}" required>
        </div>
        <div class="form-group-dashboard">
          <label for="villeequipe">Ville:</label>
          <input type="text" id="villeequipe" name="villeequipe" class="form-control-dashboard" value="${item.villeequipe}" required>
        </div>
        <div class="form-group-dashboard">
          <label for="logo">URL du logo:</label>
          <input type="text" id="logo" name="logo" class="form-control-dashboard" value="${item.logo || ''}">
        </div>
      `;
      break;
      
    case 'joueur':
      formFields.innerHTML = `
        <div class="form-group-dashboard">
          <label for="nomjoueur">Nom:</label>
          <input type="text" id="nomjoueur" name="nomjoueur" class="form-control-dashboard" value="${item.nomjoueur}" required>
        </div>
        <div class="form-group-dashboard">
          <label for="prenomjoueur">Prénom:</label>
          <input type="text" id="prenomjoueur" name="prenomjoueur" class="form-control-dashboard" value="${item.prenomjoueur}" required>
        </div>
        <div class="form-group-dashboard">
          <label for="nationalite">Nationalité:</label>
          <input type="text" id="nationalite" name="nationalite" class="form-control-dashboard" value="${item.nationalite}" required>
        </div>
        <div class="form-group-dashboard">
          <label for="age">Âge:</label>
          <input type="number" id="age" name="age" class="form-control-dashboard" value="${item.age}" required>
        </div>
        <div class="form-group-dashboard">
          <label for="idequipe">Équipe:</label>
          <select id="idequipe" name="idequipe" class="form-control-dashboard" required>
            ${demoData.equipes.map(equipe => 
              `<option value="${equipe.id}" ${equipe.id === item.idequipe ? 'selected' : ''}>${equipe.nomequipe}</option>`
            ).join('')}
          </select>
        </div>
        <div class="form-group-dashboard">
          <label for="poste">Poste:</label>
          <input type="text" id="poste" name="poste" class="form-control-dashboard" value="${item.poste}" required>
        </div>
        <div class="form-group-dashboard">
          <label for="piedfort">Pied fort:</label>
          <select id="piedfort" name="piedfort" class="form-control-dashboard" required>
            <option value="Droit" ${item.piedfort === 'Droit' ? 'selected' : ''}>Droit</option>
            <option value="Gauche" ${item.piedfort === 'Gauche' ? 'selected' : ''}>Gauche</option>
            <option value="Ambidextre" ${item.piedfort === 'Ambidextre' ? 'selected' : ''}>Ambidextre</option>
          </select>
        </div>
        <div class="form-group-dashboard">
          <label for="sexejoueur">Sexe:</label>
          <select id="sexejoueur" name="sexejoueur" class="form-control-dashboard" required>
            <option value="Homme" ${item.sexe === 'Homme' ? 'selected' : ''}>Homme</option>
            <option value="Femme" ${item.sexe === 'Femme' ? 'selected' : ''}>Femme</option>
          </select>
        </div>
      `;
      break;
      
    case 'match':
      formFields.innerHTML = `
        <div class="form-group-dashboard">
          <label for="datematch">Date:</label>
          <input type="date" id="datematch" name="datematch" class="form-control-dashboard" value="${item.datematch}" required>
        </div>
        <div class="form-group-dashboard">
          <label for="idequipe_dom">Équipe domicile:</label>
          <select id="idequipe_dom" name="idequipe_dom" class="form-control-dashboard" required>
            ${demoData.equipes.map(equipe => 
              `<option value="${equipe.id}" ${equipe.id === item.idequipe_dom ? 'selected' : ''}>${equipe.nomequipe}</option>`
            ).join('')}
          </select>
        </div>
        <div class="form-group-dashboard">
          <label for="idequipe_ext">Équipe extérieure:</label>
          <select id="idequipe_ext" name="idequipe_ext" class="form-control-dashboard" required>
            ${demoData.equipes.map(equipe => 
              `<option value="${equipe.id}" ${equipe.id === item.idequipe_ext ? 'selected' : ''}>${equipe.nomequipe}</option>`
            ).join('')}
          </select>
        </div>
        <div class="form-group-dashboard">
          <label for="score_dom">Score domicile:</label>
          <input type="number" id="score_dom" name="score_dom" class="form-control-dashboard" value="${item.score_dom || ''}">
        </div>
        <div class="form-group-dashboard">
          <label for="score_ext">Score extérieur:</label>
          <input type="number" id="score_ext" name="score_ext" class="form-control-dashboard" value="${item.score_ext || ''}">
        </div>
        <div class="form-group-dashboard">
          <label for="statut">Statut:</label>
          <select id="statut" name="statut" class="form-control-dashboard" required>
            <option value="A venir" ${item.statut === 'A venir' ? 'selected' : ''}>À venir</option>
            <option value="En cours" ${item.statut === 'En cours' ? 'selected' : ''}>En cours</option>
            <option value="Terminé" ${item.statut === 'Terminé' ? 'selected' : ''}>Terminé</option>
          </select>
        </div>
        <div class="form-group-dashboard">
          <label for="idarbitre">Arbitre:</label>
          <select id="idarbitre" name="idarbitre" class="form-control-dashboard" required>
            ${demoData.arbitres.map(arbitre => 
              `<option value="${arbitre.id}" ${arbitre.id === item.idarbitre ? 'selected' : ''}>${arbitre.nomarbitre}</option>`
            ).join('')}
          </select>
        </div>
        <div class="form-group-dashboard">
          <label for="idstade">Stade:</label>
          <select id="idstade" name="idstade" class="form-control-dashboard" required>
            ${demoData.stades.map(stade => 
              `<option value="${stade.id}" ${stade.id === item.idstade ? 'selected' : ''}>${stade.nomstade}</option>`
            ).join('')}
          </select>
        </div>
        <div class="form-group-dashboard">
          <label for="idSaison">Saison:</label>
          <select id="idSaison" name="idSaison" class="form-control-dashboard" required>
            ${demoData.saisons.map(saison => 
              `<option value="${saison.id}" ${saison.id === item.idSaison ? 'selected' : ''}>${saison.saisonchamp}</option>`
            ).join('')}
          </select>
        </div>
      `;
      break;
  }
  
  modal.style.display = 'flex';
}

// Soumettre le formulaire (ajout ou modification)
function submitForm() {
  const form = document.getElementById('addForm');
  const formData = new FormData(form);
  const table = formData.get('table');
  const data = {};
  
  // Récupérer toutes les valeurs du formulaire
  for (const [key, value] of formData.entries()) {
    if (key !== 'table') {
      data[key] = value;
    }
  }
  
  if (currentId === 0) {
    // Ajout d'un nouvel élément
    const newId = Math.max(...demoData[table + 's'].map(item => item.id)) + 1;
    data.id = newId;
    demoData[table + 's'].push(data);
  } else {
    // Modification d'un élément existant
    const index = demoData[table + 's'].findIndex(item => item.id === currentId);
    if (index !== -1) {
      data.id = currentId;
      demoData[table + 's'][index] = data;
    }
  }
  
  // Mettre à jour les tables et fermer le modal
  updateTables();
  closeModal();
}

// Confirmer la suppression
function confirmDelete(table, id) {
  currentTable = table;
  currentId = id;
  
  const modal = document.getElementById('deleteModal');
  modal.style.display = 'flex';
}

// Effectuer la suppression
function confirmDeleteAction() {
  const index = demoData[currentTable + 's'].findIndex(item => item.id === currentId);
  if (index !== -1) {
    demoData[currentTable + 's'].splice(index, 1);
    updateTables();
  }
  
  closeModal();
}

// Fermer le modal
function closeModal() {
  document.getElementById('addModal').style.display = 'none';
  document.getElementById('deleteModal').style.display = 'none';
}

// Obtenir le nom affichable d'une table
function getTableName(table) {
  switch (table) {
    case 'equipe': return 'une équipe';
    case 'joueur': return 'un joueur';
    case 'match': return 'un match';
    case 'commentaire': return 'un commentaire';
    default: return 'un élément';
  }
}

// Vérifier l'authentification au chargement de la page
document.addEventListener('DOMContentLoaded', checkAuth);
</script>
</body>
</html>