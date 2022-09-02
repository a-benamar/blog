-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 28, 2021 at 07:10 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `contenu` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date`) VALUES
(1, 'Anthony Hopkins : « Si je fixe un chien, il finira par m’attaquer »', '« Je ne suis pas Fred Astaire ! », s’excuse le comédien de 83 ans, quand on évoque le numéro de claquettes qu’il accomplit dans The Father, le premier long-métrage de Florian Zeller. Il lui suffit d’être Anthony Hopkins.\r\n\r\nLe 26 avril, son interprétation d’un homme qui sombre dans la démence est couronnée d’un Oscar, le deuxième de sa carrière après Le Silence des agneaux (1991). Publiée dans la foulée sur les réseaux sociaux, une vidéo de remerciements montre le Britannique dansant sur du Leonard Cohen, depuis l’hôtel toscan où il passe ses vacances. Lorsqu’on le retrouve quelques semaines plus tard, toujours en Italie, pour un entretien par vidéoconférence, il médite sur tout l’inverse – les plans fixes, la mort, l’immobilité.\r\n', '2021-05-25 10:16:37'),
(2, 'Covid-19 : l’accélération de la vaccination laisse espérer un été « tranquille »', 'La page du Covid-19 pourrait-elle commencer à se tourner en France dès cet été ? Ce scénario qui paraissait très improbable il y a encore quelques semaines, quand le virus circulait bien au-dessus des seuils d’alerte dans de nombreux départements, semble désormais à portée de main. Avec l’accélération de la vaccination et l’arrivée des beaux jours, le taux d’incidence de la maladie a dégringolé, passant d’un peu moins de 226 cas pour 100 000 habitants le 29 avril, jour où a été annoncé le calendrier du déconfinement, à 120 le 19 mai, date de réouverture des terrasses, des cinémas, des musées et des commerces.', '2021-05-24 13:09:04'),
(3, 'Ligue 1 : Lille, un champion de France sans public mais pas sans mérite ni passion', 'A ce moment précis, les Lillois sont seuls au monde et presque seuls devant les deux grues d’un stade Raymond-Kopa en travaux. Quelques mètres plus loin, les Angevins forment une haie d’honneur mais désespèrent de voir les tout frais champions de France 2020-2021 enfin abandonner le rond central. Après tout, ils s’y sentent bien à sauter, chanter et s’embrasser. Même à huis clos, même par un temps d’automne, même dans une saison où il a autant fallu compter les tests PCR que les points, la joie d’un titre après 38 journées surpasse le contexte et le décorum.', '2021-05-23 13:29:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
