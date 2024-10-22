-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2022 at 11:48 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `limited`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `identifiant` varchar(32) NOT NULL,
  `mdp` varchar(32) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `telephone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`identifiant`, `mdp`, `nom`, `prenom`, `email`, `telephone`) VALUES
('dems41', 'ytj', 'grge', 'erg', 'dt2tuto64@gmail.com', 654842642),
('dems6468', '22042001', 'dems', 'max', 'dt2tuto64@gmail.com', 654842642),
('zdQ', 'zda', 'azd', 'azd', 'dt2tuto64@gmail.com', 654842642),
('ergqe', 'ztrhg', 'rth', 'rth', 'erik.schoonheere@gmail.com', 654842642),
('tyjt', 'tyjt', 'tjyyt', 'tyjt', 'dt2tuto64@gmail.com', 654842642),
('maxdems', '22042001', 'Demeyer', 'Maxime', 'dt2tuto64@gmail.com', 654842642);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  `telephone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`nom`, `email`, `message`, `telephone`) VALUES
('Maxime Demeyer', 'maxime.demeyerfrance@gmail.com', 'g', 698616630),
('Erik', 'erik.schoonheere@gmail.com', 'je veux la voiture ', 654842642),
('Maxime Demeyer', 'maxime.demeyerfrance@gmail.com', '4', 698616630),
('Maxime Demeyer', 'maxime.demeyerfrance@gmail.com', '4', 698616630),
('Maxime Demeyer', 'maxime.demeyerfrance@gmail.com', '54', 698616630),
('Maxime Demeyer', 'maxime.demeyerfrance@gmail.com', '5', 698616630),
('Maxime Demeyer', 'maxime.demeyerfrance@gmail.com', 'prout', 698616630),
('Maxime Demeyer', 'maxime.demeyerfrance@gmail.com', '45', 698616630),
('Maxime Demeyer', 'maxime.demeyerfrance@gmail.com', '45', 698616630),
('Demeyer', 'maxime.demeyerfrance@gmail.com', 'U555YY', 698616630),
('Demeyer', 'maxime.demeyerfrance@gmail.com', '456498', 698616630),
('Maxime Demeyer', 'dt2tuto64@gmail.com', 'c', 654842642),
('ehrg', 'dt2tuto64@gmail.com', 'erge', 654842642),
('Maxime Demeyer', 'dt2tuto64@gmail.com', 'rger', 654842642);

-- --------------------------------------------------------

--
-- Table structure for table `contrat`
--

CREATE TABLE `contrat` (
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL,
  `telephone` int(15) NOT NULL,
  `contrat` varchar(32) NOT NULL,
  `message` varchar(100) NOT NULL,
  `voiture` varchar(30) NOT NULL DEFAULT '',
  `email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contrat`
--

INSERT INTO `contrat` (`nom`, `prenom`, `telephone`, `contrat`, `message`, `voiture`, `email`) VALUES
('Demeyer', 'Maxime', 654842642, 'Economique', 'hh', 'hhh', 'dt2tuto64@gmail.com'),
('Demeyere', 'Maxime', 654842642, 'Economique', 'rdgd', 'Bugatti chiron', 'dt2tuto64@gmail.com'),
('Demeyerer', 'Maxime', 654842642, 'Economique', 'serg', 'BUGATTI CHIRON', 'dt2tuto64@gmail.com'),
('Demeyeretrg', 'Maxime', 654842642, 'PREMIUM', 'erg', 'LAMBORGHINI VENENO ROADSTER', 'dt2tuto64@gmail.com'),
('Demeyerqsdf', 'Maxime', 654842642, 'PREMIUM', 'sd', 'BUGATTI CHIRON', 'dt2tuto64@gmail.com'),
('dupont', 'jean', 654842642, 'PREMIUM', 'Formidable', 'BUGATTI CHIRON', 'erik.schoonheere@gmail.com'),
('duponte', 'jean', 654842642, 'PREMIUM', 'd', 'LYKAN HYPERSPORT', 'erik.schoonheere@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contrat`
--
ALTER TABLE `contrat`
  ADD UNIQUE KEY `Voiture` (`nom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
