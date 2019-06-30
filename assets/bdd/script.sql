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
  mdp varchar(255) DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB;

-- ================================================================
--   Table : competence
-- ================================================================

CREATE TABLE IF NOT EXISTS `competence` (
  id_competence int NOT NULL AUTO_INCREMENT,
  nom_competence varchar(80) NOT NULL,
  niveau ENUM ('1','2','3','4','5'),
  link_img text NOT NULL,
  PRIMARY KEY (id_competence)
) ENGINE=InnoDB;

-- ================================================================
--   Table : experience
-- ================================================================

CREATE TABLE IF NOT EXISTS `experience` (
  id_experience int NOT NULL AUTO_INCREMENT,
  experience varchar(100) NOT NULL,
  description varchar(3000) NOT NULL,
  lieu varchar(100) NOT NULL,
  date_Debut date NOT NULL,
  date_Fin date,
  PRIMARY KEY (id_experience)
) ENGINE=InnoDB;

-- ================================================================
--   Table : contact
-- ================================================================

CREATE TABLE IF NOT EXISTS `contact` (
  id_contact int NOT NULL AUTO_INCREMENT,
  nom_envoyeur varchar(60) NOT NULL,
  prenom_envoyeur varchar(40) NOT NULL,
  sujet varchar(80) NOT NULL,
  email varchar(100) NOT NULL,
  message varchar(800) NOT NULL,
  file_link text,
  PRIMARY KEY (id_contact)
) ENGINE=InnoDB;

-- =================================================================
--   Ajout d'un premier utilisateur test qui fera office d'administrateur
-- =================================================================
INSERT INTO admin(name, mdp) VALUES('boot','81d3c27cc312e95750e59e59e06785e0c0b849ff5a33b73b3a18921c5797ee66')
