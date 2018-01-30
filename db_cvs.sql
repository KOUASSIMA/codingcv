-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 29 jan. 2018 à 23:18
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_cvs`
--

-- --------------------------------------------------------

--
-- Structure de la table `centreinteret`
--

CREATE TABLE `centreinteret` (
  `idinteret` int(11) NOT NULL,
  `centre interet` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `centreinteret`
--

INSERT INTO `centreinteret` (`idinteret`, `centre interet`, `description`) VALUES
(1, '', 'natation'),
(2, '', 'natation'),
(3, '', 'natation');

-- --------------------------------------------------------

--
-- Structure de la table `codeuses`
--

CREATE TABLE `codeuses` (
  `id_codeuses` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `datenaissance` date NOT NULL,
  `description` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` int(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `codeuses`
--

INSERT INTO `codeuses` (`id_codeuses`, `nom`, `prenom`, `datenaissance`, `description`, `email`, `telephone`, `password`, `image`) VALUES
(1, 'n\'guessan', 'betty', '0000-00-00', 'commercial', 'cafermess@facebook.com', 78532011, 'b3725122c9d3bfef5664619e08e31877', ''),
(2, 'kouassi', 'marie', '2018-01-30', '', 'cafermess7@gmail.com', 57629941, 'b3725122c9d3bfef5664619e08e31877', ''),
(3, 'kouassi', 'marie', '2018-01-30', '', 'cafermess7@gmail.com', 57629941, 'b3725122c9d3bfef5664619e08e31877', ''),
(4, 'kouassi', 'marie', '2018-01-30', 'commercante', 'cafermess7@gmail.com', 57629941, 'b3725122c9d3bfef5664619e08e31877', ''),
(5, 'kouassi', 'marie', '2018-01-30', 'commercante', 'cafermess7@gmail.com', 57629941, 'b3725122c9d3bfef5664619e08e31877', ''),
(6, 'kouassi', 'marie', '2018-01-14', 'charger de suivi et controle', 'cafermess@yahoo.fr', 2039670, 'b3725122c9d3bfef5664619e08e31877', ''),
(7, 'kouassi', 'marie', '2018-01-14', 'charger de suivi et controle', 'cafermess@yahoo.fr', 2039670, 'b3725122c9d3bfef5664619e08e31877', ''),
(8, 'kouassi', 'marie', '2018-01-24', 'commercante', 'cafermess7@gmail.com', 57629941, 'b3725122c9d3bfef5664619e08e31877', ''),
(9, 'kouassi', 'marie', '2018-01-24', 'commercante', 'cafermess7@gmail.com', 57629941, 'b3725122c9d3bfef5664619e08e31877', ''),
(10, '', '', '0000-00-00', '', '', 0, 'd41d8cd98f00b204e9800998ecf8427e', '10451069 - Copie.jpg'),
(11, 'kouassi', 'marie', '2018-01-10', '', 'kouass3@gmail.com', 78532011, 'b3725122c9d3bfef5664619e08e31877', ''),
(12, 'kouassi', 'marie', '2018-01-10', '', 'kouass3@gmail.com', 78532011, 'b3725122c9d3bfef5664619e08e31877', ''),
(13, 'kouassi', 'marie', '2018-01-10', '', 'kouass3@gmail.com', 78532011, 'b3725122c9d3bfef5664619e08e31877', ''),
(14, 'kouassi', 'marie', '2018-01-10', '', 'kouass3@gmail.com', 78532011, 'b3725122c9d3bfef5664619e08e31877', ''),
(15, 'kouassi', 'marie', '2018-01-10', '', 'kouass3@gmail.com', 78532011, 'b3725122c9d3bfef5664619e08e31877', ''),
(16, 'kouassi', 'marie', '2018-01-10', '', 'kouass3@gmail.com', 78532011, 'b3725122c9d3bfef5664619e08e31877', ''),
(17, 'kouassi', 'marie', '2018-01-10', '', 'kouass3@gmail.com', 78532011, 'b3725122c9d3bfef5664619e08e31877', ''),
(18, 'salimata', 'salimata', '2018-01-28', 'codeuse pro', 'salimata@yahoo.fr', 78532011, '2cd9ca3094ad6bfa4fba4f5d3c786ac2', '10414460.jpg'),
(19, 'salimata', 'salimata', '2018-01-10', 'codeuse', 'salimata@yahoo.fr', 78532011, '2cd9ca3094ad6bfa4fba4f5d3c786ac2', '11646094 - Copie.jpg'),
(20, 'salimata', 'salimata', '2018-01-10', 'codeuse', 'salimata@yahoo.fr', 78532011, '2cd9ca3094ad6bfa4fba4f5d3c786ac2', '11646094 - Copie.jpg'),
(21, 'salimata', 'salimata', '2018-01-10', 'codeuse', 'salimata@yahoo.fr', 78532011, '2cd9ca3094ad6bfa4fba4f5d3c786ac2', '11646094 - Copie.jpg'),
(22, 'salimata', 'salimata', '2018-01-10', 'codeuse', 'salimata@yahoo.fr', 78532011, '2cd9ca3094ad6bfa4fba4f5d3c786ac2', '11646094 - Copie.jpg'),
(23, 'salimata', 'salimata', '2018-01-10', 'codeuse', 'salimata@yahoo.fr', 78532011, '2cd9ca3094ad6bfa4fba4f5d3c786ac2', 'box.png'),
(24, 'salimata', 'salimata', '2018-01-10', 'codeuse', 'salimata@yahoo.fr', 78532011, '2cd9ca3094ad6bfa4fba4f5d3c786ac2', 'box.png');

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE `cv` (
  `id_cv` int(11) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL,
  `specialisation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cv`
--

INSERT INTO `cv` (`id_cv`, `facebook`, `twitter`, `github`, `specialisation`) VALUES
(1, '', '', '', '0'),
(2, '', '', '', '0'),
(3, '', '', '', '0'),
(4, '', '', '', '0'),
(5, '', '', '', '0'),
(6, 'cafermess@facebook.com', 'cafermess@twitter.com', 'cafermess@gihub.com', '0'),
(7, 'cafermess@facebook.com', 'cafermess@twitter.com', 'cafermess@gihub.com', 'developpeuse');

-- --------------------------------------------------------

--
-- Structure de la table `diplomes`
--

CREATE TABLE `diplomes` (
  `iddiplome` int(11) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `dateobtention` int(20) NOT NULL,
  `etablissement` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `diplomes`
--

INSERT INTO `diplomes` (`iddiplome`, `libelle`, `dateobtention`, `etablissement`) VALUES
(1, 'genie civil', 2008, 'loko');

-- --------------------------------------------------------

--
-- Structure de la table `experiences`
--

CREATE TABLE `experiences` (
  `id_experiences` int(11) NOT NULL,
  `posteoccupe` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date NOT NULL,
  `entreprise` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `experiences`
--

INSERT INTO `experiences` (`id_experiences`, `posteoccupe`, `description`, `datedebut`, `datefin`, `entreprise`) VALUES
(1, '', '', '0000-00-00', '0000-00-00', ''),
(2, 'directeur', 'charge des affaires financieres', '0000-00-00', '0000-00-00', 'acena'),
(3, 'directeur', 'charge des affaires financieres', '0000-00-00', '0000-00-00', 'acena'),
(4, 'chef de service', 'superviseur les travaux', '0000-00-00', '2018-09-27', 'bnetd');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `centreinteret`
--
ALTER TABLE `centreinteret`
  ADD PRIMARY KEY (`idinteret`);

--
-- Index pour la table `codeuses`
--
ALTER TABLE `codeuses`
  ADD PRIMARY KEY (`id_codeuses`);

--
-- Index pour la table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id_cv`);

--
-- Index pour la table `diplomes`
--
ALTER TABLE `diplomes`
  ADD PRIMARY KEY (`iddiplome`);

--
-- Index pour la table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id_experiences`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `centreinteret`
--
ALTER TABLE `centreinteret`
  MODIFY `idinteret` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `codeuses`
--
ALTER TABLE `codeuses`
  MODIFY `id_codeuses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `cv`
--
ALTER TABLE `cv`
  MODIFY `id_cv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `diplomes`
--
ALTER TABLE `diplomes`
  MODIFY `iddiplome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id_experiences` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
