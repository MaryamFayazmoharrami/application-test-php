-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 25. Sep 2016 um 21:51
-- Server Version: 5.5.32
-- PHP-Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `terminkalender`
--
CREATE DATABASE IF NOT EXISTS `terminkalender` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `terminkalender`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `plannungs`
--

CREATE TABLE IF NOT EXISTS `plannungs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `nameDesTermin` text CHARACTER SET latin1 NOT NULL,
  `typ` varchar(10) CHARACTER SET latin1 NOT NULL,
  `datumBeginn` date NOT NULL,
  `datumEnde` date NOT NULL,
  `bemerkung` text CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Daten für Tabelle `plannungs`
--

INSERT INTO `plannungs` (`id`, `userid`, `nameDesTermin`, `typ`, `datumBeginn`, `datumEnde`, `bemerkung`) VALUES
(14, 8, 'Arbeit1', 'Intern', '2016-09-07', '2016-09-30', 'Material kaufen'),
(15, 8, 'Arbeit2', 'Kunde', '2016-09-30', '2016-10-02', 'PrÃ¤sentation vorbereitung'),
(16, 9, 'Arbeit1', 'Intern', '2016-09-07', '2016-09-23', 'PrÃ¤sentation Vorbereitung');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `family` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `family`, `email`, `password`) VALUES
(8, 'Muster', 'Mustername', 'muster@gmail.com', '123'),
(9, 'abc@gmail.com', 'abcfamily', 'abc@gmail.com', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
