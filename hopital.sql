-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 03 Avril 2016 à 10:12
-- Version du serveur :  5.6.20-log
-- Version de PHP :  5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `hopital`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambres`
--

CREATE TABLE IF NOT EXISTS `chambres` (
`numcham` int(11) NOT NULL,
  `numsec` int(11) DEFAULT NULL,
  `idpat` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=61 ;

--
-- Contenu de la table `chambres`
--

INSERT INTO `chambres` (`numcham`, `numsec`, `idpat`) VALUES
(1, 1, NULL),
(2, 1, 1),
(3, 1, NULL),
(4, 1, NULL),
(5, 1, NULL),
(6, 1, NULL),
(7, 1, NULL),
(8, 1, NULL),
(9, 1, NULL),
(10, 1, NULL),
(11, 2, NULL),
(12, 2, NULL),
(13, 2, NULL),
(14, 2, NULL),
(15, 2, NULL),
(16, 2, NULL),
(17, 2, NULL),
(18, 2, NULL),
(19, 2, NULL),
(20, 2, NULL),
(21, 3, NULL),
(22, 3, NULL),
(23, 3, NULL),
(24, 3, NULL),
(25, 3, NULL),
(26, 3, NULL),
(27, 3, NULL),
(28, 3, NULL),
(29, 3, NULL),
(30, 3, NULL),
(31, 4, NULL),
(32, 4, NULL),
(33, 4, NULL),
(34, 4, NULL),
(35, 4, NULL),
(36, 4, NULL),
(37, 4, NULL),
(38, 4, NULL),
(39, 4, NULL),
(40, 4, NULL),
(41, 5, NULL),
(42, 5, NULL),
(43, 5, NULL),
(44, 5, NULL),
(45, 5, NULL),
(46, 5, NULL),
(47, 5, NULL),
(48, 5, NULL),
(49, 5, NULL),
(50, 5, NULL),
(51, 6, NULL),
(52, 6, NULL),
(53, 6, NULL),
(54, 6, NULL),
(55, 6, NULL),
(56, 6, NULL),
(57, 6, NULL),
(58, 6, NULL),
(59, 6, NULL),
(60, 6, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE IF NOT EXISTS `connexion` (
  `login` varchar(30) CHARACTER SET latin1 NOT NULL,
  `mdp` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `idemp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `connexion`
--

INSERT INTO `connexion` (`login`, `mdp`, `idemp`) VALUES
('root', 'root', 0),
('uren.c', 'root', 1),
('uren.s', 'root', 2);

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE IF NOT EXISTS `employes` (
`idemp` int(11) NOT NULL,
  `nomemp` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `preemp` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `datenaissemp` date DEFAULT NULL,
  `sexeemp` char(1) CHARACTER SET latin1 DEFAULT NULL,
  `telemp` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `adremp` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `villemp` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `cpemp` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `mailemp` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `statemp` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `numsec` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `employes`
--

INSERT INTO `employes` (`idemp`, `nomemp`, `preemp`, `datenaissemp`, `sexeemp`, `telemp`, `adremp`, `villemp`, `cpemp`, `mailemp`, `statemp`, `numsec`) VALUES
(1, 'UREN', 'Can Serkan', '1997-05-26', 'H', '0682828576', '30 allée simon bolivar', 'Bondy', '93140', 'canserkan.uren@gmail.com', 'Médecin', 1),
(2, 'UREN', 'Saffet', '1962-04-01', 'F', '0751036804', '30 allée simon bolivar', 'Bondy', '93140', 'canserkan.uren@gmail.com', 'Infirmier', 3);

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
`idpat` int(11) NOT NULL,
  `nompat` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `prepat` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `datenaisspat` date DEFAULT NULL,
  `sexepat` char(1) CHARACTER SET latin1 DEFAULT NULL,
  `telpat` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `adrpat` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `villpat` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `cppat` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `mailpat` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `nomres` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `preres` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `datenaissres` date DEFAULT NULL,
  `sexeres` char(1) CHARACTER SET latin1 DEFAULT NULL,
  `telres` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `adrres` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `villres` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `cpres` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `mailres` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `idemp` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `patients`
--

INSERT INTO `patients` (`idpat`, `nompat`, `prepat`, `datenaisspat`, `sexepat`, `telpat`, `adrpat`, `villpat`, `cppat`, `mailpat`, `nomres`, `preres`, `datenaissres`, `sexeres`, `telres`, `adrres`, `villres`, `cpres`, `mailres`, `idemp`) VALUES
(1, 'caca', 'ahbhhazb', '1997-05-26', 'H', '0148474962', '30 allÃ©e simon bolivar', 'Bondy', '93140', 'canserkan.uren@gmail.Com', 'cacacajnca', 'cfvbn,', '1997-05-26', 'H', '56156452', 'sdfghjkl:', 'fvbn,;', '52156', 'cajhbbjefnef', 0);

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

CREATE TABLE IF NOT EXISTS `secteur` (
`numsec` int(11) NOT NULL,
  `nomsec` varchar(30) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `secteur`
--

INSERT INTO `secteur` (`numsec`, `nomsec`) VALUES
(1, 'Pédiatrie'),
(2, 'Neurologie'),
(3, 'Odontologie'),
(4, 'Pneumologie'),
(5, 'Dermatologie'),
(6, 'Cardiologie');

-- --------------------------------------------------------

--
-- Structure de la table `suivis_patients`
--

CREATE TABLE IF NOT EXISTS `suivis_patients` (
`numsuivis` int(11) NOT NULL,
  `idpat` int(11) NOT NULL DEFAULT '0',
  `etat` varchar(10) CHARACTER SET latin1 DEFAULT NULL,
  `commentaire` mediumtext CHARACTER SET latin1,
  `datesuivis` date DEFAULT NULL,
  `idemp` int(11) DEFAULT NULL,
  `numsec` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `suivis_patients`
--

INSERT INTO `suivis_patients` (`numsuivis`, `idpat`, `etat`, `commentaire`, `datesuivis`, `idemp`, `numsec`) VALUES
(1, 1, NULL, 'CrÃ©ation dossier', '2016-03-30', 0, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `chambres`
--
ALTER TABLE `chambres`
 ADD PRIMARY KEY (`numcham`), ADD KEY `numsec` (`numsec`), ADD KEY `idpat` (`idpat`);

--
-- Index pour la table `connexion`
--
ALTER TABLE `connexion`
 ADD PRIMARY KEY (`login`), ADD KEY `idemp` (`idemp`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
 ADD PRIMARY KEY (`idemp`), ADD KEY `numsec` (`numsec`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
 ADD PRIMARY KEY (`idpat`), ADD KEY `idemp` (`idemp`);

--
-- Index pour la table `secteur`
--
ALTER TABLE `secteur`
 ADD PRIMARY KEY (`numsec`);

--
-- Index pour la table `suivis_patients`
--
ALTER TABLE `suivis_patients`
 ADD PRIMARY KEY (`numsuivis`,`idpat`), ADD KEY `idemp` (`idemp`), ADD KEY `idpat` (`idpat`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `chambres`
--
ALTER TABLE `chambres`
MODIFY `numcham` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
MODIFY `idemp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
MODIFY `idpat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `secteur`
--
ALTER TABLE `secteur`
MODIFY `numsec` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `suivis_patients`
--
ALTER TABLE `suivis_patients`
MODIFY `numsuivis` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
