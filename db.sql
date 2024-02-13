create database thecompany;
use thecompany;

CREATE TABLE User(
    id_User INT AUTO_INCREMENT PRIMARY KEY,
    Pseudo VARCHAR(100),
    Mdp VARCHAR(255),
    Type_User SMALLINT
)Engine=innodb;

insert into User(Pseudo,Mdp,Type_User) values ('Pierre',sha1('Pierre'),0);
insert into User(Pseudo,Mdp,Type_User) values ('Jean',sha1('Jean'),1);

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
create table Moisregen(
    id_Moisregen INT AUTO_INCREMENT PRIMARY KEY,
    Mois VARCHAR(20)
)Engine=innodb;
create table saisonregen(
    id_saisonregen INT AUTO_INCREMENT PRIMARY KEY,
    id_Moisregen INT REFERENCES Moisregen(id_Moisregen),
    Etat SMALLINT
)Engine=innodb;
alter table saisonregen add column date_saisonregen date;
create table cond(
    Minimal DOUBLE not null,
    Bonus DOUBLE not null,
    Malus DOUBLE not null,
    date_condation date not null
)Engine=innodb;
create or replace view v_cueillettecondition as select Cueillette.*,condition.* from Cueillette,condition;
alter table The add column prixvente DOUBLE; 
insert into Moisregen values(null,'Janvier');
insert into Moisregen values(null,'Fevrier');
insert into Moisregen values(null,'Mars');
insert into Moisregen values(null,'Avril');
insert into Moisregen values(null,'Mai');
insert into Moisregen values(null,'Juin');
insert into Moisregen values(null,'Juillet');
insert into Moisregen values(null,'Aout');
insert into Moisregen values(null,'Septembre');
insert into Moisregen values(null,'Octobre');
insert into Moisregen values(null,'Novembre');
insert into Moisregen values(null,'Decembre');
create or replace view v_parcellethe as select Parcelle.*,The.Nom_The,The.Occupation,The.Rendement from Parcelle 
join The on Parcelle.id_The=The.id_The; 

create or replace view v_cueillette as select Cueilleur.Nom_Cueilleur,Parcelle.id_Parcelle,Parcelle.Surface_Parcelle,
Cueillette.Date_Cueillette,Cueillette.Poids_Cueilli from Cueillette join Cueilleur on 
Cueilleur.id_Cueilleur=Cueillette.id_Cueilleur join Parcelle on 
Cueillette.id_Parcelle=Parcelle.id_Parcelle;

create or replace view v_rendeparcelle as 
select (Rendement/Occupation)*v_parcellethe.Surface_Parcelle*1000 as rende_Parcelle ,
v_parcellethe.id_Parcelle ,v_cueillette.Poids_Cueilli as poids_cuelli, 
(Rendement/Occupation)*v_parcellethe.Surface_Parcelle*1000-v_cueillette.Poids_Cueilli as restant,
v_cueillette.Date_Cueillette
from v_parcellethe join v_cueillette on v_cueillette.id_Parcelle=v_parcellethe.id_Parcelle;

create or replace view v_sumcueilletteparcelle as select id_Parcelle ,sum(Poids_Cueilli),Date_Cueillette 
from v_cueillette
group by id_Parcelle;


create view v_latest_cond as select c.Minimal,c.Bonus,c.Malus,c.date_condation from cond c 
join(select Minimal,MAX(date_condation) as  maxdate from cond group by Minimal) 
latest on c.Minimal=latest.Minimal and c.date_condation=latest.MaxDate;

create view v_latest_salaire as
SELECT * 
FROM MvtSalaire
WHERE Date_Salaire = (SELECT MAX(Date_Salaire) FROM MvtSalaire);

create or replace view v_payement as select v_cueillette.Date_Cueillette,v_cueillette.Nom_Cueilleur,v_cueillette.Poids_Cueilli,(select Bonus from v_latest_cond) as Bonus,
(select Malus from v_latest_cond) as Malus,(select Minimal from v_latest_cond)  as Minimal ,(select Montant from v_latest_salaire) as Montant from v_cueillette;