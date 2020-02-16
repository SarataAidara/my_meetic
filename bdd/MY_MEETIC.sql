-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Dim 30 Juin 2019 à 21:12
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `MY_MEETIC`
--

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `inscription`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `inscription` (
`id_person` int(11)
,`pseudo` varchar(255)
,`name` varchar(255)
,`firstname` varchar(255)
,`birthdate` varchar(255)
,`sexe` varchar(255)
,`city` varchar(255)
,`email` varchar(255)
,`password` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure de la table `my_meetic`
--

CREATE TABLE `my_meetic` (
  `id_person` int(11) NOT NULL,
  `pseudo` varchar(255) CHARACTER SET latin1 NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `birthdate` varchar(255) NOT NULL,
  `sexe` varchar(255) CHARACTER SET latin1 NOT NULL,
  `city` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `my_meetic`
--

INSERT INTO `my_meetic` (`id_person`, `pseudo`, `name`, `firstname`, `birthdate`, `sexe`, `city`, `email`, `password`) VALUES
(1, 'Aidara', 'sarata49', 'feminin', 'Sarata', '1994-11-03', 'Paris', 'sarata.aidara@hotmail.fr', '975b8e62c3619c3201075c32f7a23b088da7b9d6'),
(2, 'Bellanger', 'Laure91', 'feminin', 'Laure', '1996-05-05', 'Viry', 'laure.bellanger@hotmail.fr', '92e636799168b673599f8b17f5652e066c8f5d29'),
(3, 'laurette', 'Laurette', 'feminin', 'Laurette', '1996-05-05', 'paris', 'laurette@hotmail.fr', '33a16227f12de979cb8e3033df4febc9f032ad67'),
(4, 'trinh', 'david', 'masculin', 'david', '2019-12-06', 'mée', 'aze@gk.com', 'aa743a0aaec8f7d7a1f01442503957f4d7a2d634'),
(5, 'hugo', 'hugo', 'feminin', 'hugo', '2010-11-02', 'angers', 'hu@hot.fr', '3faf7ed52fa83d583fc670a96bcf92da270d0767'),
(6, 'hugo', 'hug', 'feminin', 'hugo', '2000-11-02', 'angers', 'u@hot.fr', '27d5482eebd075de44389774fce28c69f45c8a75');

-- --------------------------------------------------------

--
-- Structure de la vue `inscription`
--
DROP TABLE IF EXISTS `inscription`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `inscription`  AS  select `my_meetic`.`id_person` AS `id_person`,`my_meetic`.`pseudo` AS `pseudo`,`my_meetic`.`name` AS `name`,`my_meetic`.`firstname` AS `firstname`,`my_meetic`.`birthdate` AS `birthdate`,`my_meetic`.`sexe` AS `sexe`,`my_meetic`.`city` AS `city`,`my_meetic`.`email` AS `email`,`my_meetic`.`password` AS `password` from `my_meetic` order by `my_meetic`.`id_person` ;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `my_meetic`
--
ALTER TABLE `my_meetic`
  ADD PRIMARY KEY (`id_person`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `my_meetic`
--
ALTER TABLE `my_meetic`
  MODIFY `id_person` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
