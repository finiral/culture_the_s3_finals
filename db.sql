create database thecompany;
use thecompany;

CREATE TABLE The(
    idThe INT AUTO_INCREMENT,
    NomThe VARCHAR(50),
    Occupation DOUBLE,
    Rendement DOUBLE,
    PRIMARY KEY (idThe)
)Engine=innodb;

CREATE TABLE Parcelle (
    idParcelle INT AUTO_INCREMENT PRIMARY KEY,
    idThe INT NOT NULL,
    SurfaceTotal DOUBLE NOT NULL,
    FOREIGN KEY (idThe) REFERENCES The(idThe)
)Engine=innodb;

CREATE TABLE Cueilleur (
    idCueilleur INT AUTO_INCREMENT PRIMARY KEY,
    NomCueilleur VARCHAR(255) NOT NULL,
    Genre CHAR(1) NOT NULL,
    DtnNaissance DATE NOT NULL
)Engine=innodb;

CREATE TABLE Cueillette (
    idCueillette INT AUTO_INCREMENT PRIMARY KEY,
    idCueilleur INT NOT NULL,
    idParcelle INT NOT NULL,
    DateCueillette DATE NOT NULL,
    PoidsCueilli DOUBLE NOT NULL,
    FOREIGN KEY (idCueilleur) REFERENCES Cueilleur(idCueilleur),
    FOREIGN KEY (idParcelle) REFERENCES Parcelle(idParcelle)
)Engine=innodb;

CREATE TABLE CateDepense (
    idCateDepense INT AUTO_INCREMENT PRIMARY KEY,
    NomCateDepense VARCHAR(150) NOT NULL
)Engine=innodb;

CREATE TABLE MvtDepense (
    idDepense INT AUTO_INCREMENT PRIMARY KEY,
    idCateDepense INT NOT NULL,
    Montant DOUBLE NOT NULL,
    DateDepense DATE NOT NULL,
    FOREIGN KEY (idCateDepense) REFERENCES CateDepense(idCateDepense)
)Engine=innodb;

CREATE TABLE MvtSalaire (
    idSalaire INT AUTO_INCREMENT PRIMARY KEY,
    Montant DOUBLE NOT NULL,
    DateSalaire DATE NOT NULL
)Engine=innodb;
