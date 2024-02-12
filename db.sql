create database thecompany;
use thecompany;

CREATE TABLE The(
    id_The INT AUTO_INCREMENT,
    Nom_The VARCHAR(50),
    Occupation DOUBLE,
    Rendement DOUBLE,
    PRIMARY KEY (id_The)
)Engine=innodb;

CREATE TABLE Parcelle (
    id_Parcelle INT AUTO_INCREMENT PRIMARY KEY,
    id_The INT NOT NULL,
    Surface_Parcelle DOUBLE NOT NULL,
    FOREIGN KEY (id_The) REFERENCES The(id_The)
)Engine=innodb;

CREATE TABLE Cueilleur (
    id_Cueilleur INT AUTO_INCREMENT PRIMARY KEY,
    Nom_Cueilleur VARCHAR(255) NOT NULL,
    Genre CHAR(1) NOT NULL,
    Dtn DATE NOT NULL
)Engine=innodb;

CREATE TABLE Cueillette (
    idCueillette INT AUTO_INCREMENT PRIMARY KEY,
    id_Cueilleur INT NOT NULL,
    id_Parcelle INT NOT NULL,
    Date_Cueillette DATE NOT NULL,
    Poids_Cueilli DOUBLE NOT NULL,
    FOREIGN KEY (id_Cueilleur) REFERENCES Cueilleur(id_Cueilleur),
    FOREIGN KEY (id_Parcelle) REFERENCES Parcelle(id_Parcelle)
)Engine=innodb;

CREATE TABLE CateDepense (
    id_CateDepense INT AUTO_INCREMENT PRIMARY KEY,
    Nom_CateDepense VARCHAR(150) NOT NULL
)Engine=innodb;

CREATE TABLE MvtDepense (
    id_MvtDepense INT AUTO_INCREMENT PRIMARY KEY,
    id_CateDepense INT NOT NULL,
    Montant DOUBLE NOT NULL,
    Date_Depense DATE NOT NULL,
    FOREIGN KEY (id_CateDepense) REFERENCES CateDepense(id_CateDepense)
)Engine=innodb;

CREATE TABLE MvtSalaire (
    id_MvtSalaire INT AUTO_INCREMENT PRIMARY KEY,
    Montant DOUBLE NOT NULL,
    Date_Salaire DATE NOT NULL
)Engine=innodb;
