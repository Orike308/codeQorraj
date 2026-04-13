-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 07 avr. 2026 à 01:07
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `centre_qorraj`
--

-- --------------------------------------------------------

--
-- Structure de la table `a`
--

DROP TABLE IF EXISTS `a`;
CREATE TABLE IF NOT EXISTS `a` (
  `id_page` int NOT NULL,
  `id_partenaires` int NOT NULL,
  PRIMARY KEY (`id_page`,`id_partenaires`),
  KEY `id_partenaires` (`id_partenaires`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comporte`
--

DROP TABLE IF EXISTS `comporte`;
CREATE TABLE IF NOT EXISTS `comporte` (
  `id_page` int NOT NULL,
  `id_pop_up` int NOT NULL,
  PRIMARY KEY (`id_page`,`id_pop_up`),
  KEY `id_pop_up` (`id_pop_up`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

DROP TABLE IF EXISTS `contient`;
CREATE TABLE IF NOT EXISTS `contient` (
  `id_page` int NOT NULL,
  `id_texte` int NOT NULL,
  PRIMARY KEY (`id_page`,`id_texte`),
  KEY `id_texte` (`id_texte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `dispos`
--

DROP TABLE IF EXISTS `dispos`;
CREATE TABLE IF NOT EXISTS `dispos` (
  `id_emploi` int NOT NULL,
  `id_page` int NOT NULL,
  PRIMARY KEY (`id_emploi`,`id_page`),
  KEY `id_page` (`id_page`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

DROP TABLE IF EXISTS `emploi`;
CREATE TABLE IF NOT EXISTS `emploi` (
  `id_emploi` int NOT NULL AUTO_INCREMENT,
  `titre_emploi` varchar(50) NOT NULL,
  `taux_emploi` varchar(50) NOT NULL,
  `lieux_emploi` varchar(50) NOT NULL,
  `texte_emploi` text NOT NULL,
  `activation_emploi` tinyint(1) NOT NULL,
  `date_emploi` date NOT NULL,
  PRIMARY KEY (`id_emploi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id_image` int NOT NULL AUTO_INCREMENT,
  `nom_image` varchar(100) NOT NULL,
  `alt_image` varchar(100) NOT NULL,
  PRIMARY KEY (`id_image`),
  UNIQUE KEY `nom_image` (`nom_image`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `modifier`
--

DROP TABLE IF EXISTS `modifier`;
CREATE TABLE IF NOT EXISTS `modifier` (
  `id_utilisateur` int NOT NULL,
  `id_page` int NOT NULL,
  PRIMARY KEY (`id_utilisateur`,`id_page`),
  KEY `id_page` (`id_page`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id_page` int NOT NULL AUTO_INCREMENT,
  `nom_page` varchar(50) NOT NULL,
  `historique_page` datetime NOT NULL,
  `meta_page` text NOT NULL,
  PRIMARY KEY (`id_page`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

DROP TABLE IF EXISTS `partenaires`;
CREATE TABLE IF NOT EXISTS `partenaires` (
  `id_partenaires` int NOT NULL AUTO_INCREMENT,
  `lien_image_partenaire` varchar(255) NOT NULL,
  `lien_site_partenaire` varchar(255) NOT NULL,
  `nom_image_partenaire` varchar(100) NOT NULL,
  `alt_image_partenaire` varchar(100) NOT NULL,
  `date_partenaires` date NOT NULL,
  PRIMARY KEY (`id_partenaires`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `partenaires`
--

INSERT INTO `partenaires` (`id_partenaires`, `lien_image_partenaire`, `lien_site_partenaire`, `nom_image_partenaire`, `alt_image_partenaire`, `date_partenaires`) VALUES
(1, '/codeqorraj/public/asset/Partenaires/', 'https://www.hopitalduvalais.ch/', 'hopitalDuValais.png', 'Logo hopital Du Valais', '2026-03-19'),
(2, '/codeqorraj/public/asset/Partenaires/', 'https://emmaus-vs.ch/', 'Emmaus.png', 'Image logo Emmaus valais', '2026-03-19'),
(3, '/codeqorraj/public/asset/Partenaires/', 'https://www.psyvalais.ch/', 'Psyvalais.png', 'Logo Psyvalais', '0000-00-00'),
(4, '/codeqorraj/public/asset/Partenaires/', 'https://www.cms-smz.ch/', 'CMS.png', 'Logo SMS-SMZ', '0000-00-00');

-- --------------------------------------------------------

--
-- Structure de la table `pop_up`
--

DROP TABLE IF EXISTS `pop_up`;
CREATE TABLE IF NOT EXISTS `pop_up` (
  `id_pop_up` int NOT NULL AUTO_INCREMENT,
  `titre_pop_up` text NOT NULL,
  `contenu_pop_up` text NOT NULL,
  `bt_pop_up` varchar(25) NOT NULL,
  PRIMARY KEY (`id_pop_up`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pop_up`
--

INSERT INTO `pop_up` (`id_pop_up`, `titre_pop_up`, `contenu_pop_up`, `bt_pop_up`) VALUES
(1, 'QUALITÉ ET EXPERTISE', 'La direction du Centre Qorraj accorde une importance particulière à la formation continue externe et interne dans le but d’offrir une prise en charge de qualité à ses patients. <br><br> Des formations internes sont organisées telles que des supervisions par des médecins spécialisés, des ateliers cliniques, des analyses de pratique professionnelle (APP) et encadrements individualisés.<br><br> Nous avons la chance de bénéficier de supervisions de la part de : la Dresse Von Roten (périnatalité & pédopsychiatrie), du Dr Mbarga (psychiatrie adulte) et de la Dresse Karachristou (psychogériatrie). <br><br> Par ailleurs, le personnel du Centre Qorraj possède une expertise dans des domaines spécifiques tels que la psychiatrie dans les trois tranches d’âge, les troubles d’addiction, la systémie familiale, le Mindfulness et burnout, et bien d’autres approches spécifiques. <br><br> L’équipe de soins est pluridisciplinaire et se compose : d’infirmiers-ères spécialisés-ées en psychiatrie, de plusieurs ASSC et d’auxiliaires de vie travaillant en étroite collaboration. <br><br>', 'Expertise');

-- --------------------------------------------------------

--
-- Structure de la table `possed`
--

DROP TABLE IF EXISTS `possed`;
CREATE TABLE IF NOT EXISTS `possed` (
  `id_image` int NOT NULL,
  `id_page` int NOT NULL,
  PRIMARY KEY (`id_image`,`id_page`),
  KEY `id_page` (`id_page`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int NOT NULL AUTO_INCREMENT,
  `nom_role` varchar(20) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `texte`
--

DROP TABLE IF EXISTS `texte`;
CREATE TABLE IF NOT EXISTS `texte` (
  `id_texte` int NOT NULL AUTO_INCREMENT,
  `titre_texte` text NOT NULL,
  `contenu_texte` text NOT NULL,
  PRIMARY KEY (`id_texte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(25) NOT NULL,
  `mdp_utilisateur` varchar(255) NOT NULL,
  `date_inscription` datetime NOT NULL,
  `activation_utilisateur` tinyint(1) NOT NULL,
  `id_role` int NOT NULL,
  PRIMARY KEY (`id_utilisateur`),
  KEY `id_role` (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `a`
--
ALTER TABLE `a`
  ADD CONSTRAINT `a_ibfk_1` FOREIGN KEY (`id_page`) REFERENCES `page` (`id_page`),
  ADD CONSTRAINT `a_ibfk_2` FOREIGN KEY (`id_partenaires`) REFERENCES `partenaires` (`id_partenaires`);

--
-- Contraintes pour la table `comporte`
--
ALTER TABLE `comporte`
  ADD CONSTRAINT `comporte_ibfk_1` FOREIGN KEY (`id_page`) REFERENCES `page` (`id_page`),
  ADD CONSTRAINT `comporte_ibfk_2` FOREIGN KEY (`id_pop_up`) REFERENCES `pop_up` (`id_pop_up`);

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `contient_ibfk_1` FOREIGN KEY (`id_page`) REFERENCES `page` (`id_page`),
  ADD CONSTRAINT `contient_ibfk_2` FOREIGN KEY (`id_texte`) REFERENCES `texte` (`id_texte`);

--
-- Contraintes pour la table `dispos`
--
ALTER TABLE `dispos`
  ADD CONSTRAINT `dispos_ibfk_1` FOREIGN KEY (`id_emploi`) REFERENCES `emploi` (`id_emploi`),
  ADD CONSTRAINT `dispos_ibfk_2` FOREIGN KEY (`id_page`) REFERENCES `page` (`id_page`);

--
-- Contraintes pour la table `modifier`
--
ALTER TABLE `modifier`
  ADD CONSTRAINT `modifier_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `modifier_ibfk_2` FOREIGN KEY (`id_page`) REFERENCES `page` (`id_page`);

--
-- Contraintes pour la table `possed`
--
ALTER TABLE `possed`
  ADD CONSTRAINT `possed_ibfk_1` FOREIGN KEY (`id_image`) REFERENCES `image` (`id_image`),
  ADD CONSTRAINT `possed_ibfk_2` FOREIGN KEY (`id_page`) REFERENCES `page` (`id_page`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
