-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 07. Mar, 2020 18:34 PM
-- Tjener-versjon: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `arrangement`
--

DROP TABLE IF EXISTS `arrangement`;
CREATE TABLE IF NOT EXISTS `arrangement` (
  `arrangement_id` int(25) NOT NULL AUTO_INCREMENT,
  `navn` tinytext NOT NULL,
  `arrangor` longtext NOT NULL,
  `beskrivelse` longtext NOT NULL,
  `dato` date NOT NULL,
  `tid` time(4) NOT NULL,
  `type` int(1) NOT NULL,
  `bilde` varchar(25) NOT NULL,
  PRIMARY KEY (`arrangement_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `arrangement`
--

INSERT INTO `arrangement` (`arrangement_id`, `navn`, `arrangor`, `beskrivelse`, `dato`, `tid`, `type`, `bilde`) VALUES
(1, 'Klovner i Kamp', 'Kroa i Bø', 'Endelig kan vi annonsere at selveste KLOVNER I KAMP kommer til oss fredag 20. mars!!???? \r\nDette blir en kveld du virkelig ikke vil gå glipp av! \r\nSikre deg og dine billetter til årets konsert allerede nå!??', '2020-03-20', '22:30:00.0000', 1, 'Bilder/klovneriKamp.jpg'),
(2, 'Silent Disco Club', 'Kroa i Bø', 'Lørdag 7. mars blir det SILENT DISCO, og fy søren som vi gleder oss!!?????? \r\nSilent Disco Club kommer til oss for å skape god stemning og en fest du ikke vil gå glipp av!!??', '2007-03-20', '21:00:00.0000', 0, 'Bilder/SilentDisco.jpg'),
(3, 'Sjakklubb', 'USN Biblioteket', 'Onsdag 11. mars kjører vi på med enda en spennende sjakkveld!\r\nAlle er velkomne, selv om du er helt ny eller en grandmaster må du bare møte opp, morsomt blir det uansett!\r\nMøt opp med et skarpt sinn og godt humør, også blir det servert kaffe og kjeks.', '2011-03-20', '15:00:00.0000', 0, 'Bilder/sjakk.jpg'),
(4, 'Gratis kino - Visning av 1917', 'Gullbring', 'Vi viser 1917 gratis i Gullbring! Ta med deg godt humør og kos deg sammen med oss!', '2013-03-20', '20:00:00.0000', 0, 'Bilder/kino.jpg');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `arrangementbruker`
--

DROP TABLE IF EXISTS `arrangementbruker`;
CREATE TABLE IF NOT EXISTS `arrangementbruker` (
  `bruker_id` int(11) NOT NULL,
  `arrangement_id` int(11) NOT NULL,
  PRIMARY KEY (`bruker_id`,`arrangement_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `bruker`
--

DROP TABLE IF EXISTS `bruker`;
CREATE TABLE IF NOT EXISTS `bruker` (
  `bruker_id` int(25) NOT NULL AUTO_INCREMENT,
  `fornavn` tinytext NOT NULL,
  `etternavn` tinytext NOT NULL,
  `epost` varchar(25) NOT NULL,
  `brukernavn` tinytext NOT NULL,
  `passord` longtext NOT NULL,
  PRIMARY KEY (`bruker_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `bruker`
--

INSERT INTO `bruker` (`bruker_id`, `fornavn`, `etternavn`, `epost`, `brukernavn`, `passord`) VALUES
(1, 'Martin', 'Reberg', 'martinreberg1@live.no', 'mrdoggel', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
