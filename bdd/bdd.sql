-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 06 Décembre 2017 à 13:02
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eldinn3wa`
--

-- --------------------------------------------------------

--
-- Structure de la table `chapitre`
--

CREATE TABLE `chapitre` (
  `id` int(11) NOT NULL,
  `partie` int(1) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  `html` text CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `css` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chapitre`
--

INSERT INTO `chapitre` (`id`, `partie`, `titre`, `image`, `html`, `css`, `date`) VALUES
(1, 2, 'Chapitre 1 - Le sommet du gouffre', 'testCH3.jpg', '<p>ggggg</p>', 'body{\n  background-color: #C3CFDB;\n\n}\nh1{\nfont-size:70px;\ncolor: #808000;}', '2017-12-01 14:01:15'),
(7, 1, 'Chapitre 3 - Sur le cable', 'roughDK.jpg', '', 'body{   \r\nbackground-color:#FFEFD5;   \r\n} \r\n\r\nimg{\r\nmargin-left: 40%;}\r\n\r\nh1{ \r\nfont-size:40px; \r\ncolor: #FA8072;\r\nfont-family: \'Khand\', sans-serif;\r\ntext-align:center;\r\n}', '2017-12-01 14:01:15'),
(2, 3, 'Chapitre 1 - Sérendipité ', 'testCH1.png', '<p>La sérendipité est le fait de réaliser une découverte scientifique ou une invention technique de façon inattendue à la suite d\'un concours de circonstances fortuit et très souvent dans le cadre d\'une recherche concernant un autre sujet. La sérendipité est le fait de « trouver autre chose que ce que l\'on cherchait », comme Christophe Colomb cherchant la route de l\'Ouest vers les Indes, et découvrant un continent inconnu des Européens. Selon la définition de Sylvie Catellin, c\'est « l\'art de prêter attention à ce qui surprend et d\'en imaginer une interprétation pertinente »</p>', 'body{   \nbackground-color: #FFE4E1;   \n} \n\nimg{\nmargin-left: 40%;}\n\nh1{ \nfont-size:30px; \ncolor: #FFA500;\nfont-family: \'Bahiana\', sans-serif;\ntext-align:center;\n}\n\np{\nmargin :0 auto;\nwidth:50%;\n}', '2017-12-01 14:01:15'),
(3, 5, 'Chapitre 1 - La forêt', 'testCH3.jpg', '', '', '2017-12-01 14:01:15'),
(4, 1, 'Chapitre 1 - Sur le fil', 'testCH1.png', '', 'body{   \r\nbackground-color:#FFEBCD;   \r\n} \r\n\r\nimg{\r\nmargin-left: 40%;}\r\n\r\nh1{ \r\nfont-size:40px; \r\ncolor:#DEB887;\r\nfont-family: \'Khand\', sans-serif;\r\ntext-align:center;\r\n}', '2017-12-01 14:01:15'),
(15, 1, 'Test 1', '../parties/img/', 'html', 'css\r\n', '2017-12-03 15:42:06'),
(6, 1, 'Chapitre 2 - Sur la corde', 'dominoFace.png', '', 'body{   \r\nbackground-color:#F0F8FF;   \r\n} \r\n\r\nimg{\r\nmargin-left: 40%;}\r\n\r\nh1{ \r\nfont-size:40px; \r\ncolor:#5F9EA0;\r\nfont-family: \'Khand\', sans-serif;\r\ntext-align:center;\r\n}', '2017-12-01 14:01:15'),
(8, 2, 'Chapitre 2 - Le fond du gouffre', 'testCH4.jpg', '', '', '2017-12-01 14:01:15'),
(9, 4, 'Chapitre 2 - Tango', 'dominoFace.png', '', '', '2017-12-01 14:01:15'),
(10, 4, 'Chapitre 3 - Lambada', 'roughDK.jpg', '', '', '2017-12-01 14:01:15'),
(11, 4, 'Chapitre 4 - Macumba', 'testCH1.png', '', '', '2017-12-01 14:01:15');

-- --------------------------------------------------------

--
-- Structure de la table `partie`
--

CREATE TABLE `partie` (
  `id` int(10) NOT NULL,
  `numero` int(10) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `aPropos` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `musique` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `partie`
--

INSERT INTO `partie` (`id`, `numero`, `titre`, `aPropos`, `description`, `image`, `musique`) VALUES
(1, 1, 'Le Seuil', 'Les cultures d\'algues', 'Vous vous trouvez dans l\'un des lieux importants d\'Eyjar i Eldinn. Ces villages permettent à la vie d\'exister. En effet, toute la flore est originaire du croisement entre cette algue et un champignon. Les citoyens qui vivent ici sont chargés de les cultiver et de récolter les spores. ', 'img/bgPartie1-anim.gif', 'musique/partie1-shrine-disintegrationOfAnEgo.mp3'),
(2, 2, 'L\'Antagonisme', 'i Fjollum', 'Ici se terre le cœur administratif d\'Eyjar i Eldinn. Appelée humoristiquement "La Forteresse" par les eldinniens, cette ville troglodyte est l\'endroit le plus peuplé de l\'archipel. Beaucoup de citoyens y vivent et y travaillent.', 'img/bgPartie2-4.jpg', 'musique/partie2-keosz-insecure.mp3'),
(3, 3, 'La Palingénésie', 'Les cristaux', 'Venir au pied de ces cristaux est une sorte de pèlerinage pour les eldienniens. Et pour le visiteur venu d\'un autre monde, cela impressionne toujours. Bien qu\'utilisés pour les voyages intersystème par portail, leur nature profonde reste encore mystérieuse. Ils font partie des éléments les plus méconnus de l\'archipel, même pour ceux dont le lien au monde est le plus fort. Ils possèdent une grande puissance.', 'img/bgPartie3-colo3.jpg', 'musique/partie3-ugasanie-thePhenomenon.mp3'),
(4, 4, 'Les Glorieuses', 'Le portail', 'Vous êtes sur la plate-forme de voyage. C\'est par ici que vous êtes entré, et c\'est par ici que vous repartirez. Ce portail est l\'unique lien entre Eyjar i Eldinn et les autres civilisations. Tous les jours y transitent marchandises et citoyens.', 'img/bgPartie4-anim-opt.gif', 'musique/partie4-atriumCarceri-theDarkMother.mp3'),
(5, 5, 'La Dichotomie', 'A propos du lieu', 'L\'archipel vu du ciel. On aperçoit en bas i Brunvatni, l\'une des cinq grandes villes d\'Eyjar i Eldinn. Mais n\'allons pas plus haut. A partir d\'une certaine altitude, il est risqué d’envoyer quoi que ce soit. Les immenses failles qui déchirent le ciel donnent directement sur la dimension énergétique du système, là où les flux s\'entrecroisent pour former des passerelles entre les mondes. Peu de chance de survie...', 'img/bgPartie5-2-colo.jpg', 'musique/partie5-apocryphosKammarheitAtriumCarceri-onesAtopTheUnknown.mp3');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chapitre`
--
ALTER TABLE `chapitre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID` (`id`);

--
-- Index pour la table `partie`
--
ALTER TABLE `partie`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `chapitre`
--
ALTER TABLE `chapitre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `partie`
--
ALTER TABLE `partie`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
