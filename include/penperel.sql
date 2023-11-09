-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2023 at 07:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penperel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `katalaluan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `katalaluan`) VALUES
(1, '$2y$10$FQPQ8JjNvowtls/FjVwEvetn58LbPicFtwk9bLGI38xRHxDR/E.m.');

-- --------------------------------------------------------

--
-- Table structure for table `pelajar`
--

CREATE TABLE `pelajar` (
  `idpelajar` int(11) NOT NULL,
  `warden` varchar(100) NOT NULL,
  `namapelajar` varchar(30) NOT NULL,
  `nokppelajar` varchar(12) NOT NULL,
  `katalaluan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelajar`
--

INSERT INTO `pelajar` (`idpelajar`, `warden`, `namapelajar`, `nokppelajar`, `katalaluan`) VALUES
(11, 'Cik bal', 'paan', '030810930976', '$2y$10$7Ph9VPp/kbYaDlK6.iXzTO5v6mJ0FUL49X/e/LyJqGKkp972Vtg4.'),
(12, 'Cik din', 'khairul', '030913101269', '$2y$10$7Ph9VPp/kbYaDlK6.iXzTO5v6mJ0FUL49X/e/LyJqGKkp972Vtg4.'),
(13, 'Cik khai', 'amer', '123134141242', 'pro');

-- --------------------------------------------------------

--
-- Table structure for table `peralatan`
--

CREATE TABLE `peralatan` (
  `idperalatan` int(11) NOT NULL,
  `pelajar` varchar(100) NOT NULL,
  `jenisperalatan` varchar(100) NOT NULL,
  `jenama` varchar(100) NOT NULL,
  `nosiri` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peralatan`
--

INSERT INTO `peralatan` (`idperalatan`, `pelajar`, `jenisperalatan`, `jenama`, `nosiri`) VALUES
(5, 'khai', 'baju', 'nike', '6'),
(6, 'paan', 'baju', 'adidas', '7'),
(7, 'ameen', 'screw driver', 'sony', '1'),
(8, 'ali', 'seluar', 'adidas', '5'),
(10, 'abu', 'Spanar', 'besi', '2'),
(11, 'lulu', 'Stapler', 'iphone', '3'),
(12, 'lola', 'Hammer', 'samsung', '4');

-- --------------------------------------------------------

--
-- Table structure for table `warden`
--

CREATE TABLE `warden` (
  `idwarden` int(20) NOT NULL,
  `namawarden` varchar(250) NOT NULL,
  `nokpwarden` varchar(12) NOT NULL,
  `katalaluan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warden`
--

INSERT INTO `warden` (`idwarden`, `namawarden`, `nokpwarden`, `katalaluan`) VALUES
(9, 'Cik Gu', '092349234823', '$2y$10$Md3stefEHEOc5DZk1860qumScraoIgu8pfEj40RIDMqrMCToNwoT6'),
(10, 'Cik gi', '030910101892', '$2y$10$Md3stefEHEOc5DZk1860qumScraoIgu8pfEj40RIDMqrMCToNwoT6'),
(11, 'abu', '092349234823', 'YES'),
(12, 'Cik Gu', '23', '13wd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `pelajar`
--
ALTER TABLE `pelajar`
  ADD PRIMARY KEY (`idpelajar`);

--
-- Indexes for table `peralatan`
--
ALTER TABLE `peralatan`
  ADD PRIMARY KEY (`idperalatan`);

--
-- Indexes for table `warden`
--
ALTER TABLE `warden`
  ADD PRIMARY KEY (`idwarden`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelajar`
--
ALTER TABLE `pelajar`
  MODIFY `idpelajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `peralatan`
--
ALTER TABLE `peralatan`
  MODIFY `idperalatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `warden`
--
ALTER TABLE `warden`
  MODIFY `idwarden` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
