-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 10:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(100) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `PRICE` int(11) NOT NULL,
  `DESCRIPTION` varchar(1000) CHARACTER SET utf16le COLLATE utf16le_bin NOT NULL,
  `ITEMS_LEFT` int(11) NOT NULL,
  `IMAGE` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USERNAME` varchar(50) CHARACTER SET utf16 COLLATE utf16_german2_ci NOT NULL,
  `ID` int(11) NOT NULL,
  `LAST_ONLINE` datetime NOT NULL DEFAULT current_timestamp(),
  `PASSWORD` varchar(512) NOT NULL,
  `CONFIRMATION_CODE` varchar(10) DEFAULT NULL,
  `IS_ONLINE` tinyint(1) NOT NULL,
  `CURRENT_BASKET` varchar(10000) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `IS_VERIFIED` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USERNAME`, `ID`, `LAST_ONLINE`, `PASSWORD`, `CONFIRMATION_CODE`, `IS_ONLINE`, `CURRENT_BASKET`, `EMAIL`, `IS_VERIFIED`) VALUES
('$name', 1, '2023-06-28 19:19:10', 'passw', '', 0, '', 'ajflkasf', 0),
('kill', 5, '2023-06-28 20:10:58', '9627fa799f49feab3956080cfea37827382bc12f99a49f6998803c596cd2b0a1dc7b29ec8dcbf70cda340979c963c686b83cb7b47090a89f448391f154a7d589', '', 0, '', 'thenicest2003@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
