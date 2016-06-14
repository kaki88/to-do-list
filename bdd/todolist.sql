-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 12 Juin 2016 à 16:25
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `todolist`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categorie` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `categorie`) VALUES
(4, 'Divers'),
(3, 'Projets'),
(5, 'Machin'),
(6, 'Truc'),
(7, 'Bidule'),
(8, 'Chose'),
(9, 'Autres'),
(10, 'Test');

-- --------------------------------------------------------

--
-- Structure de la table `corbeille`
--

CREATE TABLE `corbeille` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `etat` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `id_categories` int(11) NOT NULL,
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

CREATE TABLE `taches` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `etat` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `id_categories` int(11) NOT NULL,
  `description` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `taches`
--

INSERT INTO `taches` (`id`, `titre`, `etat`, `date`, `id_categories`, `description`) VALUES
(6, 'Rendez-vous', 'Osef', '2016-06-18', 7, ' de 15h00 à 16h00 – rendez vous avec le banquier '),
(7, 'Telephone', 'Moyenne', '2016-06-29', 5, ' passer des coups de fil'),
(5, 'Repas', 'Moyenne', '2016-06-23', 8, ' aller diner avec des amis… '),
(3, 'Preparatif', 'Urgent', '2016-06-18', 4, 'de 8h00 à 10h00 – préparer les documents ');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `corbeille`
--
ALTER TABLE `corbeille`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `taches`
--
ALTER TABLE `taches`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT pour la table `corbeille`
--
ALTER TABLE `corbeille`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `taches`
--
ALTER TABLE `taches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
