-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : sam. 23 mars 2024 à 08:47
-- Version du serveur : 5.7.39
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `kry`
--

-- --------------------------------------------------------

--
-- Structure de la table `demandes_pieces`
--

CREATE TABLE `demandes_pieces` (
  `id` int(11) NOT NULL,
  `ordre_reparation` int(11) NOT NULL,
  `demande` varchar(255) DEFAULT NULL,
  `piece_libelle` varchar(100) NOT NULL,
  `piece_reference` varchar(100) DEFAULT NULL,
  `operateur` varchar(100) DEFAULT NULL,
  `statut` enum('in_progress','treated') NOT NULL DEFAULT 'in_progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `demandes_pieces`
--

INSERT INTO `demandes_pieces` (`id`, `ordre_reparation`, `demande`, `piece_libelle`, `piece_reference`, `operateur`, `statut`) VALUES
(1, 751234, 'add', 'Filtre à huile', '', 'tmartin', 'in_progress'),
(2, 4, 'change', 'filtre', '', 'tmartin', 'in_progress');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Reception'),
(3, 'Magasin'),
(4, 'Atelier'),
(5, 'Direction');

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

CREATE TABLE `sites` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sites`
--

INSERT INTO `sites` (`id`, `name`) VALUES
(1, 'St-Fons'),
(2, 'Caluire'),
(3, 'Bourgoin'),
(4, 'Vienne'),
(5, 'Francheville');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `utilisateur` varchar(50) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `roles` int(11) DEFAULT NULL,
  `site` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `utilisateur`, `mot_de_passe`, `email`, `roles`, `site`) VALUES
(1, 'tmartin', '$2y$10$99fNAuI13Ptlt/CS7KswXOE8b392T0M6JcWNQySJkPx1XhkJ7OO6u', 'tmartin@gmail.com', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demandes_pieces`
--
ALTER TABLE `demandes_pieces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `demandes_pieces`
--
ALTER TABLE `demandes_pieces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
