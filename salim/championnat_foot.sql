



CREATE TABLE IF NOT EXISTS championnat (
    idchamp INT AUTO_INCREMENT PRIMARY KEY,
    nomchamp VARCHAR(100) NOT NULL,
    pays VARCHAR(100) NOT NULL,
    saisonchamp VARCHAR(50) NOT NULL,
    division INT NOT NULL
);




CREATE TABLE IF NOT EXISTS utilisateur (
    idusr INT AUTO_INCREMENT PRIMARY KEY,
    nomusr VARCHAR(100),
    prenomusr VARCHAR(100),
    email VARCHAR(100),
    motdepasse VARCHAR(100),
    roleusr VARCHAR(50),
    sexeusr VARCHAR(10)

);

INSERT INTO utilisateur (idusr,nomusr, prenomusr, email, motdepasse, roleusr, sexeusr) 
VALUES (1,'salim', 'salim', 'boubacarsalim6@gmail.com','azertyuiop','admin','Homme');
SELECT motdepasse FROM utilisateur WHERE email = 'boubacarsalim6@gmail.com';
ALTER TABLE utilisateur 
ADD CONSTRAINT chk_sexe CHECK (sexeusr IN ('Homme', 'Femme','M','F','Neutre'));

UPDATE utilisateur 
SET motdepasse = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' 
WHERE email = 'boubacarsalim6@gmail.com';

CREATE TABLE IF NOT EXISTS equipe (
    idequipe INT AUTO_INCREMENT PRIMARY KEY,
    nomequipe VARCHAR(100) NOT NULL,
    villeequipe VARCHAR(100) NOT NULL,
    logo VARCHAR(255)
);


INSERT INTO equipe (nomequipe, villeequipe, idequipe, logo) VALUES ('Olympique Lyonnais', 'Lyon', 1, 'OL');
INSERT INTO equipe (nomequipe, villeequipe, idequipe, logo) VALUES ('Paris Saint-Germain', 'Paris', 2, 'PSG');
INSERT INTO equipe (nomequipe, villeequipe, idequipe, logo) VALUES ('AS Monaco', 'Monaco', 3, 'ASM');
INSERT INTO equipe (nomequipe, villeequipe, idequipe, logo) VALUES ('Olympique de Marseille', 'Marseille' , 4, 'OM');
INSERT INTO equipe (nomequipe, villeequipe, idequipe, logo) VALUES ('Lille OSC', 'Lille', 5, 'LOSC');
INSERT INTO equipe (nomequipe, villeequipe, idequipe, logo) VALUES ('RC Lens', 'Lens' , 6 , 'RCL');
INSERT INTO equipe (nomequipe, villeequipe, idequipe, logo) VALUES ('Stade Rennais', 'Rennes', 7, 'SRFC');
INSERT INTO equipe (nomequipe, villeequipe, idequipe, logo) VALUES ('FC Nantes', 'Nantes', 8, 'FCN');
INSERT INTO equipe (nomequipe, villeequipe, idequipe, logo) VALUES ('OGC Nice', 'Nice' , 9, 'OGCN');
INSERT INTO equipe (nomequipe, villeequipe, idequipe, logo) VALUES ('Montpellier HSC', 'Montpellier' , 10, 'MHSC');


CREATE TABLE IF NOT EXISTS joueurs (
    idjoueur INT AUTO_INCREMENT PRIMARY KEY,
    nomjoueur VARCHAR(100) NOT NULL,
    prenomjoueur VARCHAR(100) NOT NULL,
    nationalite VARCHAR(50),
    age INT NOT NULL,
    idequipe INT ,
    poste VARCHAR(50),
    piedfort VARCHAR(50),
    sexejoueur VARCHAR(10),
    FOREIGN KEY (idequipe) REFERENCES equipe(idequipe) ON DELETE SET NULL
);




CREATE TABLE IF NOT EXISTS stade (
    idstade INT AUTO_INCREMENT PRIMARY KEY,
    nomstade VARCHAR(100) NOT NULL,
    capacite INT NOT NULL,
    ville VARCHAR(100) NOT NULL
);


CREATE TABLE IF NOT EXISTS saison (
    idSaison INT AUTO_INCREMENT PRIMARY KEY,
    nbrequipe INT NOT NULL,
    nbrmatchs INT NOT NULL,
    idchamp INT,
    FOREIGN KEY (idchamp) REFERENCES championnat(idchamp) ON DELETE CASCADE
);


CREATE TABLE IF NOT EXISTS arbitre (
    idarbitre INT AUTO_INCREMENT PRIMARY KEY,
    nomarbitre VARCHAR(100) NOT NULL,
    prenomarbitre VARCHAR(100),
    sexearbitre VARCHAR(10),
    idchamp INT,
    FOREIGN KEY (idchamp) REFERENCES championnat(idchamp) ON DELETE CASCADE
);



CREATE TABLE IF NOT EXISTS matchs (
    idmatch INT AUTO_INCREMENT PRIMARY KEY,
    datematch DATE NOT NULL,
    idequipe_dom INT,         
    idequipe_ext INT,           
    score_dom INT DEFAULT 0,
    score_ext INT DEFAULT 0,
    statut VARCHAR(50),
    idarbitre INT,
    idstade INT,
    FOREIGN KEY (idequipe_dom) REFERENCES equipe(idequipe) ON DELETE CASCADE,
    FOREIGN KEY (idequipe_ext) REFERENCES equipe(idequipe) ON DELETE CASCADE,
    FOREIGN KEY (idarbitre) REFERENCES arbitre(idarbitre) ON DELETE SET NULL,
    FOREIGN KEY (idstade) REFERENCES stade(idstade) ON DELETE SET NULL
);

ALTER TABLE matchs 
ADD COLUMN idSaison INT,
ADD FOREIGN KEY (idSaison) REFERENCES saison(idSaison);


CREATE TABLE  IF NOT EXISTS statistiques (
    idstat INT AUTO_INCREMENT PRIMARY KEY,
    idmatch INT,
    idequipe INT,
    idjoueur INT,
    nbrbuts INT,
    nbpassesD INT,
    nbcartonsjaunes INT,
    nbcartonsrouges INT,
    possession VARCHAR(200),
    FOREIGN KEY (idmatch) REFERENCES matchs(idmatch) ON DELETE CASCADE,
    FOREIGN KEY (idequipe) REFERENCES equipe(idequipe) ON DELETE CASCADE,
    FOREIGN KEY (idjoueur) REFERENCES joueurs(idjoueur) ON DELETE SET NULL
);


CREATE TABLE IF NOT EXISTS spectateur (
    idspectateur INT PRIMARY KEY,
    FOREIGN KEY (idspectateur) REFERENCES utilisateur(idusr) ON DELETE CASCADE
);


CREATE TABLE IF NOT EXISTS administrateur (
    idadmin INT PRIMARY KEY,
    FOREIGN KEY (idadmin) REFERENCES utilisateur(idusr) ON DELETE CASCADE
);
INSERT INTO admin (idadmin) VALUES (1248);


CREATE TABLE  IF NOT EXISTS commentaire (
    idcomment INT AUTO_INCREMENT PRIMARY KEY,
    idusr INT,
    idmatch INT,
    contenu TEXT,
    datecomment DATE,
    FOREIGN KEY (idusr) REFERENCES utilisateur(idusr) ON DELETE CASCADE,
    FOREIGN KEY (idmatch) REFERENCES matchs(idmatch) ON DELETE CASCADE
);


CREATE TABLE IF NOT EXISTS vote (
    idvote INT AUTO_INCREMENT PRIMARY KEY,
    idusr INT,
    idmatch INT,
    typevote VARCHAR(50),
    datevote DATE,
    FOREIGN KEY (idusr) REFERENCES utilisateur(idusr) ON DELETE CASCADE,
    FOREIGN KEY (idmatch) REFERENCES matchs(idmatch) ON DELETE CASCADE
);



INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 19, 1, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 20, 1, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 21, 1, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 22, 1, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 23, 1, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 24, 1, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 25, 1, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 26, 1, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 27, 1, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 28, 1, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 29, 1, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 30, 1, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 31, 1, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 32, 1, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 18, 1, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 19, 1, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 20, 1, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 21, 1, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 22, 1, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 23, 1, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 24, 2, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 25, 2, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 26, 2, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 27, 2, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 28, 2, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 29, 2, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 30, 2, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 31, 2, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 32, 2, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 18, 2, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 19, 2, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 20, 2, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 21, 2, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 22, 2, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 23, 2, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 24, 2, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 25, 2, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 26, 2, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 27, 2, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 28, 2, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 29, 3, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 30, 3, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 31, 3, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 32, 3, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 18, 3, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 19, 3, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 20, 3, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 21, 3, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 22, 3, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 23, 3, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 24, 3, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 25, 3, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 26, 3, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 27, 3, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 28, 3, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 29, 3, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 30, 3, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 31, 3, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 32, 3, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 18, 3, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 19, 4, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 20, 4, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 21, 4, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 22, 4, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 23, 4, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 24, 4, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 25, 4, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 26, 4, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 27, 4, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 28, 4, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 29, 4, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 30, 4, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 31, 4, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 32, 4, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 18, 4, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 19, 4, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 20, 4, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 21, 4, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 22, 4, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 23, 4, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 24, 5, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 25, 5, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 26, 5, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 27, 5, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 28, 5, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 29, 5, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 30, 5, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 31, 5, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 32, 5, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 18, 5, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 19, 5, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 20, 5, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 21, 5, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 22, 5, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 23, 5, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 24, 5, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 25, 5, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 26, 5, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 27, 5, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 28, 5, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 29, 6, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 30, 6, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 31, 6, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 32, 6, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 18, 6, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 19, 6, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 20, 6, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 21, 6, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 22, 6, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 23, 6, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 24, 6, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 25, 6, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 26, 6, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 27, 6, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 28, 6, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 29, 6, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 30, 6, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 31, 6, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 32, 6, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 18, 6, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 19, 7, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 20, 7, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 21, 7, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 22, 7, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 23, 7, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 24, 7, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 25, 7, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 26, 7, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 27, 7, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 28, 7, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 29, 7, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 30, 7, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 31, 7, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 32, 7, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 18, 7, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 19, 7, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 20, 7, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 21, 7, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 22, 7, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 23, 7, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 24, 8, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 25, 8, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 26, 8, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 27, 8, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 28, 8, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 29, 8, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 30, 8, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 31, 8, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 32, 8, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 18, 8, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 19, 8, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 20, 8, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 21, 8, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 22, 8, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 23, 8, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 24, 8, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 25, 8, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 26, 8, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 27, 8, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 28, 8, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 29, 9, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 30, 9, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 31, 9, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 32, 9, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 18, 9, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 19, 9, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 20, 9, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 21, 9, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 22, 9, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 23, 9, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 24, 9, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 25, 9, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 26, 9, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 27, 9, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 28, 9, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 29, 9, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 30, 9, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 31, 9, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 32, 9, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 18, 9, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 19, 10, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 20, 10, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 21, 10, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 22, 10, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 23, 10, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 24, 10, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 25, 10, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 26, 10, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 27, 10, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 28, 10, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Lucas', 'Française', 29, 10, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Leo', 'Française', 30, 10, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Tom', 'Française', 31, 10, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Louis', 'Française', 32, 10, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Arthur', 'Française', 18, 10, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lefevre', 'Louis', 'Française', 19, 10, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Simon', 'Tom', 'Française', 20, 10, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Lambert', 'Leo', 'Française', 21, 10, 'Attaquant', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Moulin', 'Lucas', 'Française', 22, 10, 'Défenseur', 'Gauche', 'Homme');
INSERT INTO joueurs (nomjoueur, prenomjoueur, nationalite, age, idequipe, poste, piedfort, sexejoueur) VALUES ('Noel', 'Maxime', 'Française', 23, 10, 'Attaquant', 'Gauche', 'Homme');


INSERT INTO stade (idstade, nomstade, ville, capacite) VALUES
(1, 'Stade de Lyon', 'Lyon', 55000),
(2, 'Stade Vélodrome', 'Marseille', 67000),
(3, 'Stade Pierre-Mauroy', 'Lille', 50000),
(4, 'Parc des princes', 'Paris', 42000),
(5, 'Stade de la Beaujoire', 'Nantes', 38000),
(6, 'Stade Louis 2', 'Monaco', 43000),
(7, 'Stade de lens', 'Lens', 22000),
(8, 'Roazhen Parc', 'Rennes', 29000),
(9, 'Allianz Stadium', 'Nice', 19000),
(10, 'Stade de la Mosson', 'Montpellier', 32000);


INSERT INTO arbitre (nomarbitre, prenomarbitre, sexearbitre, idchamp) VALUES
('Martin', 'Lucas', 'Homme', 1),
('Durand', 'Clément', 'Homme', 1),
('Lemoine', 'Antoine', 'Homme', 1),
('Petit', 'Nicolas', 'Homme', 1),
('Fournier', 'Julien', 'Homme', 1),
('Moreau', 'Paul', 'Homme', 1),
('Roux', 'Mathieu', 'Homme', 1),
('Garcia', 'Sophie', 'Femme', 1),
('Blanc', 'Élise', 'Femme', 1),
('Gauthier', 'Manon', 'Femme', 1),
('Noël', 'Hugo', 'Homme', 1),
('Renard', 'Théo', 'Homme', 1);


ALTER TABLE equipe ADD COLUMN idstade INT;


UPDATE equipe SET idstade = 1 WHERE idequipe = 1;
UPDATE equipe SET idstade = 2 WHERE idequipe = 2;
UPDATE equipe SET idstade = 3 WHERE idequipe = 3;
UPDATE equipe SET idstade = 4 WHERE idequipe = 4;
UPDATE equipe SET idstade = 5 WHERE idequipe = 5;
UPDATE equipe SET idstade = 6 WHERE idequipe = 6;
UPDATE equipe SET idstade = 7 WHERE idequipe = 7;
UPDATE equipe SET idstade = 8 WHERE idequipe = 8;
UPDATE equipe SET idstade = 9 WHERE idequipe = 9;
UPDATE equipe SET idstade = 10 WHERE idequipe = 10;


ALTER TABLE equipe ADD CONSTRAINT fk_stade FOREIGN KEY (idstade) REFERENCES stade(idstade) ON DELETE SET NULL;


INSERT INTO matchs (datematch, idequipe_dom, idequipe_ext, score_dom, score_ext, statut, idarbitre, idstade) VALUES
('2025-05-20', 1, 2, 2, 1, 'Terminé', 1, 1),
('2025-05-21', 3, 4, 0, 0, 'Terminé', 2, 3),
('2025-05-22', 5, 6, 3, 2, 'Terminé', 3, 5),
('2025-05-23', 7, 8, 1, 4, 'Terminé', 4, 7),
('2025-05-24', 9, 10, 2, 2, 'Terminé', 5, 9),
('2025-05-25', 2, 3, 0, 1, 'Terminé', 6, 2),
('2025-05-26', 4, 5, 2, 3, 'Terminé', 7, 4),
('2025-05-27', 6, 7, 1, 0, 'Terminé', 8, 6),
('2025-05-28', 8, 9, 2, 1, 'Terminé', 9, 8),
('2025-05-29', 10, 1, 0, 0, 'Terminé', 10, 10),
('2025-05-30', 1, 3, 1, 1, 'Terminé', 11, 1),
('2025-05-31', 2, 4, 2, 2, 'Terminé', 12, 2),
('2025-06-01', 5, 7, 3, 0, 'Terminé', 1, 5),
('2025-06-02', 6, 8, 1, 3, 'Terminé', 2, 6),
('2025-06-03', 9, 1, 0, 2, 'Terminé', 3, 9);

INSERT INTO utilisateur (idusr, nomusr, prenomusr, email, motdepasse, roleusr, sexeusr) VALUES
(1, 'Dupont', 'Jean', 'jean.dupont@email.com', 'pass123', 'admin', 'M'),
(2, 'Martin', 'Sophie', 'sophie.martin@email.com', 'pass123', 'user', 'F'),
(3, 'Durand', 'Paul', 'paul.durand@email.com', 'pass123', 'user', 'M'),
(4, 'Lemoine', 'Claire', 'claire.lemoine@email.com', 'pass123', 'user', 'F'),
(5, 'Petit', 'Nicolas', 'nicolas.petit@email.com', 'pass123', 'user', 'M'),
(6, 'Fournier', 'Emma', 'emma.fournier@email.com', 'pass123', 'user', 'F'),
(7, 'Moreau', 'Lucas', 'lucas.moreau@email.com', 'pass123', 'user', 'M'),
(8, 'Roux', 'Julie', 'julie.roux@email.com', 'pass123', 'user', 'F'),
(9, 'Garcia', 'Pauline', 'pauline.garcia@email.com', 'pass123', 'user', 'F'),
(10, 'Blanc', 'Antoine', 'antoine.blanc@email.com', 'pass123', 'user', 'M');

INSERT INTO vote (idvote, idusr, idmatch, typevote, datevote) VALUES
(1, 1, 1, 'like', '2025-05-10'),
(2, 2, 2, 'dislike', '2025-05-11'),
(3, 3, 3, 'like', '2025-05-12'),
(4, 4, 4, 'like', '2025-05-13'),
(5, 5, 5, 'dislike', '2025-05-14'),
(6, 6, 6, 'like', '2025-05-15'),
(7, 7, 7, 'like', '2025-05-16'),
(8, 8, 8, 'dislike', '2025-05-17'),
(9, 9, 9, 'like', '2025-05-18'),
(10, 10, 10, 'like', '2025-05-19');
INSERT INTO spectateur (idspectateur) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10);

INSERT INTO commentaire (idcomment, idusr, idmatch, contenu, datecomment) VALUES
(1, 1, 1, 'Très bon match, très disputé.', '2025-05-20'),
(2, 2, 2, 'Belle performance de l équipe locale.', '2025-05-21'),
(3, 3, 3, 'Arbitrage correct.', '2025-05-22'),
(4, 4, 4, 'Un match à revoir.', '2025-05-23'),
(5, 5, 5, 'Super ambiance au stade !', '2025-05-24'),
(6, 6, 6, 'Les joueurs ont bien joué.', '2025-05-25'),
(7, 7, 7, 'Déçu du résultat final.', '2025-05-26'),
(8, 8, 8, 'Match nul mérité.', '2025-05-27'),
(9, 9, 9, 'Les supporters étaient formidables.', '2025-05-28'),
(10, 10, 10, 'À refaire bientôt.', '2025-05-29');
INSERT INTO statistiques (idstat, idjoueur, nbrbuts, nbrpassesD, nbrcartonsjaunes, nbrcartonsrouges, possession, idmatch, idequipe) VALUES
(1, 1, 15, 5, 3, 2, 40, 1, 1),
(2, 2, 18, 3, 5, 1, 12, 2, 2),
(3, 3, 20, 10, 7, 0, 16, 3, 3),
(4, 4, 12, 1, 2, 3, 70, 4, 4),
(5, 5, 22, 15, 8, 1, 70, 5, 5),
(6, 6, 19, 4, 6, 0, 50, 6, 6),
(7, 7, 14, 7, 1, 2, 71, 7, 7),
(8, 8, 20, 9, 9, 0, 80, 8, 8),
(9, 9, 16, 2, 4, 1, 58, 9, 9),
(10, 10, 21, 11, 5, 0, 40, 10, 10);
