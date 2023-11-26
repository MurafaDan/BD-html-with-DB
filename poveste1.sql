-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 10:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poveste1`
--

-- --------------------------------------------------------

--
-- Table structure for table `alimente`
--

CREATE TABLE `alimente` (
  `id_aliment` int(11) NOT NULL,
  `nume_aliment` varchar(30) DEFAULT NULL,
  `tip_aliment` varchar(20) DEFAULT NULL,
  `id_obiect` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alimente`
--

INSERT INTO `alimente` (`id_aliment`, `nume_aliment`, `tip_aliment`, `id_obiect`) VALUES
(1, '2coltunace', 'aliment', NULL),
(2, 'turta-dulce', 'dulciuri', 3),
(3, 'bidcuiti', 'dulciuri', 4),
(4, 'cozonac', 'dulciuri', 4),
(5, 'halvita', 'dulciuri', 6),
(6, 'lapte-topit', 'dulciuri', 5);

-- --------------------------------------------------------

--
-- Table structure for table `eroi`
--

CREATE TABLE `eroi` (
  `id_erou` int(11) NOT NULL,
  `nume_erou` varchar(20) DEFAULT NULL,
  `tip_erou` varchar(10) DEFAULT NULL,
  `id_obiect` int(11) DEFAULT NULL,
  `id_transport` int(11) DEFAULT NULL,
  `id_loc` int(11) DEFAULT NULL,
  `id_aliment` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eroi`
--

INSERT INTO `eroi` (`id_erou`, `nume_erou`, `tip_erou`, `id_obiect`, `id_transport`, `id_loc`, `id_aliment`) VALUES
(1, 'Hensel', 'pozitiv', 1, 2, 2, 4),
(2, 'Grettel', 'pozitiv', 1, 2, 2, 4),
(3, 'Tatal', 'pozitiv', NULL, NULL, 1, NULL),
(4, 'Mama-Vitrega', 'pozitiv', NULL, NULL, 1, NULL),
(5, 'Vrajitoarea', 'pozitiv', NULL, NULL, 2, NULL),
(6, 'Politia', 'pozitiv', 2, 1, 3, NULL),
(7, 'Pasarile', 'pozitiv', 1, NULL, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `locatii`
--

CREATE TABLE `locatii` (
  `id_loc` int(11) NOT NULL,
  `nume_loc` varchar(20) DEFAULT NULL,
  `id_obiect` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locatii`
--

INSERT INTO `locatii` (`id_loc`, `nume_loc`, `id_obiect`) VALUES
(1, 'cascioara_parintilor', NULL),
(2, 'casuta-din-turta', 6),
(3, 'drum-padure', 1),
(4, 'sediul-de-politie', 2);

-- --------------------------------------------------------

--
-- Table structure for table `obiecte`
--

CREATE TABLE `obiecte` (
  `id_obiect` int(11) NOT NULL,
  `nume_obiect` varchar(30) DEFAULT NULL,
  `tip_obiect` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obiecte`
--

INSERT INTO `obiecte` (`id_obiect`, `nume_obiect`, `tip_obiect`) VALUES
(1, 'telefon', 'electronica'),
(2, 'pistol', 'arma'),
(3, 'usa', 'arhitectura'),
(4, 'hogeac', 'arhitectura'),
(5, 'pereti', 'arhitectura'),
(6, 'acoperis', 'arhitectura');

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id_transport` int(11) NOT NULL,
  `nume_transport` varchar(30) DEFAULT NULL,
  `id_loc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id_transport`, `nume_transport`, `id_loc`) VALUES
(1, 'masina-de-poitie', 2),
(2, 'caruta', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alimente`
--
ALTER TABLE `alimente`
  ADD PRIMARY KEY (`id_aliment`);

--
-- Indexes for table `eroi`
--
ALTER TABLE `eroi`
  ADD PRIMARY KEY (`id_erou`),
  ADD KEY `id_transport` (`id_transport`),
  ADD KEY `id_obiect` (`id_obiect`),
  ADD KEY `id_aliment` (`id_aliment`),
  ADD KEY `id_loc` (`id_loc`);

--
-- Indexes for table `locatii`
--
ALTER TABLE `locatii`
  ADD PRIMARY KEY (`id_loc`),
  ADD KEY `id_obiect` (`id_obiect`);

--
-- Indexes for table `obiecte`
--
ALTER TABLE `obiecte`
  ADD PRIMARY KEY (`id_obiect`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id_transport`),
  ADD KEY `id_loc` (`id_loc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alimente`
--
ALTER TABLE `alimente`
  MODIFY `id_aliment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `eroi`
--
ALTER TABLE `eroi`
  MODIFY `id_erou` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `locatii`
--
ALTER TABLE `locatii`
  MODIFY `id_loc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `obiecte`
--
ALTER TABLE `obiecte`
  MODIFY `id_obiect` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id_transport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eroi`
--
ALTER TABLE `eroi`
  ADD CONSTRAINT `eroi_ibfk_1` FOREIGN KEY (`id_transport`) REFERENCES `transport` (`id_transport`),
  ADD CONSTRAINT `eroi_ibfk_2` FOREIGN KEY (`id_obiect`) REFERENCES `obiecte` (`id_obiect`),
  ADD CONSTRAINT `eroi_ibfk_3` FOREIGN KEY (`id_aliment`) REFERENCES `alimente` (`id_aliment`),
  ADD CONSTRAINT `eroi_ibfk_4` FOREIGN KEY (`id_loc`) REFERENCES `locatii` (`id_loc`);

--
-- Constraints for table `locatii`
--
ALTER TABLE `locatii`
  ADD CONSTRAINT `locatii_ibfk_1` FOREIGN KEY (`id_obiect`) REFERENCES `obiecte` (`id_obiect`);

--
-- Constraints for table `transport`
--
ALTER TABLE `transport`
  ADD CONSTRAINT `transport_ibfk_1` FOREIGN KEY (`id_loc`) REFERENCES `locatii` (`id_loc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
