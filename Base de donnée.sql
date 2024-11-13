CREATE DATABASE scolarite;

USE scolarite;


CREATE TABLE etudiant (
    matricule INT(11) NOT NULL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    ddn DATE NOT NULL,
    sexe CHAR(1) NOT NULL,
    tel VARCHAR(15) NOT NULL
);


CREATE TABLE enseignant (
   id INT(11) NOT NULL PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    sexe VARCHAR(50) NOT NULL,
    address VARCHAR(50) NOT NULL,
    email VARCHAR(15) NOT NULL
);

CREATE TABLE salle (
   idsal INT(11) NOT NULL PRIMARY KEY,
    num INT(11) NOT NULL,
     libelle VARCHAR(200) NOT NULL,
    nbret INT(11) NOT NULL,
    
);

CREATE TABLE cours (
   idcours INT(11) NOT NULL PRIMARY KEY,
    nm_module VARCHAR(50) NOT NULL,
     nbr_heure INT(11) NOT NULL,
    niveau VARCHAR(50) NOT NULL,    
   nm_enseignant VARCHAR(50) NOT NULL,
    numsal INT(11) NOT NULL,
    etudiants VARCHAR(50) NOT NULL
);