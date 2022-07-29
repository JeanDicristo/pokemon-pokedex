-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 29 juil. 2022 à 12:51
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Pokemon-pokédex`
--

-- --------------------------------------------------------

--
-- Structure de la table `pokemon`
--

CREATE TABLE `pokemon` (
  `id_pokemon` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `description` longtext NOT NULL,
  `type1` int(11) NOT NULL,
  `type2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pokemon`
--

INSERT INTO `pokemon` (`id_pokemon`, `number`, `name`, `description`, `type1`, `type2`) VALUES
(4, 1, 'Bulbizarre', 'Il a une étrange graine plantée sur son dos. Elle grandit avec lui depuis la naissance.', 5, 6),
(5, 149, 'Dracolosse', 'Dracolosse est capable de faire le tour de la planète en seize heures à peine. C\'est un Pokémon au grand cœur qui ramène à bon port les navires perdus dans les tempêtes.', 9, NULL),
(6, 150, 'Mewtwo', 'Mewtwo est un Pokémon créé par manipulation génétique. Cependant, bien que les connaissances scientifiques des humains aient réussi à créer son corps, elles n\'ont pas pu doter Mewtwo d\'un cœur sensible.', 15, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id_type`, `name`, `color`) VALUES
(1, 'Normal', '#A8A77A'),
(2, 'Feu', '#EE8130'),
(3, 'Eau', '#6390F0'),
(4, '#Electrik', '#F7D02C'),
(5, 'Plante', '#7AC74C'),
(6, 'Poison', '#A33EA1'),
(7, 'Acier', '#B7B7CE'),
(8, 'Glace', '#96D9D6'),
(9, 'Dragon', '#6F35FC'),
(10, 'Combat', '#C22E28'),
(11, 'Vol', '#A98FF3'),
(12, 'Spectre', '#735797'),
(13, 'Tenebre', '#705746'),
(14, 'Fée', '#D685AD'),
(15, 'Psy', '#F95587'),
(16, 'Insecte', '#A6B91A'),
(17, 'Roche', '#B6A136'),
(18, 'Sol', '#E2BF65');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id_pokemon`),
  ADD KEY `type1` (`type1`),
  ADD KEY `type2` (`type2`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id_pokemon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pokemon`
--
ALTER TABLE `pokemon`
  ADD CONSTRAINT `pokemon_ibfk_1` FOREIGN KEY (`type1`) REFERENCES `type` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pokemon_ibfk_2` FOREIGN KEY (`type2`) REFERENCES `type` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
