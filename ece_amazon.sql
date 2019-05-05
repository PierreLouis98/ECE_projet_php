-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 05 mai 2019 à 20:51
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
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `cardtype` varchar(255) NOT NULL,
  `cardnumber` varchar(1000) NOT NULL,
  `cardexp` varchar(255) NOT NULL,
  `cardsecu` varchar(255) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nom`, `prenom`, `sexe`, `mail`, `adresse`, `cardtype`, `cardnumber`, `cardexp`, `cardsecu`, `cardname`) VALUES
(8, 'Kirgener', 'Maxence', 'Homme', 'maxence@hotmail.fr', '33 rue des moulins', 'Mastercard', '5135 1800 0000 001', '01/20', '423', 'KIRGENER'),
(9, 'de Planta', 'Victoire', 'Femme', 'victoire@hotmail.fr', 'rue de la pompe', 'visa', '123', '12/23', '123', 'victoire'),
(10, 'Ngolo', 'Vilfrid', 'Homme', 'vilfrid@gmail.com', '18 rue de la Paix', 'amex', '4654798732111595', '02/25', '762', 'NGOLO');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) NOT NULL,
  `Photos` varchar(255) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Video` varchar(255) NOT NULL,
  `Categorie` varchar(255) NOT NULL,
  `Prix` varchar(255) NOT NULL,
  `vendu` int(50) NOT NULL,
  `id_vend` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`ID`, `Titre`, `Photos`, `Description`, `Video`, `Categorie`, `Prix`, `vendu`, `id_vend`) VALUES
(1, 'Anciennes raquettes de tennis junior', 'raquette.jpg', 'Avec ce set de 2 anciennes raquettes de tennis junior de marque Donnay, modèle L000, vous allez pouvoir affronter votre adversaire sur un cour de tennis ou accessoiriser votre déco vintage !', 'aucune', 'Sports', '18', 0, 42),
(2, 'velo bianchi occasion', 'vélo.jpeg', 'velo course bianchi sempre-pro2014 cadre 57 pour taille1.70-1.80 tout carbone 3d equipe shimano tiagra triple plateaux roue libre 10vitesses roue mavic rayons plats pedales loock avec compteur prix ferme 1500euros a vendre en plus home trainer b\'twin 2 pneus neufs et rail de rangement pour 2 velos prix a determiner', '', 'Sports', '1300', 1, 43),
(3, 'Echecs - Coffret Campagne De Russie', 'échec.jpg', 'Age Minimum : 14 ans Nécessite des Piles : Non Descriptif Produit : Coffret plateau bois 40cm 32 pièces thème Campagne de Russie. Modèle : 30814', '', 'Sports', '107', 0, 42),
(4, 'Jean fusele classique a ourlet torsade', 'jean.jpg', 'Voici un excellent vêtement de jour\r\nTaille classique\r\nDélavage moyen\r\nFermeture à boutons\r\nPoches fonctionnelles\r\nOurlet torsadé\r\nCoupe fuselée\r\nCoupe ample au niveau des cuisses puis se resserrant des genoux aux chevilles', 'jean.mp4', 'Vetements', '96', 0, 43),
(5, 'Freedom', 'Freedom.jpg', 'Musique haute qualité', '', 'Musiques', '1', 1, 43),
(6, 'La chute', 'chute.jpg', 'La Chute est en effet le récit d’une confession, d’un homme à un autre dans un bar d’Amsterdam, sous la forme d’un monologue. Jean-Baptiste Clamence, ancien avocat parisien, relate l’évènement qui a bouleversé sa vie. Avant cet évènement, Clamence se décrit comme un parfait égoïste, amoureux de lui-même. Jusqu’au soir où, rentrant chez lui, il passe sur un pont duquel il entend une jeune fille se jeter. Il ne lui porte pas secours. A partir de ce moment-là, la culpabilité gonfle au point de devenir une obsession. Cet évènement éclaire d’un jour nouveau l’ensemble de son existence, qu’il juge alors comme inutile et prétentieuse : il ne se supporte plus et vit emmuré dans le remords.', '', 'Livres', '14', 7, 42),
(38, 'Matilda', 'matilda.jpeg', 'Beau livre', '', 'Livres', '6', 0, 42),
(33, 'Robe de nuit', 'robe.jpg', 'Chemise de nuit adaptÃ©e manches mi-longues avec ouverture dans le dos, facile Ã  enfiler, ne demande pas de manipulations.', '', 'Vetements', '46', 1, 43),
(37, 'La Religion', 'religion.png', 'TrÃ¨s beau livre', '', 'Livres', '12', 0, 42);

-- --------------------------------------------------------

--
-- Structure de la table `logins`
--

DROP TABLE IF EXISTS `logins`;
CREATE TABLE IF NOT EXISTS `logins` (
  `ID` int(100) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `identifiant` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `connected` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logins`
--

INSERT INTO `logins` (`ID`, `statut`, `identifiant`, `password`, `connected`) VALUES
(1, 'administrateur', 'JeanMich', 'motdepasse123', 0),
(2, 'vendeur', 'thib96', 'azerty98', 0),
(8, 'client', 'maxence', 'mariejoseph', 0),
(9, 'client', 'vic', '123', 0),
(10, 'client', 'ngolo', 'carambar', 0),
(42, 'vendeur', 'henri@gmail.com', 'Henri', 0),
(43, 'vendeur', 'stephen@gmail.com', 'Staphan', 0);

-- --------------------------------------------------------

--
-- Structure de la table `musicslivres`
--

DROP TABLE IF EXISTS `musicslivres`;
CREATE TABLE IF NOT EXISTS `musicslivres` (
  `id` int(50) NOT NULL,
  `auteur` varchar(250) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `sortie` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `musicslivres`
--

INSERT INTO `musicslivres` (`id`, `auteur`, `titre`, `sortie`) VALUES
(6, 'Albert Camus', 'La Chute', '1956'),
(38, 'Roaldal', 'Matilda', '1988'),
(5, 'Pharrell Williams', 'Freedom', '2017'),
(37, 'Tim Willocks', 'La Religion', '2007');

-- --------------------------------------------------------

--
-- Structure de la table `sports`
--

DROP TABLE IF EXISTS `sports`;
CREATE TABLE IF NOT EXISTS `sports` (
  `id` int(50) NOT NULL,
  `marque` varchar(250) NOT NULL,
  `couleur` varchar(250) NOT NULL,
  `sport` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sports`
--

INSERT INTO `sports` (`id`, `marque`, `couleur`, `sport`) VALUES
(1, 'Babola', 'Noir', 'Tennis'),
(2, 'Decathlon', 'Bleu', 'Velo'),
(3, 'echec Master', 'Marron', 'Echec'),
(30, 'Nike', 'Ballon', 'Foot');

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `fond` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`id`, `nom`, `mail`, `pseudo`, `fond`, `photo`) VALUES
(42, 'riton', 'henri@gmail.com', 'Henri', 'henri.jpg', 'fond_stephane.jpg'),
(43, 'Plazza', 'stephen@gmail.com', 'Staphan', 'Stephane.jpg', 'fond_decran_Stephane.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `vetements`
--

DROP TABLE IF EXISTS `vetements`;
CREATE TABLE IF NOT EXISTS `vetements` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `couleur` varchar(250) NOT NULL,
  `taille` varchar(250) NOT NULL,
  `marque` varchar(250) NOT NULL,
  `sexe` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vetements`
--

INSERT INTO `vetements` (`id`, `couleur`, `taille`, `marque`, `sexe`) VALUES
(4, 'Bleu', 'M', 'Levis', 'Homme'),
(33, 'Robe de nuit', 'XL', 'Livalys', 'Homme');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
