-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : ven. 22 avr. 2022 à 15:08
-- Version du serveur : 5.7.33
-- Version de PHP : 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `num_ouedraogo`
--
CREATE DATABASE IF NOT EXISTS `num_ouedraogo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `num_ouedraogo`;

-- --------------------------------------------------------

--
-- Structure de la table `ateliers`
--

CREATE TABLE `ateliers` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max_participants` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ateliers`
--

INSERT INTO `ateliers` (`id`, `image`, `titre`, `max_participants`) VALUES
(1, 'https://cdn.pixabay.com/photo/2015/01/08/18/25/desk-593327__340.jpg', 'Vive les ordis', 23),
(2, 'https://cdn.pixabay.com/photo/2014/09/24/14/29/macbook-459196__340.jpg', 'Les ordis toujours', 12),
(3, 'https://cdn.pixabay.com/photo/2016/02/17/15/37/laptop-1205256__340.jpg', 'Les ordis c\'est la vie', 8),
(4, 'https://cdn.pixabay.com/photo/2016/11/19/15/32/laptop-1839876__340.jpg', 'Comment construire un ordi ?', 10);

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20220422101558', '2022-04-22 10:16:30', 82);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ateliers`
--
ALTER TABLE `ateliers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ateliers`
--
ALTER TABLE `ateliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
