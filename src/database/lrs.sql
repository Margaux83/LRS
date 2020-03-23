-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 20 nov. 2019 à 19:27
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lrs`
--
CREATE DATABASE IF NOT EXISTS `lrs` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `lrs`;

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Titre` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Sujet` varchar(255) CHARACTER SET utf8 NOT NULL,
  `DateAddEvent` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Description` longtext CHARACTER SET utf8 NOT NULL,
  `Lieu` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Date_event` date NOT NULL,
  `Heure_deb` time NOT NULL,
  `Heure_fin` time NOT NULL,
  `ref_event` int(6) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`ID`, `Titre`, `Sujet`, `DateAddEvent`, `Description`, `Lieu`, `Date_event`, `Heure_deb`, `Heure_fin`, `ref_event`) VALUES
(25, 'Salon des métiers des anciens étudiants 2019', 'Salon des métiers des anciens étudiants', '2019-11-18 14:28:14', 'Chers anciens étudiants du Lycée Privé Robert Schuman !\r\nAfin que vos successeurs découvrent les différents métiers qu\'ils pourront effectuer à la fin de leurs études et les différentes écoles auxquelles ils peuvent s\'inscrire, nous vous invitons afin que vous leurs présentiez votre parcours. Un gouter aura ensuite lui pour échanger avec vos anciens professeurs.', '5 avenue du Général de Gaulle, Dugny, 93440', '2019-12-14', '13:30:00', '18:00:00', 45433),
(26, 'Repas de Noël 2019', 'Repas de Noël ', '2019-11-18 14:47:29', 'Le Lycée Privé Robert Schuman va organisé un repas de Noël pour les anciens étudiants. Il aura lieu au restaurant Le Plein Air.\r\nAu menu, foie gras, terrines de crevettes, cuisses de canard, pommes de terres à la sauce de marrons et en dessert, une bûche de noël.\r\nVenez nombreux !', 'Rue des Quinconces, 95400 Arnouville', '2019-12-20', '12:00:00', '14:00:00', 65767),
(27, 'Exposition de pièces mécaniques des BTS CPRP', 'Exposition de pièces mécaniques', '2019-11-18 14:56:04', 'Etudiants, étudiantes ! Cette année, venez vivre la première édition de l\'exposition des pièces mécaniques réalisées par les élèves de BTS CPRP 1 et 2. \r\nCes pièces ont été réalisées dans le cadre des projets qu\'ils ont effectuée au long de leurs années d\'apprentissage.\r\nLa plus belle pièce sera élue par un jury composé de professeurs de CPRP.\r\nL\'exposition aura lieu dans le CDI. ', '5 avenue du Général de Gaulle, Dugny, 93440', '2020-02-19', '12:00:00', '13:30:00', 76567),
(28, 'Afterwork Nouvel An 2019', 'Afterwork', '2019-11-18 15:02:12', 'Chers anciens étudiants ! Afin de nous revoir, d\'échanger et de nous divertir, un afterwork va être organisé. Il aura pour thème le nouvel An et aura lieu au restaurant à  volonté Saveurs Gourmandes. ', '9 Rue Louison Bobet, 95140 Garges-les-Gonesse, France', '2020-01-25', '19:00:00', '23:00:00', 65443);

-- --------------------------------------------------------

--
-- Structure de la table `event_user`
--

DROP TABLE IF EXISTS `event_user`;
CREATE TABLE IF NOT EXISTS `event_user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_event` (`id_event`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `event_user`
--

INSERT INTO `event_user` (`id`, `id_user`, `id_event`) VALUES
(1, 9, 23),
(8, 11, 25),
(6, 10, 23),
(7, 11, 23),
(9, 12, 25);

-- --------------------------------------------------------

--
-- Structure de la table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(30) COLLATE utf8_bin NOT NULL,
  `phone` varchar(20) COLLATE utf8_bin NOT NULL,
  `adresse` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(30) COLLATE utf8_bin NOT NULL,
  `mdp` varchar(32) COLLATE utf8_bin NOT NULL,
  `role` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT 'ETU',
  `activite` datetime DEFAULT NULL,
  `date_insc` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `login`
--

INSERT INTO `login` (`id`, `nom`, `prenom`, `phone`, `adresse`, `email`, `mdp`, `role`, `activite`, `date_insc`) VALUES
(5, 'admin', 'admin', '987654321', 'rue admin', 'admin@admin.fr', '21232f297a57a5a743894a0e4a801fc3', 'ADM', '2019-11-20 20:16:40', '2019-10-30 23:50:28'),
(12, 'Rex-Harrison', 'Loudovic', '0687546532', '56 rue de Paris', 'loudovic.rexharrison@gmail.com', '0e698a8ffc1a0af622c7b4db3cb750cc', 'ETU', '2019-11-20 20:22:03', '2019-11-18 15:36:53'),
(11, 'Hebert', 'Margaux', '654342198', '55 rue d\'Aulnay', 'margauxhebert83@gmail.com', '098f6bcd4621d373cade4e832627b4f6', 'ETU', '2019-11-18 16:03:13', '2019-11-04 14:01:41');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Id_user` int(10) NOT NULL,
  `titre` varchar(255) CHARACTER SET latin1 NOT NULL,
  `texte` varchar(255) CHARACTER SET latin1 NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Id_user` (`Id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`ID`, `Id_user`, `titre`, `texte`, `date`) VALUES
(1, 5, 'Bienvenue', 'Bienvenue aux anciens étudiants !', '2019-10-30 22:17:54'),
(2, 12, 'Bonjour', 'Bonjour à tous', '2019-10-30 23:22:46'),
(3, 11, 'Salut ! ', 'Salut tout le monde !', '2019-10-30 23:26:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
