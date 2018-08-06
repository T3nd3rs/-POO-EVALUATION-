-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 06 août 2018 à 07:27
-- Version du serveur :  5.7.21
-- Version de PHP :  7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `boutique_pupuce`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_prod` int(10) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nom` char(30) COLLATE utf8mb4_bin NOT NULL,
  `type` char(30) COLLATE utf8mb4_bin DEFAULT 'divers',
  `description` char(250) COLLATE utf8mb4_bin NOT NULL,
  `image` mediumblob NOT NULL,
  `prix` int(7) NOT NULL,
  `qte` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_prod`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_prod`, `date`, `nom`, `type`, `description`, `image`, `prix`, `qte`) VALUES
(1, '2018-07-27 14:55:03', 'prod_test', 'divers', 'C\'est un test', 0x54756c6970732e6a7067, 0, 1),
(2, '2018-08-02 13:40:52', 'Croquette_', 'divers', 'c bon lol					', 0x4368727973616e7468656d756d2e6a7067, 10, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_cli` int(10) NOT NULL AUTO_INCREMENT,
  `nom` char(30) COLLATE utf8mb4_bin NOT NULL,
  `prenom` char(30) COLLATE utf8mb4_bin NOT NULL,
  `date_naissance` date NOT NULL,
  `mail` char(60) COLLATE utf8mb4_bin NOT NULL,
  `adresse` char(60) COLLATE utf8mb4_bin NOT NULL,
  `cp` char(5) COLLATE utf8mb4_bin NOT NULL,
  `ville` char(30) COLLATE utf8mb4_bin NOT NULL,
  `pseudo` char(30) COLLATE utf8mb4_bin NOT NULL,
  `mdp` char(30) COLLATE utf8mb4_bin NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tel` tinyint(14) NOT NULL,
  `class` char(255) COLLATE utf8mb4_bin NOT NULL DEFAULT 'user',
  PRIMARY KEY (`id_cli`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_cli`, `nom`, `prenom`, `date_naissance`, `mail`, `adresse`, `cp`, `ville`, `pseudo`, `mdp`, `date`, `tel`, `class`) VALUES
(1, 'test', 'test', '1999-11-11', 'test@test.com', '42, Avenue des tests', '42000', 'Testcity', 'test', 'TEST', '2018-07-27 14:30:30', 0, 'user'),
(2, 'test2', 'vrvfer', '1996-01-01', 'te4st@test.com', 'Rue des tests', '42000', 'Testcity', '2', 'test', '2018-08-05 16:08:18', 9, 'user');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
