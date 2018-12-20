-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 20 Décembre 2018 à 14:57
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
-- Structure de la table `destinataire`
--

CREATE TABLE `destinataire` (
  `id` int(11) NOT NULL,
  `mail` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `destinataire`
--

INSERT INTO `destinataire` (`id`, `mail`) VALUES
(34, 'ibrahimsow.sow@gmail.com'),
(35, 'ibrahimsow.sow@gmail.com'),
(36, 'uuuu@mail.com'),
(37, 'ibrahimsow.sow@gmail.com'),
(38, 'b@mail.com'),
(39, 'ibrahimsow.sow@gmail.com'),
(40, 'ibrahimsow.sow@gmail.com'),
(41, 'test2@manu.lol'),
(42, 'test2@manu.lol'),
(43, 'test2@manu.lol'),
(44, 'test2@manu.lol'),
(45, 'test2@manu.lol'),
(46, 'test2@manu.lol'),
(47, 'aaaaa@aaaa.az'),
(48, 'eeeeeee@eeee.ee'),
(49, 'eeeeeee@eeee.ee'),
(50, 'eeeeeee@eeee.ee'),
(51, 'eeeeeee@eeee.ee'),
(52, 'eeeeeee@eeee.ee'),
(53, 'eeeeeee@eeee.ee'),
(54, 'eeeeeee@eeee.ee'),
(55, 'eeeeeee@eeee.ee'),
(56, 'eeeeeee@eeee.ee'),
(57, 'eeeeeee@eeee.ee');

-- --------------------------------------------------------

--
-- Structure de la table `destinataire_has_expediteur`
--

CREATE TABLE `destinataire_has_expediteur` (
  `destinataire_id` int(11) NOT NULL,
  `expediteur_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Contenu de la table `destinataire_has_expediteur`
--

INSERT INTO `destinataire_has_expediteur` (`destinataire_id`, `expediteur_id`) VALUES
(45, 58),
(46, 59),
(47, 60),
(48, 61),
(49, 62),
(50, 63),
(51, 64),
(52, 65),
(53, 66),
(54, 67),
(55, 68),
(56, 69),
(57, 70);

-- --------------------------------------------------------

--
-- Structure de la table `expediteur`
--

CREATE TABLE `expediteur` (
  `id` int(11) NOT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `date_envoi` datetime(6) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `expediteur`
--

INSERT INTO `expediteur` (`id`, `mail`, `date_envoi`, `message`) VALUES
(41, 'ibrahimsow.sow@gmail.com', '0000-00-00 00:00:00.000000', ''),
(42, 'ibrahimsow.sow@gmail.com', '0000-00-00 00:00:00.000000', ''),
(43, 'yeahh@mail.com', '0000-00-00 00:00:00.000000', ''),
(44, 'ibrahimsow.sow@gmail.com', '2018-12-17 14:56:40.000000', ''),
(45, 'b@mail.com', '2018-12-17 14:58:03.000000', ''),
(46, 'ibrahimsow.sow@gmail.com', '2018-12-17 15:00:27.000000', ''),
(47, 'ibrahimsow.sow@gmail.com', '2018-12-17 15:01:23.000000', ''),
(48, 'dsgdfgf', '2018-12-20 00:00:00.000000', ''),
(49, '', '2018-12-20 00:00:00.000000', ''),
(50, '', '2018-12-20 00:00:00.000000', ''),
(51, '', '2018-12-20 00:00:00.000000', ''),
(52, 'test@manu.fr', '2018-12-20 00:00:00.000000', ''),
(53, 'test@manu.fr', '2018-12-20 00:00:00.000000', ''),
(54, 'test@manu.fr', '2018-12-20 00:00:00.000000', ''),
(55, 'test@manu.fr', '2018-12-20 00:00:00.000000', ''),
(56, 'test@manu.fr', '2018-12-20 00:00:00.000000', ''),
(57, 'test@manu.fr', '2018-12-20 00:00:00.000000', ''),
(58, 'test@manu.fr', '2018-12-20 00:00:00.000000', ''),
(59, 'test@manu.fr', '2018-12-20 00:00:00.000000', ' jyj jty jtyuj tyuty utyutyu tyuty uytuytuyuyt uty'),
(60, 'fghfghgh@hfghfgh.hgg', '2018-12-20 00:00:00.000000', ' d gdfgdf gdfg'),
(61, 'zzzzzz@zzzzz.zz', '2018-12-20 00:00:00.000000', ' eeeee ee ee ee e e e e e e '),
(62, 'zzzzzz@zzzzz.zz', '2018-12-20 00:00:00.000000', ' eeeee ee ee ee e e e e e e '),
(63, 'zzzzzz@zzzzz.zz', '2018-12-20 00:00:00.000000', ' eeeee ee ee ee e e e e e e '),
(64, 'zzzzzz@zzzzz.zz', '2018-12-20 00:00:00.000000', ' eeeee ee ee ee e e e e e e '),
(65, 'zzzzzz@zzzzz.zz', '2018-12-20 00:00:00.000000', ' eeeee ee ee ee e e e e e e '),
(66, 'zzzzzz@zzzzz.zz', '2018-12-20 00:00:00.000000', ' eeeee ee ee ee e e e e e e '),
(67, 'zzzzzz@zzzzz.zz', '2018-12-20 00:00:00.000000', ' eeeee ee ee ee e e e e e e '),
(68, 'zzzzzz@zzzzz.zz', '2018-12-20 00:00:00.000000', ' eeeee ee ee ee e e e e e e '),
(69, 'zzzzzz@zzzzz.zz', '2018-12-20 00:00:00.000000', ' eeeee ee ee ee e e e e e e '),
(70, 'zzzzzz@zzzzz.zz', '2018-12-20 00:00:00.000000', ' eeeee ee ee ee e e e e e e ');

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
-- Index pour la table `destinataire`
--
ALTER TABLE `destinataire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `destinataire_has_expediteur`
--
ALTER TABLE `destinataire_has_expediteur`
  ADD PRIMARY KEY (`destinataire_id`,`expediteur_id`) USING BTREE,
  ADD KEY `fk_destinataire_has_expediteur_expediteur1_idx` (`expediteur_id`) USING BTREE,
  ADD KEY `fk_destinataire_has_expediteur_destinataire1_idx` (`destinataire_id`) USING BTREE;

--
-- Index pour la table `expediteur`
--
ALTER TABLE `expediteur`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `destinataire`
--
ALTER TABLE `destinataire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT pour la table `expediteur`
--
ALTER TABLE `expediteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT pour la table `fichier`
--
ALTER TABLE `fichier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `destinataire_has_expediteur`
--
ALTER TABLE `destinataire_has_expediteur`
  ADD CONSTRAINT `fk_destinataire_has_expediteur_destinataire1` FOREIGN KEY (`destinataire_id`) REFERENCES `destinataire` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_destinataire_has_expediteurr_fichier1` FOREIGN KEY (`expediteur_id`) REFERENCES `expediteur` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `fichier`
--
ALTER TABLE `fichier`
  ADD CONSTRAINT `fichier_ibfk_1` FOREIGN KEY (`expediteur_id`) REFERENCES `expediteur` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
