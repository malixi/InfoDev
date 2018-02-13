-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2018 at 05:07 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infodev`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productArea` varchar(200) NOT NULL,
  `productLongName` varchar(200) NOT NULL,
  `productShortName` varchar(200) NOT NULL,
  `documentName` varchar(200) NOT NULL,
  `docID` varchar(50) NOT NULL,
  `author` varchar(200) NOT NULL,
  `supportedFormat` varchar(200) NOT NULL,
  `whereToFind` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productArea`, `productLongName`, `productShortName`, `documentName`, `docID`, `author`, `supportedFormat`, `whereToFind`) VALUES
(53, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'ProcessFlow Connectors Installation Guide ', 'BCIIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(54, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Distributed Single Sign-on Installation Guide ', 'DSSOIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(55, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Application Development Workbench ', 'EADW', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(56, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Application Development Workbench Standards ', 'EADWS', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(57, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson 4GL Application Program Interfaces, \nLawson RPG Application Program Interfaces ', 'EAPI', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(58, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'IOS Application Program Interfaces ', 'EAPIIOS', 'Julie', 'PDF, Onlinehelp', 'Infor Xtreme'),
(59, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Application Developer Workbench (CASE Tools) Installation Guide ', 'ECAIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(60, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Getting Started with the Lawson Interface Desktop (LID) ', 'EDGS', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(61, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson S3 Technology 9.0.1 Upgrade Guide ', 'EGG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(62, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Horizontal Scaling Installation Guide ', 'EHSIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(63, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Jobs and Reports Administration Guide ', 'ELAJBR', 'Pat', 'PDF, Onlinehelp', 'Infor Xtreme'),
(64, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Server Setup and Maintenance Guide ', 'ELASRV', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(65, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Translation Administration Guide ', 'ELATMS', 'Pat', 'PDF, Onlinehelp', 'Infor Xtreme'),
(66, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Administration: LAUA Security ', 'ELAUSS', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(67, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson for Infor Ming.le Administration Guide', 'ELAXML', 'Jehan', 'PDF, Onlinehelp', 'Infor Xtreme'),
(68, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Editor', 'ELE', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(69, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'System Utilities Reference Guide ', 'ESURG ', 'Pat', 'PDF, Onlinehelp', 'Infor Xtreme'),
(70, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Data Access Using IBM DB2', 'IBM', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(71, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Data Access Using IBM DB2 on a z/OS Database Server ', 'IBMZ', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(72, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Infor System Console Installation Guide', 'ISCIG', 'Mark', 'PDF, Onlinehelp', 'Infor Download Center'),
(73, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Infor System Console User Guide', 'ISCUG', 'Aiz', 'PDF, Onlinehelp', 'Infor Xtreme'),
(74, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Design Studio Installation Guide ', 'LDSIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(75, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Design Studio User Guide ', 'LDSUG', 'Julie', 'PDF, Onlinehelp', 'Infor Xtreme'),
(76, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Interface Desktop Installation Guide ', 'LIDEIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(77, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Getting Started with Lawson Portal ', 'LPGS', 'Aiz', 'PDF, Onlinehelp', 'Infor Xtreme'),
(78, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Portal Installation Guide (9.0.1) \nLawson S3 for Workspace Installation Guide (10.0.0)', 'LPIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(79, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Security Administrator Installation Guide ', 'LSAIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(80, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Core Technology Installation Guide ', 'LSFCTIG', 'Charity T', 'PDF, Onlinehelp', 'Infor Download Center'),
(81, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Implementing Lawson Security ', 'LSIMP', 'Julie', 'PDF, Onlinehelp', 'Infor Xtreme'),
(82, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Resources and Security Administration Guide ', 'LSRDAG', 'Mark/Julie', 'PDF, Onlinehelp', 'Infor Xtreme'),
(83, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Smart Reports Designer Installation Guide', 'LSRDIG', 'Bianca', 'PDF, Onlinehelp', 'Infor Download Center'),
(84, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Smart Reports Designer User Guide', 'LSRDUG', 'Bianca', 'PDF, Onlinehelp', 'Infor Xtreme'),
(85, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Security Services ', 'LSSCG', 'Julie', 'PDF, Onlinehelp', 'Infor Xtreme'),
(86, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson UNIX Utilities Installation Guide', 'LUUIG', 'Jehan', 'PDF, Onlinehelp', 'Infor Download Center'),
(87, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Data Access Using Microsoft SQL Server ', 'MSS', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(88, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Data Access Using Oracle ', 'ORA', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(89, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'ProcessFlow Administration Guide ', 'PFAG', 'Julie', 'PDF, Onlinehelp', 'Infor Xtreme'),
(90, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'ProcessFlow Designer Installation Guide ', 'PFDIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(91, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'ProcessFlow Inbasket User Guide ', 'PFIUG', 'Pat', 'PDF, Onlinehelp', 'Infor Xtreme'),
(92, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'ProcessFlow Reference Guide', 'PFRG', 'Kelly Czec', 'PDF, Onlinehelp', 'Infor Xtreme'),
(93, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'ProcessFlow Developer Guide ', 'PFUG', 'Julie', 'PDF, Onlinehelp', 'Infor Xtreme'),
(94, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'S3 LSF System Architecture Guide ', 'TAARG ', 'Pat', 'PDF, Onlinehelp', 'Infor Xtreme'),
(95, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Infor Lawson System Foundation Release Notes', 'LSFRN', 'Julie, Jeng, Bianca, Pat, Mark, Charity', 'PDF, Onlinehelp', 'Infor Download Center'),
(98, 'sdsds', 'sdsdsds', 'sdsds', 'sdsdsds', 'sdsd', 'sdsds', 'PDF\nXLS/CSV', 'Infor Xtreme');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userType` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userType`, `userName`, `password`, `firstName`, `lastName`) VALUES
(1, 'admin', 'carlo', '12345', 'Carlo', 'Malixi'),
(2, 'admin', 'aiz', '12345', 'Aiz', 'Javierto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userName` (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
