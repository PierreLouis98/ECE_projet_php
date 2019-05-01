-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 01 mai 2019 à 09:36
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ece_amazon`
--

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `ID` int(11) NOT NULL,
  `Titre` varchar(255) NOT NULL,
  `Photos` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Vidéo` varchar(255) NOT NULL,
  `Catégorie` varchar(255) NOT NULL,
  `Prix` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`ID`, `Titre`, `Photos`, `Description`, `Vidéo`, `Catégorie`, `Prix`) VALUES
(1, 'Anciennes raquettes de tennis junior', 'raquette.jpg raquette2.jpg raquette3.jpg', 'Avec ce set de 2 anciennes raquettes de tennis junior de marque Donnay, modèle L000, vous allez pouvoir affronter votre adversaire sur un cour de tennis ou accessoiriser votre déco vintage !', 'aucune', 'Sports&Loisirs', 18),
(2, 'velo bianchi occasion', 'vélo.jpeg vélo2.jpeg vélo3.jpeg', 'velo course bianchi sempre-pro2014 cadre 57 pour taille1.70-1.80 tout carbone 3d equipe shimano tiagra triple plateaux roue libre 10vitesses roue mavic rayons plats pedales loock avec compteur prix ferme 1500euros a vendre en plus home trainer b\'twin 2 pneus neufs et rail de rangement pour 2 velos prix a determiner', '', 'Sports&Loisirs', 1300),
(3, 'Echecs - Coffret Campagne De Russie', 'échec.jpg', 'Age Minimum : 14 ans Nécessite des Piles : Non Descriptif Produit : Coffret plateau bois 40cm 32 pièces thème Campagne de Russie. Modèle : 30814', '', 'Sports&Loisirs', 107),
(4, 'Levi\'s Engineered - Jean fuselé coupe classique à ourlet torsadé - Délavage moyen', 'jean.jpg jean2.jpg jean3.jpg', 'Voici un excellent vêtement de jour\r\nTaille classique\r\nDélavage moyen\r\nFermeture à boutons\r\nPoches fonctionnelles\r\nOurlet torsadé\r\nCoupe fuselée\r\nCoupe ample au niveau des cuisses puis se resserrant des genoux aux chevilles', 'jean.mp4', 'Vêtements', 96);

-- --------------------------------------------------------

--
-- Structure de la table `logins`
--

DROP TABLE IF EXISTS `logins`;
CREATE TABLE IF NOT EXISTS `logins` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `statut` varchar(255) NOT NULL,
  `identifiant` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logins`
--

INSERT INTO `logins` (`ID`, `statut`, `identifiant`, `password`) VALUES
(1, 'administrateur', 'JeanMich', 'motdepasse123'),
(2, 'vendeur', 'thib96', 'azerty98'),
(3, 'client', 'maxence', 'mariejoseph');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `fond` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
