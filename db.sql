-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2018 at 11:13 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BID` int(11) NOT NULL,
  `TID` int(11) NOT NULL,
  `placeCode` varchar(225) NOT NULL,
  `DriverID` int(11) NOT NULL,
  `TAID` int(11) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BID`, `TID`, `placeCode`, `DriverID`, `TAID`, `Date`) VALUES
(1, 567, '234', 7788, 567, '2018-12-17 00:00:00'),
(2, 345, '234', 123, 0, '2018-12-24 23:05:45'),
(3, 345, '234', 123, 0, '2018-12-24 23:06:33'),
(6, 345, '234', 234, 567, '2018-12-24 23:07:18'),
(7, 345, '234', 234, 567, '2018-12-24 23:07:35');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `Name` text NOT NULL,
  `ID` int(11) NOT NULL,
  `phone` text NOT NULL,
  `rating` float NOT NULL,
  `vehicle` text NOT NULL,
  `vehicle no` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`Name`, `ID`, `phone`, `rating`, `vehicle`, `vehicle no`) VALUES
('ali', 234, '7788', 4, 'corrola', 'MN678');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `placecode` int(11) NOT NULL,
  `name` text NOT NULL,
  `city` text NOT NULL,
  `rating` float NOT NULL,
  `country` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`placecode`, `name`, `city`, `rating`, `country`, `address`) VALUES
(123, 'DAMN-E-KOH', 'Islamabad', 5, 'Pakistan', 'PEEER SOHAWA ROAD'),
(234, 'FAISAL MOSQUE', 'Islamabad', 5, 'Pakistan', 'ROYAL AVENUE E7'),
(1121, 'Khae Khana', 'Islamabad', 4, 'Pakistan', 'St.13, F-2/Isb');

-- --------------------------------------------------------

--
-- Table structure for table `touragent`
--

CREATE TABLE `touragent` (
  `ID` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `touragent`
--

INSERT INTO `touragent` (`ID`, `name`, `phone`, `rating`) VALUES
(0, 'doo', 'dodo', 2.2),
(12, 'Ijaz', '2252', 2252),
(567, 'WAQAR', '0765', 3),
(5555, 'SAQIB', '9876', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tourist`
--

CREATE TABLE `tourist` (
  `tourist_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `CNIC` varchar(10) NOT NULL,
  `phone` text NOT NULL,
  `nationality` text NOT NULL,
  `gender` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourist`
--

INSERT INTO `tourist` (`tourist_id`, `name`, `CNIC`, `phone`, `nationality`, `gender`, `address`) VALUES
(567, 'MRS.KATTHY', '5678908765', '56789', 'CANADIAN', 'FEMALE', 'HOUSE A55 ST.ATA15, TORONTO'),
(568, 'Maryam', '61101-0101', '03001231212', 'US', 'female', 'Thomas Nolan Kaszas, Otter Ln');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`placecode`);

--
-- Indexes for table `touragent`
--
ALTER TABLE `touragent`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`tourist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tourist`
--
ALTER TABLE `tourist`
  MODIFY `tourist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=571;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
