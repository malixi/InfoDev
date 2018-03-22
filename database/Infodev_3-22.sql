-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 07:10 AM
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
(86, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Infor Lawson System Foundation Release Notes', 'LSFRN', 'Julie, Jeng, Bianca, Pat, Mark, Charity', 'PDF, Onlinehelp', 'Infor Download Center'),
(87, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'S3 LSF System Architecture Guide', 'TAARG', 'Pat', 'PDF, Onlinehelp', 'Infor Xtreme'),
(88, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'ProcessFlow Developer Guide', 'PFUG', 'Julie', 'PDF, Onlinehelp', 'Infor Xtreme'),
(89, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'ProcessFlow Reference Guide', 'PFRG', 'Kelly Czec', 'PDF, Onlinehelp', 'Infor Xtreme'),
(90, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'ProcessFlow Inbasket User Guide', 'PFIUG', 'Pat', 'PDF, Onlinehelp', 'Infor Xtreme'),
(91, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'ProcessFlow Designer Installation Guide', 'PFDIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(92, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'ProcessFlow Administration Guide', 'PFAG', 'Julie', 'PDF, Onlinehelp', 'Infor Xtreme'),
(93, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Data Access Using Oracle', 'ORA', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(94, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Data Access Using Microsoft SQL Server', 'MSS', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(95, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson UNIX Utilities Installation Guide', 'LUUIG', 'Jehan', 'PDF, Onlinehelp', 'Infor Download Center'),
(96, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Security Services', 'LSSCG', 'Julie', 'PDF, Onlinehelp', 'Infor Xtreme'),
(97, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Smart Reports Designer User Guide', 'LSRDUG', 'Bianca', 'PDF, Onlinehelp', 'Infor Xtreme'),
(98, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Smart Reports Designer Installation Guide', 'LSRDIG', 'Bianca', 'PDF, Onlinehelp', 'Infor Download Center'),
(99, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Resources and Security Administration Guide', 'LSRDAG', 'Mark/Julie', 'PDF, Onlinehelp', 'Infor Xtreme'),
(100, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Implementing Lawson Security', 'LSIMP', 'Julie', 'PDF, Onlinehelp', 'Infor Xtreme'),
(101, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Core Technology Installation Guide', 'LSFCTIG', 'Charity T', 'PDF, Onlinehelp', 'Infor Download Center'),
(102, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Security Administrator Installation Guide', 'LSAIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(103, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Portal Installation Guide (9.0.1)  Lawson S3 for Workspace Installation Guide (10.0.0)', 'LPIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(104, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Getting Started with Lawson Portal', 'LPGS', 'Aiz', 'PDF, Onlinehelp', 'Infor Xtreme'),
(105, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Interface Desktop Installation Guide', 'LIDEIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(106, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Design Studio User Guide', 'LDSUG', 'Julie', 'PDF, Onlinehelp', 'Infor Xtreme'),
(107, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Design Studio Installation Guide', 'LDSIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(108, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Infor System Console User Guide', 'ISCUG', 'Aiz', 'PDF, Onlinehelp', 'Infor Xtreme'),
(109, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Infor System Console Installation Guide', 'ISCIG', 'Mark', 'PDF, Onlinehelp', 'Infor Download Center'),
(110, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Data Access Using IBM DB2 on a z/OS Database Server', 'IBMZ', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(111, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Data Access Using IBM DB2', 'IBM', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(112, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'System Utilities Reference Guide', 'ESURG', 'Pat', 'PDF, Onlinehelp', 'Infor Xtreme'),
(113, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Editor', 'ELE', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(114, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson for Infor Ming.le Administration Guide', 'ELAXML', 'Jehan', 'PDF, Onlinehelp', 'Infor Xtreme'),
(115, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson Administration: LAUA Security', 'ELAUSS', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(116, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Translation Administration Guide', 'ELATMS', 'Pat', 'PDF, Onlinehelp', 'Infor Xtreme'),
(117, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Server Setup and Maintenance Guide', 'ELASRV', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(118, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Jobs and Reports Administration Guide', 'ELAJBR', 'Pat', 'PDF, Onlinehelp', 'Infor Xtreme'),
(119, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Horizontal Scaling Installation Guide', 'EHSIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(120, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson S3 Technology 9.0.1 Upgrade Guide', 'EGG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(121, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Getting Started with the Lawson Interface Desktop (LID)', 'EDGS', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(122, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Application Developer Workbench (CASE Tools) Installation Guide', 'ECAIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center'),
(123, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'IOS Application Program Interfaces', 'EAPIIOS', 'Julie', 'PDF, Onlinehelp', 'Infor Xtreme'),
(124, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Lawson 4GL Application Program Interfaces,  Lawson RPG Application Program Interfaces', 'EAPI', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(125, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Application Development Workbench Standards', 'EADWS', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(126, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Application Development Workbench', 'EADW', 'Mark', 'PDF, Onlinehelp', 'Infor Xtreme'),
(127, 'Lawson', 'Infor Lawson System Foundation', 'Lawson System Foundation', 'Distributed Single Sign-on Installation Guide', 'DSSOIG', 'Pat', 'PDF, Onlinehelp', 'Infor Download Center');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userType` varchar(50) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `password` varchar(600) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userType`, `userName`, `password`, `firstName`, `lastName`) VALUES
(1, 'admin', 'aiz', '037afd0e30f41d5026ebb4619f751467d3eec0f3e6c576b8bab18d456b114b65bd3afbc40099011a567a4d4daf0b9b69f8a5954dc8e99a53a3e81d8b49be093a', 'Aiz', 'Javierto'),
(2, 'poweruser', 'shane', 'db0f2ae4b43cb015b556bb3a4a574d82b9b15dc68a65f038a92743fc1f5081e872917ebf232bf51d5b5227aac1a616739ebc3d47440f009f77a69e18f21792cb', 'Shane', 'Allid');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
