-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 28 jan. 2023 à 11:43
-- Version du serveur :  10.3.37-MariaDB-log
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `terou_client`
--

-- --------------------------------------------------------

--
-- Structure de la table `user2`
--

CREATE TABLE `user2` (
  `nom` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `typeDelocal` varchar(255) NOT NULL,
  `localite` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `dateLouer` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `user2`
--

INSERT INTO `user2` (`nom`, `tel`, `typeDelocal`, `localite`, `mail`, `dateLouer`) VALUES
('', 0, 'localité', 'localité', '', '2022-07-06 16:51:30'),
('Abdou wahab Ba', 775435140, 'CHAMBRE', 'PA', 'wahabba124@gmail.com', '2022-07-22 18:04:48'),
('Aïssata', 33333333, 'APPARTEMENT', 'KM', '', '2022-06-11 00:56:34'),
('Aminata sene', 761923321, 'localité', 'localité', 'aminata.sene04@gmail.com', '2022-07-24 14:44:23'),
('Anastasia', 778147648, 'MAISON', 'KM', 'anas@gmail.com', '2022-07-14 05:12:22'),
('Anastasie Fernandez', 778147648, 'MAISON', 'Touwn', 'blaizegomis2021@gmail.com', '2022-06-14 16:58:07'),
('Blaize', 77777777, 'CHAMBRE', 'Pikine', 'blaizegomis97@gmail.com', '2022-06-10 18:58:26'),
('Blaize gomis', 221, 'CHAMBRE', 'Pikine', 'Blaize.gomis@uvs.edu.sn', '2022-07-03 16:51:21'),
('Douda', 765983625, 'STUDIOT', 'PA', 'scolarite@uvs.edu.sn', '2022-07-03 16:59:09'),
('FALL', 222222245, 'MAISON', 'Pikine', 'blaizegomis97@gmail.com', '2022-06-10 20:50:58'),
('fama', 775983120, 'MAISON', 'KM', 'fama456@gmail.com', '2022-08-04 09:29:43'),
('GAULL', 222222245, 'MAISON', 'Pikine', 'blaizegomis97@gmail.com', '2022-06-10 20:49:10'),
('Gomel', 334526983, 'APPARTEMENT', 'PA', 'blaiseneymar@hotmail.fr', '2022-07-03 17:24:38'),
('Hhjjj', 0, 'APPARTEMENT', 'PA', 'scolarite@uvs.edu.sn', '2022-07-13 08:38:33'),
('jean', 765674554, 'STUDIOT', 'KM', 'jeangomis@gmail.com', '2022-06-10 20:34:03'),
('JOU', 8880000, 'CHAMBRE', 'Guediawaye', 'terouimmo@gmail.com', '2022-06-10 20:58:20'),
('koup', 8880000, 'CHAMBRE', 'Guediawaye', 'terouimmo@gmail.com', '2022-06-10 23:46:13'),
('Laye', 5677867, 'MAISON', 'KM', 'molpol@gmail.com', '2022-06-25 15:55:43'),
('loup', 8880000, 'CHAMBRE', 'Guediawaye', 'terouimmo@gmail.com', '2022-06-10 23:44:39'),
('Maïmouna', 33333333, 'APPARTEMENT', 'KM', '', '2022-06-11 00:53:23'),
('Mouhamadou', 778433543, 'CHAMBRE', 'localité', 'mouhamadoumoustaphadiouf72@gmail.COM', '2022-07-06 16:58:14'),
('Moussa', 2222222, 'STUDIOT', 'KM', 'moussa97@gmail.com', '2022-06-10 19:02:56'),
('Moussa Ba', 773055841, 'APPARTEMENT', 'Touwn', '', '2022-07-24 11:49:48'),
('Moustapha ', 785236556, 'APPARTEMENT', 'KM', 'moustapha@gmaile.com', '2022-07-23 18:30:25'),
('Ndeye mareme sow', 775963460, 'CHAMBRE', 'Pikine', '', '2022-12-16 07:31:18'),
('Ndong', 771467908, 'STUDIOT', 'Guediawaye', 'mbayangndong071@gmail.com', '2022-07-24 17:17:19'),
('Nogaye Djitte', 770921245, 'CHAMBRE', 'localité', '', '2022-07-14 01:28:06'),
('PAUL', 765674554, 'STUDIOT', 'KM', 'jeangomis@gmail.com', '2022-06-10 20:39:20'),
('Segnane ', 771903621, 'CHAMBRE', 'KM', '', '2022-07-24 07:35:32'),
('SIPA diaby (mini studio liberté 6)', 774437830, 'localité', 'Touwn', 'aissatatounkara67@gmail.com', '2022-07-26 17:11:27'),
('SOULEY', 765674554, 'STUDIOT', 'KM', 'jeangomis@gmail.com', '2022-06-10 20:47:59');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `user2`
--
ALTER TABLE `user2`
  ADD PRIMARY KEY (`nom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
