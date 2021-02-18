-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 29 jan. 2021 à 13:28
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `simplon-appli`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `adminpassword` varchar(100) NOT NULL,
  `directaccess` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`username`, `adminpassword`, `directaccess`) VALUES
('username', '1234', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `apprenants`
--

CREATE TABLE `apprenants` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Dates_de_naissance` date NOT NULL,
  `Sexe` varchar(15) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `formation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `apprenants`
--

INSERT INTO `apprenants` (`ID`, `Email`, `Nom`, `Prenom`, `Dates_de_naissance`, `Sexe`, `ville`, `formation`) VALUES
(9, 'adrien5846@gmail.com', 'Compaoré', 'Adrien', '1996-02-07', 'Masculin', 'Ouagadougou', 'Référent digital'),
(10, 'ddiebre@gmail.com', 'Diébré', 'Tara', '1992-02-09', 'Masculin', 'Ouagadougou', 'Developpement web et web mobile'),
(11, 'zainawandaogo1@gmail.com', 'Wandaogo', 'Zainatou', '1997-09-16', 'Feminin', 'Ouagadougou', 'Référent digital'),
(12, 'sawfils510@gmail.com', 'Sawadogo', 'Harouna', '1993-10-20', 'Masculin', 'Ouagadougou', 'Référent digital'),
(13, 'lankoandemaxime7@gmail.com', 'Lankoandé', 'Maxime', '1994-05-16', 'Masculin', 'Ouagadougou', 'Developpement web et web mobile'),
(14, 'yayayarbanga@gmail.com', 'Yarbanga', 'Yaya', '1997-07-30', 'Masculin', 'Ouagadougou', 'Developpement web et web mobile'),
(15, 'alainguigma@gmail.com', 'Guigma', 'Alain', '1999-05-04', 'Masculin', 'Ouagadougou', 'Developpement web et web mobile'),
(16, 'abdoulrachiddao@gmail.com', 'Dao', 'Abdoul Razack', '1998-01-01', 'Masculin', 'Bobo-Dioulasso', 'Référent digital'),
(17, 'zionyirbabaresome@gmail.com', 'Somé', 'Romain', '1996-09-10', 'Masculin', 'Bobo-Dioulasso', 'Référent digital'),
(18, 'kouamaelisabeth12@gmail.com', 'Koama', 'Elisabeth', '1996-06-05', 'Feminin', 'Ouagadougou', 'Référent digital'),
(19, 'aboubakarycisse410@gmail.com', 'Cissé', 'Karim', '2004-05-11', 'Masculin', 'Ouagadougou', 'Développement web et web mobile');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apprenants`
--
ALTER TABLE `apprenants`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apprenants`
--
ALTER TABLE `apprenants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
