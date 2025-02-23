-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2025 at 03:15 PM
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
-- Database: `arthavidhi`
--

-- --------------------------------------------------------

--
-- Table structure for table `createjob`
--

DROP TABLE IF EXISTS `createjob`;
CREATE TABLE IF NOT EXISTS `createjob` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `jobID` varchar(30) NOT NULL,
  `jobDescription` varchar(225) NOT NULL,
  `unitPrice` varchar(100) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `createjob`
--

INSERT INTO `createjob` (`ID`, `jobID`, `jobDescription`, `unitPrice`, `status`) VALUES
(5, 'JOB1', 'car washing', 'Rs 4500', 'Active'),
(6, 'JOB2', 'Paint car', 'Rs 4500', 'Active'),
(7, 'JOB3', 'Repair door', 'Rs 5000', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `createpurpose`
--

DROP TABLE IF EXISTS `createpurpose`;
CREATE TABLE IF NOT EXISTS `createpurpose` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `pupID` varchar(30) NOT NULL,
  `purpose` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `createpurpose`
--

INSERT INTO `createpurpose` (`ID`, `pupID`, `purpose`, `status`) VALUES
(1, 'PUP1', 'General Checkup', 'Active'),
(2, 'PUP2', 'Repeat Customer', 'Active'),
(3, 'PUP3', 'Service', 'Active'),
(4, 'PUP4', 'Washing', 'Active'),
(5, 'PUP5', 'Accident Repair', 'Active'),
(6, 'PUP6', 'Paint', 'Active'),
(7, 'PUP7', 'Decoration', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `dentpaintdetails`
--

DROP TABLE IF EXISTS `dentpaintdetails`;
CREATE TABLE IF NOT EXISTS `dentpaintdetails` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `dentID` varchar(30) NOT NULL,
  `dentPaintType` varchar(100) NOT NULL,
  `dentPaintCharge` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dentpaintdetails`
--

INSERT INTO `dentpaintdetails` (`ID`, `dentID`, `dentPaintType`, `dentPaintCharge`, `status`) VALUES
(1, 'DNP1', 'Door car', '500', 'Active'),
(2, 'DNP2', 'Door Vehicle', '400', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `jobcard`
--

DROP TABLE IF EXISTS `jobcard`;
CREATE TABLE IF NOT EXISTS `jobcard` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `jobNumber` varchar(50) NOT NULL,
  `jobDate` date NOT NULL,
  `registerNumber` varchar(50) NOT NULL,
  `year` int NOT NULL,
  `millage` varchar(20) NOT NULL,
  `vehicleBrand` varchar(100) NOT NULL,
  `vehicleModel` varchar(100) NOT NULL,
  `vehicleColour` varchar(50) NOT NULL,
  `engineNumber` varchar(50) NOT NULL,
  `vinNumber` varchar(50) NOT NULL,
  `customerName` varchar(100) NOT NULL,
  `customerAddress` text,
  `contactNumber` varchar(10) NOT NULL,
  `contactPerson` varchar(100) NOT NULL,
  `personContactNumber` varchar(10) NOT NULL,
  `reportedDefects` text,
  `completedAction` text,
  `technicianName` varchar(100) DEFAULT NULL,
  `supervisor` varchar(100) DEFAULT NULL,
  `job_description` varchar(255) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `quantity` int NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `discount` decimal(10,2) DEFAULT '0.00',
  `vat` decimal(10,2) DEFAULT '13.00',
  `grand_total` decimal(10,2) NOT NULL,
  `total_paid` decimal(10,2) NOT NULL,
  `pending_amount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jobcard`
--

INSERT INTO `jobcard` (`ID`, `jobNumber`, `jobDate`, `registerNumber`, `year`, `millage`, `vehicleBrand`, `vehicleModel`, `vehicleColour`, `engineNumber`, `vinNumber`, `customerName`, `customerAddress`, `contactNumber`, `contactPerson`, `personContactNumber`, `reportedDefects`, `completedAction`, `technicianName`, `supervisor`, `job_description`, `unit_price`, `quantity`, `total_price`, `discount`, `vat`, `grand_total`, `total_paid`, `pending_amount`) VALUES
(1, 'Job001', '2025-02-05', 'Na.0549', 2081, '09788767564534567', '1234567564', 'Scorpio', 'Silver', 'TATA', '20km/hr', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Patel', '9707546391', 'Washing Car', 'Paints all the sides.', 'Rambabu Patel', 'Rohit Patel', '', 0.00, 0, 0.00, 0.00, 13.00, 0.00, 0.00, 0.00),
(2, 'Job001', '2025-02-04', 'Na.0549', 2081, '09788767564534567', '1234567564', 'Scorpio', 'Silver', 'TATA', '20km/hr', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'washing Car', 'paints all the walls', 'Rambabu Patel', 'Rohit Patel', 'Painting car', 2000.00, 4, 8000.00, 10.00, 13.00, 10170.00, 10000.00, 170.00),
(3, 'Job002', '2025-02-12', 'Na.0549', 2081, '09788767564534567', '1234567564', 'Scorpio', 'Silver', 'TATA', '20km/hr', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'Washing Car', 'Washing Car', 'Rambabu Patel', 'Rohit Patel', 'car wash', 1500.00, 1, 1500.00, 10.00, 13.00, 6610.50, 6500.00, 110.50),
(4, 'Job002', '2025-02-12', 'Na.0549', 2081, '09788767564534567', '1234567564', 'Scorpio', 'Silver', 'TATA', '20km/hr', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'Washing Car', 'Washing Car', 'Rambabu Patel', 'Rohit Patel', 'car wash', 1500.00, 1, 1500.00, 10.00, 13.00, 3559.50, 3000.00, 559.50),
(5, 'Job002', '2025-02-11', 'Na.0549', 2081, '20km/hr', 'Scorpio', 'TATA', 'Silver', '09788767564534567', '1234567564', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'car washing', 'repairing', 'Rambabu Patel', 'Rohit Patel', 'car wash', 200.00, 1, 200.00, 10.00, 13.00, 2135.70, 2000.00, 135.70),
(6, 'Job002', '2025-02-11', 'Na.0549', 2081, '20km/hr', 'Scorpio', 'TATA', 'Silver', '09788767564534567', '1234567564', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'car washing', 'repairing', 'Rambabu Patel', 'Rohit Patel', 'paint car', 400.00, 1, 400.00, 10.00, 13.00, 2135.70, 2000.00, 135.70),
(7, 'Job002', '2025-02-11', 'Na.0549', 2081, '20km/hr', 'Scorpio', 'TATA', 'Silver', '09788767564534567', '1234567564', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'car washing', 'repairing', 'Rambabu Patel', 'Rohit Patel', 'repair car', 1500.00, 1, 1500.00, 10.00, 13.00, 2135.70, 2000.00, 135.70),
(8, 'Job003', '2025-02-12', 'Na.0549', 2081, '20km/hr', 'Scorpio', 'TATA', 'Silver', '09788767564534567', '1234567564', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'car wash', 'paint car', 'Rambabu Patel', 'Rohit Patel', 'car wash', 1500.00, 1, 1500.00, 10.00, 13.00, 3559.50, 3000.00, 559.50),
(9, 'Job003', '2025-02-12', 'Na.0549', 2081, '20km/hr', 'Scorpio', 'TATA', 'Silver', '09788767564534567', '1234567564', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'car wash', 'paint car', 'Rambabu Patel', 'Rohit Patel', 'paint car', 2000.00, 1, 2000.00, 10.00, 13.00, 3559.50, 3000.00, 559.50),
(10, 'Job003', '2025-02-19', 'Na.0549', 2081, '20km/hr', 'Scorpio', 'TATA', 'Silver', '09788767564534567', '1234567564', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'car wash', 'paint car', 'Rambabu Patel', 'Rohit Patel', '', 0.00, 0, 0.00, 0.00, 13.00, 0.00, 0.00, 0.00),
(11, 'JOBN4', '2025-02-12', 'Na.0549', 2081, '20km/hr', 'Scorpio', 'TATA', 'Silver', '09788767564534567', '1234567564', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'complete car washing', 'paint the walls of door', 'Rambabu Patel', 'Rohit Patel', '', 0.00, 0, 0.00, 0.00, 13.00, 0.00, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `labourcode`
--

DROP TABLE IF EXISTS `labourcode`;
CREATE TABLE IF NOT EXISTS `labourcode` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `labourID` varchar(30) NOT NULL,
  `labourCode` varchar(30) NOT NULL,
  `labourCharge` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `labourcode`
--

INSERT INTO `labourcode` (`ID`, `labourID`, `labourCode`, `labourCharge`, `status`) VALUES
(1, 'LAB1', 'Enginne', '800', 'Active'),
(2, 'LAB2', 'Enginne', '800', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `lubricantdetails`
--

DROP TABLE IF EXISTS `lubricantdetails`;
CREATE TABLE IF NOT EXISTS `lubricantdetails` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `lubricantID` varchar(30) NOT NULL,
  `lubricantType` varchar(100) NOT NULL,
  `lubricantCharge` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lubricantdetails`
--

INSERT INTO `lubricantdetails` (`ID`, `lubricantID`, `lubricantType`, `lubricantCharge`, `status`) VALUES
(1, 'LUB1', 'Engine Overhawl', '500', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `multiplejobselected`
--

DROP TABLE IF EXISTS `multiplejobselected`;
CREATE TABLE IF NOT EXISTS `multiplejobselected` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `selectedJobs` text NOT NULL,
  `jobid` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `multiplejobselected`
--

INSERT INTO `multiplejobselected` (`ID`, `selectedJobs`, `jobid`) VALUES
(2, 'car washing', 'JOBN4'),
(4, 'car washing, Paint car', 'JOBN5'),
(5, 'car washing, Paint car', 'JOBN5'),
(6, 'Repair door', 'JOBN5');

-- --------------------------------------------------------

--
-- Table structure for table `sparepartsdetails`
--

DROP TABLE IF EXISTS `sparepartsdetails`;
CREATE TABLE IF NOT EXISTS `sparepartsdetails` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `spareID` varchar(30) NOT NULL,
  `spareType` varchar(100) NOT NULL,
  `spareCharge` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sparepartsdetails`
--

INSERT INTO `sparepartsdetails` (`ID`, `spareID`, `spareType`, `spareCharge`, `status`) VALUES
(1, 'SAP1', 'Bander', '800', 'Active'),
(2, 'SAP2', 'Tander', '900', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_reports`
--

DROP TABLE IF EXISTS `vehicle_reports`;
CREATE TABLE IF NOT EXISTS `vehicle_reports` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
