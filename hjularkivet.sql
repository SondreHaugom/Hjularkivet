-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14. Feb, 2025 12:21 PM
-- Tjener-versjon: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hjularkivet`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `biler`
--

CREATE TABLE `biler` (
  `RegNr` varchar(8) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Merke` varchar(20) NOT NULL,
  `Farge` varchar(20) NOT NULL,
  `Fd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dataark for tabell `biler`
--

INSERT INTO `biler` (`RegNr`, `Type`, `Merke`, `Farge`, `Fd`) VALUES
('bb5454', 'Ford', 'Mustang', 'Blå', 809671245),
('cc12121', 'Opel', 'Rekord', 'Sort', 809671245),
('ED44444', 'BMW', '520i', 'Blå', 12345678),
('eg12345', 'Toyota', 'Corolla', 'blå', 809671247),
('KG11111', 'Ford', 'Mondeo', 'Sølv', 22345678),
('ND333333', 'Toyota', 'Corolla', 'Rød', 4567890),
('SK55555', 'Toyota', 'Camry', 'Gul', 12345678),
('ss25435', 'Honda', 'Civic', 'Rød Sølv', 4567890),
('TT99999', 'Kia', 'Aik', 'hvit', 809671245);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `brukere`
--

CREATE TABLE `brukere` (
  `brukernavn` varchar(20) NOT NULL,
  `passord` varchar(20) NOT NULL,
  `navn` varchar(50) NOT NULL,
  `organiasjon` varchar(50) NOT NULL,
  `rettighet` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dataark for tabell `brukere`
--

INSERT INTO `brukere` (`brukernavn`, `passord`, `navn`, `organiasjon`, `rettighet`) VALUES
('Per', '1234', 'Perg', 'VTFK', 'bruker'),
('Staale', '1234', 'Staale Bergersen', 'VTFK', 'administrator'),
('Sondre', 'Test123', 'Sondre Haugom', 'TFK', 'Admin');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `eiere`
--

CREATE TABLE `eiere` (
  `Fd` int(11) NOT NULL,
  `fornavn` varchar(20) NOT NULL,
  `etternavn` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `postnr` int(4) NOT NULL,
  `epost` varchar(30) NOT NULL,
  `tlf` varchar(8) NOT NULL,
  `tid` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
