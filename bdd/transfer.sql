-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 20 Décembre 2018 à 14:47
-- Version du serveur :  10.3.11-MariaDB-1:10.3.11+maria~bionic-log
-- Version de PHP :  7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `transfer`
--

-- --------------------------------------------------------

--
-- Structure de la table `fichier`
--

CREATE TABLE `fichier` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `expediteur_id` int(11) DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `type_mine` varchar(45) DEFAULT NULL,
  `key_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fichier`
--

INSERT INTO `fichier` (`id`, `nom`, `expediteur_id`, `taille`, `type_mine`, `key_file`) VALUES
(27, 'cv.pdf', NULL, NULL, '', NULL),
(28, 'cv.pdf', NULL, NULL, '', NULL),
(29, 'cv.pdf', NULL, NULL, '', NULL),
(30, 'cv_ibrahim (1).pdf', NULL, NULL, '', NULL),
(31, 'cv.pdf', 60, 145236, 'image/png', 'gfdg46dfg4dfg4df6g4df'),
(32, 'Capture.PNG', 68, 4013, 'image/png', '5c1b9a83a1e3b'),
(33, 'petanque.jpg', 68, 400670, 'image/jpeg', '5c1b9a83a2ed6'),
(34, 'Capture.PNG', 69, 4013, 'image/png', '5c1b9a981f7b5'),
(35, 'petanque.jpg', 69, 400670, 'image/jpeg', '5c1b9a9820722'),
(36, 'Capture.PNG', 70, 4013, 'image/png', '5c1b9adc2a0e6'),
(37, 'petanque.jpg', 70, 400670, 'image/jpeg', '5c1b9adc2ad61');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `expediteur_id` (`expediteur_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `fichier`
--
ALTER TABLE `fichier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD CONSTRAINT `fichier_ibfk_1` FOREIGN KEY (`expediteur_id`) REFERENCES `expediteur` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
