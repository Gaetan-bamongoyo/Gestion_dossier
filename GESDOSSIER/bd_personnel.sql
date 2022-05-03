-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 03 mai 2022 à 12:42
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bd_personnel`
--

DELIMITER $$
--
-- Procédures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc_dossier` (IN `dossier` VARCHAR(100), IN `id_` INT)  BEGIN
INSERT INTO tbl_dossier(dateAdd,code_affectation,dossier)
VALUES(NOW(),id_,dossier);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_affectation`
--

CREATE TABLE `tbl_affectation` (
  `id_affectation` int(11) NOT NULL,
  `code_document` int(11) NOT NULL,
  `code_personne` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_affectation`
--

INSERT INTO `tbl_affectation` (`id_affectation`, `code_document`, `code_personne`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 1, 2),
(4, 4, 1),
(5, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_document`
--

CREATE TABLE `tbl_document` (
  `id_document` int(11) NOT NULL,
  `designation_document` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_document`
--

INSERT INTO `tbl_document` (`id_document`, `designation_document`) VALUES
(1, 'Renseignement'),
(2, 'Contrat de travail'),
(3, 'Promotion'),
(4, 'Paie'),
(5, 'Situation familiale'),
(6, 'Discipline'),
(7, 'Conge'),
(8, 'Fiche de controle medical'),
(9, 'Sante'),
(10, 'Formation');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_dossier`
--

CREATE TABLE `tbl_dossier` (
  `id_dossier` int(11) NOT NULL,
  `dateAdd` date NOT NULL,
  `code_affectation` int(11) NOT NULL,
  `dossier` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_dossier`
--

INSERT INTO `tbl_dossier` (`id_dossier`, `dateAdd`, `code_affectation`, `dossier`) VALUES
(1, '2022-05-02', 1, '_2021.06.20_Theatre_Un lieu de refuge.docx'),
(2, '2022-05-02', 3, 'CERTIFICAT INNER JOIN.pdf'),
(3, '2022-05-02', 1, 'ABIO BAMONGOYO GAETAN.pdf'),
(4, '2022-05-02', 4, 'RELEVE G1.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_equipe`
--

CREATE TABLE `tbl_equipe` (
  `id_equipe` int(11) NOT NULL,
  `designation_equipe` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_equipe`
--

INSERT INTO `tbl_equipe` (`id_equipe`, `designation_equipe`) VALUES
(7, 'Direction'),
(8, 'Magasin'),
(9, 'Prospection'),
(10, 'Scierie'),
(11, 'Foret'),
(12, 'Garage'),
(13, 'Construction et menuiserie'),
(14, 'Gardinnage');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_personne`
--

CREATE TABLE `tbl_personne` (
  `id_personne` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `postnom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `sexe` varchar(200) NOT NULL,
  `lieu_naissance` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` text NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `email` varchar(200) NOT NULL,
  `matricule` varchar(110) NOT NULL,
  `photo` text DEFAULT NULL,
  `code_equipe` int(11) DEFAULT NULL,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_personne`
--

INSERT INTO `tbl_personne` (`id_personne`, `nom`, `postnom`, `prenom`, `sexe`, `lieu_naissance`, `date_naissance`, `adresse`, `phone`, `email`, `matricule`, `photo`, `code_equipe`, `isActive`) VALUES
(1, 'Abio', 'Bamongoyo', 'Gaetan', 'Masculin', 'Bunia', '2012-10-29', '35, Avenue Munigi, Q/ Virunga, C/Karisimbi', '817675404', 'g.a.bamongoyo@gmail.com', '1234', NULL, 7, 1),
(2, 'Hadassa', 'Etongo', 'Esther', 'Feminin', 'Isiro', '2003-08-12', '35, Avenue Munigi, Q/ Virunga, C/Karisimbi', '810107147', 'etongoesther@gmail.com', '1234', NULL, 7, 1),
(3, 'Muyaya', 'Tshilombo', 'Arsene', 'Masculin', 'Goma', '2000-02-10', '35, Avenue Munigi, Q/ Virunga, C/Karisimbi', '810107147', 'etongoesther@gmail.com', '0', NULL, 8, 1),
(4, 'Danny', 'Esiso', 'Esiso', 'Masculin', 'Kisangani', '1990-06-06', '35, Mungala, Plateau boyoma', '817675404', 'esbarakabigega@gmail.com', '1234KFNXHK', 'img_20210712_091402.jpg', 9, 1),
(5, 'Tresor', 'Mputu', 'Tresor', 'Masculin', 'Kisangani', '1800-02-20', '35, Avenue Munigi, Q/ Virunga, C/Karisimbi', '810107147', 'cdpe.gaetan@gmail.org', '1234KFNXHS', 'img_20210712_091402.jpg', 14, 1);

-- --------------------------------------------------------

--
-- Structure de la table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `isActive`) VALUES
(1, 'g.a.bamongoyo@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_affectation`
--
ALTER TABLE `tbl_affectation`
  ADD PRIMARY KEY (`id_affectation`),
  ADD KEY `fk_document` (`code_document`),
  ADD KEY `fk_personne` (`code_personne`);

--
-- Index pour la table `tbl_document`
--
ALTER TABLE `tbl_document`
  ADD PRIMARY KEY (`id_document`);

--
-- Index pour la table `tbl_dossier`
--
ALTER TABLE `tbl_dossier`
  ADD PRIMARY KEY (`id_dossier`),
  ADD KEY `fk_dossier` (`code_affectation`);

--
-- Index pour la table `tbl_equipe`
--
ALTER TABLE `tbl_equipe`
  ADD PRIMARY KEY (`id_equipe`);

--
-- Index pour la table `tbl_personne`
--
ALTER TABLE `tbl_personne`
  ADD PRIMARY KEY (`id_personne`);

--
-- Index pour la table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbl_affectation`
--
ALTER TABLE `tbl_affectation`
  MODIFY `id_affectation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tbl_document`
--
ALTER TABLE `tbl_document`
  MODIFY `id_document` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `tbl_dossier`
--
ALTER TABLE `tbl_dossier`
  MODIFY `id_dossier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tbl_equipe`
--
ALTER TABLE `tbl_equipe`
  MODIFY `id_equipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `tbl_personne`
--
ALTER TABLE `tbl_personne`
  MODIFY `id_personne` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tbl_affectation`
--
ALTER TABLE `tbl_affectation`
  ADD CONSTRAINT `fk_document` FOREIGN KEY (`code_document`) REFERENCES `tbl_document` (`id_document`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_personne` FOREIGN KEY (`code_personne`) REFERENCES `tbl_personne` (`id_personne`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tbl_dossier`
--
ALTER TABLE `tbl_dossier`
  ADD CONSTRAINT `fk_dossier` FOREIGN KEY (`code_affectation`) REFERENCES `tbl_affectation` (`id_affectation`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
