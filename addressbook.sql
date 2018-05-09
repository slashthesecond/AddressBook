-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2018 at 10:29 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addressbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmployeeID` int(11) NOT NULL,
  `OrganisationID` int(11) NOT NULL,
  `Forename` text NOT NULL,
  `Surname` text NOT NULL,
  `AddressLine1` text NOT NULL,
  `AddressLine2` text NOT NULL,
  `Postcode` text NOT NULL,
  `City` text NOT NULL,
  `Phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmployeeID`, `OrganisationID`, `Forename`, `Surname`, `AddressLine1`, `AddressLine2`, `Postcode`, `City`, `Phone`) VALUES
(4, 21, 'Natalie', 'Gardner', '21 Home Farm Road', 'Cambusbarron', 'FK7 9RB', 'Stirling', '07561554911'),
(5, 19, 'David', 'Edwards', '19 Ville Crescent', 'Smallville', 'FK8 9RZZ', 'Glasgow', '01982736511'),
(6, 20, 'Mark', 'Jacobs', '99 Parc Way', 'The Way', 'FK8 7MM', 'London', '09876542722'),
(7, 22, 'Josh', 'Graeham', '89 Smallhead', 'Smallerwalker', 'FK8 8RBB', 'Falkirk', '01987265181');

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `OrganisationID` int(11) NOT NULL,
  `Organisationname` text NOT NULL,
  `AddressLine1` text NOT NULL,
  `AddressLine2` text NOT NULL,
  `Postcode` text NOT NULL,
  `City` text NOT NULL,
  `Phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`OrganisationID`, `Organisationname`, `AddressLine1`, `AddressLine2`, `Postcode`, `City`, `Phone`) VALUES
(19, 'YouTube', 'YouTube Road', 'Youtuberville', 'YT11 YH77', 'Stirling', '10283475689'),
(20, 'Steam Gaming', 'Steam Road', 'End Game Lane', 'ST78 78BB', 'Edinburgh', '09765462811'),
(21, 'Administrate', '21 Admin Lane', 'Parkside', 'AM88 NM2N', 'Edinburgh', '08763527181'),
(22, 'Stirling University', 'Road end ', 'Education Valley', 'STIR8 8NN', 'Stirling', '01786616616');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`OrganisationID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `organisation`
--
ALTER TABLE `organisation`
  MODIFY `OrganisationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
