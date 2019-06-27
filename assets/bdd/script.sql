-- ================================================================
--   Nom de la base   :  portfolio_db
--   Copyright       :  Enzo LEMARCHAND
--   Pour           : Projet UF-WEB
-- ================================================================

-- ================================================================
--   Création de la base avec définition du fuseau horaire local
-- ================================================================

SET time_zone="+01:00";
CREATE DATABASE IF NOT EXISTS portfolio_db CHARACTER SET utf8;
USE portfolio_db;

-- ================================================================
--   Table : admin
-- ================================================================

CREATE TABLE IF NOT EXISTS `admin` (
  id int NOT NULL AUTO_INCREMENT,
  name varchar(80) NOT NULL,
  mdp varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ================================================================
--   Table : competence
-- ================================================================

CREATE TABLE IF NOT EXISTS `competence` (
  id_competence int NOT NULL AUTO_INCREMENT,
  nom_competence varchar(80) NOT NULL,
  niveau varchar(50) NOT NULL,
  PRIMARY KEY (id_competence)
) ENGINE=InnoDB;

-- ================================================================
--   Table : experience
-- ================================================================

CREATE TABLE IF NOT EXISTS `experience` (
  id_experience int NOT NULL AUTO_INCREMENT,
  experience varchar(100) NOT NULL,
  description varchar(3000) NOT NULL,
  date_Debut date NOT NULL,
  date_Fin date,
  PRIMARY KEY (id_experience)
) ENGINE=InnoDB;

-- ================================================================
--   Table : contact
-- ================================================================

CREATE TABLE IF NOT EXISTS `contact` (
  id_contact int NOT NULL AUTO_INCREMENT,
  nom_envoyeur varchar(80) NOT NULL,
  prenom_envoyeur varchar(80) NOT NULL,
  email varchar(200) NOT NULL,
  message varchar(800) NOT NULL,
  file BLOB,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB;

-- =================================================================
--   Ajout d'un premier utilisateur qui fera office d'administrateur
-- =================================================================
INSERT INTO admin(name, mdp) VALUES('boot','314e9ad1bb068ed152ce11d5afe810468471752f8b7bed2594ff3b5c5b471cd9')
