-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 04 mai 2019 à 16:23
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
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `Titre` varchar(255) NOT NULL,
  `Photos` varchar(255) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Video` varchar(255) NOT NULL,
  `Categorie` varchar(255) NOT NULL,
  `Prix` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`ID`, `Titre`, `Photos`, `Description`, `Video`, `Categorie`, `Prix`) VALUES
(1, 'Anciennes raquettes de tennis junior', 'raquette.jpg raquette2.jpg raquette3.jpg', 'Avec ce set de 2 anciennes raquettes de tennis junior de marque Donnay, modèle L000, vous allez pouvoir affronter votre adversaire sur un cour de tennis ou accessoiriser votre déco vintage !', 'aucune', 'Sports', '18'),
(2, 'velo bianchi occasion', 'vélo.jpeg vélo2.jpeg vélo3.jpeg', 'velo course bianchi sempre-pro2014 cadre 57 pour taille1.70-1.80 tout carbone 3d equipe shimano tiagra triple plateaux roue libre 10vitesses roue mavic rayons plats pedales loock avec compteur prix ferme 1500euros a vendre en plus home trainer b\'twin 2 pneus neufs et rail de rangement pour 2 velos prix a determiner', '', 'Sports', '1300'),
(3, 'Echecs - Coffret Campagne De Russie', 'échec.jpg', 'Age Minimum : 14 ans Nécessite des Piles : Non Descriptif Produit : Coffret plateau bois 40cm 32 pièces thème Campagne de Russie. Modèle : 30814', '', 'Sports', '107'),
(4, 'Levi\'s Engineered - Jean fusele coupe classique a ourlet torsade - Delavage moyen', 'jean.jpg jean2.jpg jean3.jpg', 'Voici un excellent vêtement de jour\r\nTaille classique\r\nDélavage moyen\r\nFermeture à boutons\r\nPoches fonctionnelles\r\nOurlet torsadé\r\nCoupe fuselée\r\nCoupe ample au niveau des cuisses puis se resserrant des genoux aux chevilles', 'jean.mp4', 'Vetements', '96'),
(5, 'Freedom', 'Freedom.jpg', 'Musique haute qualité', '', 'Musiques', '1'),
(6, 'La chute', 'chute.jpg', 'La Chute est en effet le récit d’une confession, d’un homme à un autre dans un bar d’Amsterdam, sous la forme d’un monologue. Jean-Baptiste Clamence, ancien avocat parisien, relate l’évènement qui a bouleversé sa vie. Avant cet évènement, Clamence se décrit comme un parfait égoïste, amoureux de lui-même. Jusqu’au soir où, rentrant chez lui, il passe sur un pont duquel il entend une jeune fille se jeter. Il ne lui porte pas secours. A partir de ce moment-là, la culpabilité gonfle au point de devenir une obsession. Cet évènement éclaire d’un jour nouveau l’ensemble de son existence, qu’il juge alors comme inutile et prétentieuse : il ne se supporte plus et vit emmuré dans le remords.', '', 'Livres', '14'),
(27, 'La Religion', 'religion.jpg', '', '', 'Livres', '12');

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
  `connected` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `logins`
--

INSERT INTO `logins` (`ID`, `statut`, `identifiant`, `password`, `connected`) VALUES
(1, 'administrateur', 'JeanMich', 'motdepasse123', 0),
(2, 'vendeur', 'thib96', 'azerty98', 0),
(3, 'client', 'maxence', 'mariejoseph', 0),
(8, 'vendeur', 'vendeur', 'vendeur', 0);

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
(1, 'Charles', 'Le décès', '2019-05-08'),
(4, 'jkwjdhf', 'kjnzfek', 'kjnwdv'),
(6, 'Albert Camus', 'La chute', '1956'),
(4, 'h,b', 'jhg,b', 'jhn'),
(5, 'kaka', 'kaka', '2009'),
(20, 'kjh', 'rg', ''),
(21, 'pipi', 'pipipipi', 'pipi'),
(32, '', 'kiki', ''),
(25, '', 'kaka', ''),
(26, 'tim willocks', 'la religion', '2009'),
(27, 'Tim Willocks', 'La Religion', '2009');

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
  `fond` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`id`, `nom`, `mail`, `pseudo`, `fond`, `photo`) VALUES
(39, 'vendeur', 'vendeur', 'vendeur', 'addlivre.jpg', 'addsport.jpg'),
(35, 'jqj', 'juqu', 'jqj', 'addlivre.jpg', 'addmusique.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
