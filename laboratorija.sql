-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 09, 2024 at 12:36 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laboratorija`
--

-- --------------------------------------------------------

--
-- Table structure for table `analize`
--

DROP TABLE IF EXISTS `analize`;
CREATE TABLE IF NOT EXISTS `analize` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proracun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `analize`
--

INSERT INTO `analize` (`id`, `ime`, `opis`, `proracun`) VALUES
(1, 'Određivanje koncentracije kiseline hlorovodične u uzorku soli', 'Ova analiza se koristi za određivanje koncentracije kiseline hlorovodične (HCl) u uzorku soli. Uzorak soli se rastvara u vodi, a zatim se titruje standardnim rastvorom natrijum-hidroksida (NaOH) koristeći fenolftalein kao indikator. Reakcija između kiseli', 'Priprema rastvora NaOH standardnog rastvora: Merenjem poznate mase čvrstog NaOH i rastvaranjem u destilovanoj vodi poznate zapremine, možemo pripremiti standardni rastvor NaOH od poznate koncentracije. Priprema uzorka soli: Merenjem određene mase uzorka s');

-- --------------------------------------------------------

--
-- Table structure for table `eksperimenti`
--

DROP TABLE IF EXISTS `eksperimenti`;
CREATE TABLE IF NOT EXISTS `eksperimenti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sredstva` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `eksperimenti`
--

INSERT INTO `eksperimenti` (`id`, `ime`, `opis`, `sredstva`) VALUES
(1, 'Kristalizacija bakar(II) sulfata iz vodenog rastvora', 'Ovaj eksperiment demonstrira proces kristalizacije, koji se koristi za dobijanje kristala bakar(II) sulfata iz vodenog rastvora. Bakar(II) sulfat je sol koja formira plave kristale. Proces kristalizacije se zasniva na postepenom hlađenju zasićenog rastvor', 'Sredstva koja su korišćena za ovaj eksperiment:  Bakar(II) sulfat pentahidrat (CuSO4 · 5H2O) - ovaj materijal se koristi kao izvor bakar(II) jona u rastvoru. Destilovana voda - koristi se za pripremu rastvora bakar(II) sulfata. Posuda za kristalizaciju - ');

-- --------------------------------------------------------

--
-- Table structure for table `hemikalije`
--

DROP TABLE IF EXISTS `hemikalije`;
CREATE TABLE IF NOT EXISTS `hemikalije` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `svojstva` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hemikalije`
--

INSERT INTO `hemikalije` (`id`, `ime`, `opis`, `svojstva`) VALUES
(2, 'Etilen glikol', ' Etilen glikol je bezbojna, slatka tečnost koja se često koristi kao antifriz u automobilima i rashladnim sistemima. Takođe se koristi kao sastojak u raznim industrijskim proizvodima, kao što su boje, plastike, i rastvarači.', 'Molekularna formula: C2H6O2 Molekularna masa: Oko 62.07 g/mol pH vrednost: Neutralan pH u vodenim rastvorima Reaktivnost: Etilen glikol je higroskopan, što znači da privlači vodu iz okoline.');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

DROP TABLE IF EXISTS `korisnici`;
CREATE TABLE IF NOT EXISTS `korisnici` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prezime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lozinka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `username`, `lozinka`) VALUES
(1, 'Aleksa', 'Stankovic', 'macak123', '$2y$10$1DUaHhWTtfz9vqNbCGB4rO7HrkiSKDFd.jUiEA4/GA25vySyKmKX.');

-- --------------------------------------------------------

--
-- Table structure for table `rezultati`
--

DROP TABLE IF EXISTS `rezultati`;
CREATE TABLE IF NOT EXISTS `rezultati` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zakljucak` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rezultati`
--

INSERT INTO `rezultati` (`id`, `ime`, `opis`, `zakljucak`) VALUES
(1, ' Koncentracija hlorovodične kiseline u uzorku soli \"X\"', 'U ovom eksperimentu, uzorak soli \"X\" je rastvoren u destilovanoj vodi i titrovan standardnim rastvorom natrijum-hidroksida (NaOH) koristeći fenolftalein kao indikator. Nakon titracije, dobijeni volumen potrošene baze NaOH iznosio je 25.4 mL.', 'Na osnovu rezultata titracije, izračunata koncentracija hlorovodične kiseline (HCl) u uzorku soli \"X\" iznosi 0.125 mol/L. Ovaj rezultat ukazuje na to da je uzorak soli \"X\" sadržavao određenu koncentraciju HCl, što je važno za procenu njegove hemijske čist');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
