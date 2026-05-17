-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 17 mai 2026 à 20:16
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_agence`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(43) NOT NULL,
  `prenom` varchar(34) NOT NULL,
  `sexe` varchar(120) NOT NULL,
  `n_tele` varchar(15) NOT NULL,
  `date_naiss` date NOT NULL,
  `adress` varchar(34) NOT NULL,
  `mot_passe` varchar(14) NOT NULL,
  `ville` varchar(76) NOT NULL,
  `indice` varchar(34) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `nom`, `prenom`, `sexe`, `n_tele`, `date_naiss`, `adress`, `mot_passe`, `ville`, `indice`, `email`) VALUES
(1, 'omar', 'aliche', 'Homme', '553852344', '2023-03-10', 'berkouka', '', 'ADRAR', 'ALG(+213)', 'admin@admin.com'),
(4, 'admin', 'admin', 'homme', '0', '2000-01-13', 'berkouka', 'admin', 'tizi ouzou', '0', 'omar@admin.com');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id_commentaire` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `messages` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_commentaire`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_commentaire`, `email`, `messages`, `date`) VALUES
(3, 'omar@gmail.com', 'Voyage Facile satisfait ses clients en alliant sÃ©curitÃ© et rapiditÃ©.', '2026-05-17 19:53:07');

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

DROP TABLE IF EXISTS `paiements`;
CREATE TABLE IF NOT EXISTS `paiements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(50) DEFAULT NULL,
  `montant` decimal(10,2) DEFAULT NULL,
  `statut` varchar(50) DEFAULT NULL,
  `date_paiement` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiements`
--

INSERT INTO `paiements` (`id`, `reference`, `montant`, `statut`, `date_paiement`) VALUES
(1, '', '50000.00', 'PAYE', '2026-05-13 19:21:00'),
(2, 'VF123', '50000.00', 'PAYE', '2026-05-13 19:26:15'),
(3, 'VF-76C5505A', '50000.00', 'PAYE', '2026-05-13 19:45:09'),
(4, 'VF-76C5505A', '50000.00', 'PAYE', '2026-05-13 19:49:55'),
(5, 'VF-03C46D48', '50000.00', 'PAYE', '2026-05-13 20:21:07');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(50) DEFAULT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `depart` varchar(100) DEFAULT NULL,
  `arrive` varchar(100) DEFAULT NULL,
  `date_depart` date DEFAULT NULL,
  `heure_depart` time DEFAULT NULL,
  `date_reservation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Num_passport` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `reference` (`reference`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `reference`, `nom`, `prenom`, `email`, `depart`, `arrive`, `date_depart`, `heure_depart`, `date_reservation`, `Num_passport`, `class`) VALUES
(1, 'VF-2C944FDA', '', '', 'omaraliche46@gmail.com', 'BÃ©jaÃ¯a (BJA)', 'Paris', '2021-04-25', '10:30:00', '2026-05-12 20:58:07', '', ''),
(2, 'VF-1F6029D4', '', '', 'omaraliche46@gmail.com', 'Alger', 'Italie', '2021-10-10', '07:30:00', '2026-05-13 18:54:59', '1819827177', ''),
(3, 'VF-FC273076', '', '', 'omaraliche46@gmail.com', '', 'Italie', '2021-10-10', '07:30:00', '2026-05-13 19:04:40', '1819827177', ''),
(4, 'VF-479EB703', '', '', 'omaraliche46@gmail.com', 'Oran (ORN)', 'Italie', '2021-10-10', '07:30:00', '2026-05-13 19:10:54', '8287277', ''),
(5, 'VF-0F1C9038', '', '', 'omaraliche46@gmail.com', '', 'Paris', '2021-04-25', '10:30:00', '2026-05-13 19:22:56', '123456', ''),
(6, 'VF-CB369EE8', '', '', 'omaraliche46@gmail.com', 'BÃ©jaÃ¯a (BJA)', 'Paris', '2021-04-25', '10:30:00', '2026-05-13 19:40:34', '1888', ''),
(7, 'VF-49A26D8E', '', '', 'omaraliche46@gmail.com', 'BÃ©jaÃ¯a (BJA)', 'Paris', '2021-04-25', '10:30:00', '2026-05-13 19:42:08', '1888', 'economie'),
(8, 'VF-76C5505A', '', '', 'omaraliche46@gmail.com', 'BÃ©jaÃ¯a (BJA)', 'Paris', '2021-04-25', '10:30:00', '2026-05-13 19:44:49', '1888', 'business'),
(9, 'VF-03C46D48', 'aliche', 'omar', 'omaraliche46@gmail.com', 'Oran (ORN)', 'Paris', '2021-04-25', '10:30:00', '2026-05-13 20:20:28', '1213123', 'economie');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) DEFAULT NULL,
  `prenom` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `motp` varchar(255) DEFAULT NULL,
  `date_creation` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vol`
--

DROP TABLE IF EXISTS `vol`;
CREATE TABLE IF NOT EXISTS `vol` (
  `id_vol` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(50) NOT NULL,
  `ville_dest` varchar(50) NOT NULL,
  `ville_depart` varchar(50) NOT NULL,
  `date_depart` date NOT NULL,
  `heure_depart` time NOT NULL,
  `statut` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`id_vol`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vol`
--

INSERT INTO `vol` (`id_vol`, `reference`, `ville_dest`, `ville_depart`, `date_depart`, `heure_depart`, `statut`, `prix`) VALUES
(1, '', 'Rome (FCO)', 'Oran(ORN)', '2026-05-05', '13:34:00', 'Disponible', 0),
(2, '', 'Tunis (TUN)', 'Alger (ALG)', '2018-07-06', '18:58:00', 'Disponible', 0),
(3, '', 'Paris', 'Oran (ORN)', '2026-05-21', '21:43:00', 'Non', 0),
(4, 'VFL-F31CB548', 'Tunis (TUN)', 'Annaba (AAE)', '2026-12-01', '12:22:00', 'Disponible', 0),
(5, 'VFL-FDE93EC9', 'Rome (FCO)', 'Oran (ORN)', '2026-05-16', '13:13:00', 'Disponible', 0),
(6, 'VFL-060EA61D', 'Tunis (TUN)', 'BÃ©jaÃ¯a (BJA)', '2026-01-20', '12:34:00', 'Disponible', 66200);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
