-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 16, 2025 at 04:11 PM
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
-- Table structure for table `customs`
--

DROP TABLE IF EXISTS `customs`;
CREATE TABLE IF NOT EXISTS `customs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `jobNumber` varchar(30) NOT NULL,
  `category` enum('Lubricant','Labour','Dent/Paint','Spare Parts') NOT NULL DEFAULT 'Lubricant',
  `type_code` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `net_amount` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customs`
--

INSERT INTO `customs` (`id`, `jobNumber`, `category`, `type_code`, `price`, `discount`, `net_amount`, `created_at`) VALUES
(20, 'JOBN6', 'Dent/Paint', 'door car', 10000.00, 10.00, 0.00, '2025-03-16 16:04:38'),
(19, 'JOBN6', 'Labour', 'ac oil', 50000.00, 10.00, 0.00, '2025-03-16 16:04:38'),
(18, 'JOBN6', 'Labour', 'engine oil', 20000.00, 5.00, 0.00, '2025-03-16 16:04:38'),
(17, 'JOBN6', 'Labour', 'brake oil', 5000.00, 10.00, 0.00, '2025-03-16 16:04:38'),
(16, 'JOBN6', 'Lubricant', 'oiling', 50000.00, 5.00, 0.00, '2025-03-16 16:04:38'),
(15, 'JOBN6', 'Lubricant', 'engine', 50000.00, 5.00, 0.00, '2025-03-16 16:04:38'),
(14, 'JOBN6', 'Lubricant', 'oiling', 1000.00, 10.00, 0.00, '2025-03-16 16:04:38'),
(21, 'JOBN6', 'Dent/Paint', 'door vehicle', 50000.00, 10.00, 0.00, '2025-03-16 16:04:38'),
(22, 'JOBN6', 'Dent/Paint', 'oiling', 10000.00, 10.00, 0.00, '2025-03-16 16:04:38'),
(23, 'JOBN6', 'Spare Parts', 'A/C coolant', 10000.00, 50.00, 0.00, '2025-03-16 16:04:38'),
(24, 'JOBN6', 'Spare Parts', 'A/C coolant', 1000.00, 5.00, 0.00, '2025-03-16 16:04:38'),
(25, 'JOBN6', 'Spare Parts', 'D/C coolant', 50000.00, 50.00, 0.00, '2025-03-16 16:04:38');

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
-- Table structure for table `inspections`
--

DROP TABLE IF EXISTS `inspections`;
CREATE TABLE IF NOT EXISTS `inspections` (
  `id` int NOT NULL AUTO_INCREMENT,
  `component` varchar(255) NOT NULL,
  `status` enum('Okay','Not Okay') NOT NULL,
  `remarks` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `inspections`
--

INSERT INTO `inspections` (`id`, `component`, `status`, `remarks`, `created_at`) VALUES
(32, 'Engine Coolant', 'Not Okay', 'it is not okay', NULL),
(31, 'Engine Air Filter', 'Not Okay', 'no it is not okay', NULL),
(30, 'Engine Coolant', 'Not Okay', 'it is not okay', NULL),
(29, 'Engine Air Filter', 'Not Okay', 'no it is not okay', NULL),
(28, 'Engine Air Filter', 'Not Okay', 'no it is not okay', NULL),
(27, 'Engine Air Filter', 'Not Okay', 'no it is not okay', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobcard`
--

DROP TABLE IF EXISTS `jobcard`;
CREATE TABLE IF NOT EXISTS `jobcard` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `jobNumber` varchar(50) NOT NULL,
  `jobDate` varchar(50) NOT NULL,
  `registerNumber` varchar(50) NOT NULL,
  `year` int NOT NULL,
  `millage` varchar(20) NOT NULL,
  `dateTimeIn` varchar(30) NOT NULL,
  `dateTimeOut` varchar(30) NOT NULL,
  `vehicleBrand` varchar(100) NOT NULL,
  `vehicleModel` varchar(100) NOT NULL,
  `vehicleColour` varchar(50) NOT NULL,
  `engineNumber` varchar(50) NOT NULL,
  `purpose` varchar(250) NOT NULL,
  `fuelBatteryType` varchar(20) NOT NULL,
  `powerValue` int NOT NULL,
  `vinNumber` varchar(50) NOT NULL,
  `customerName` varchar(100) NOT NULL,
  `customerAddress` text,
  `contactNumber` varchar(10) NOT NULL,
  `contactPerson` varchar(100) NOT NULL,
  `personContactNumber` varchar(10) NOT NULL,
  `reportedDefects` text,
  `completedAction` text,
  `technicianName` varchar(100) NOT NULL DEFAULT 'Unknown',
  `supervisor` varchar(100) NOT NULL DEFAULT 'Unknown',
  `imageOfCar` varchar(225) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `jobcard`
--

INSERT INTO `jobcard` (`ID`, `jobNumber`, `jobDate`, `registerNumber`, `year`, `millage`, `dateTimeIn`, `dateTimeOut`, `vehicleBrand`, `vehicleModel`, `vehicleColour`, `engineNumber`, `purpose`, `fuelBatteryType`, `powerValue`, `vinNumber`, `customerName`, `customerAddress`, `contactNumber`, `contactPerson`, `personContactNumber`, `reportedDefects`, `completedAction`, `technicianName`, `supervisor`, `imageOfCar`) VALUES
(32, 'JOBN1', '2025-03-12', 'Na.0549', 2081, '20km/hr', '', '', 'Scorpio', 'TATA', 'Silver', '09788767564534567', 'General Checkup, Service', 'fuel', 30, '1234567564', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'Washing bucket of car', 'dnhghldjhvkajg', 'Rambabu Patel', 'Rohit Patel', ''),
(33, 'JOBN2', '2025-03-19', 'Na.0549', 2081, '20km/hr', '', '', 'Scorpio', 'TATA', 'Silver', '09788767564534567', 'Repeat Customer', 'fuel', 30, '1234567564', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'lheghwugou', 'wehgiuwguihuow', 'Rambabu Patel', 'Rohit Patel', ''),
(34, 'JOBN3', '2025-03-20', 'Na.0549', 2081, '20km/hr', '', '', 'Scorpio', 'TATA', 'Silver', '09788767564534567', 'General Checkup, Repeat Customer', 'fuel', 22, '1234567564', 'rohan', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'washing car', 'car washing', 'Rambabu Patel', 'Rohit Patel', 'carDocuments/carImages/67cfc8205bf48_marked_car_image (5).png'),
(35, 'JOBN4', '2025-02-27', 'Na.0549', 2081, '20km/hr', 'ssst', 'ssst', 'Scorpio', 'TATA', 'Silver', '09788767564534567', 'General Checkup, Repeat Customer', 'fuel', 30, '1234567564', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'washing car', 'washing car', 'Rambabu Patel', 'Rohit Patel', 'carDocuments/carImages/67d0162bbd0ea_marked_car_image (8).png'),
(36, 'JOBN5', '2025-03-05', 'Na.0549', 2081, '20km/hr', '2087', '2087', 'Scorpio', 'TATA', 'Silver', '09788767564534567', 'General Checkup, Service, Washing', 'fuel', 30, '1234567564', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'washing car', 'washing car', 'Rambabu Patel', 'Rohit Patel', 'carDocuments/carImages/67d6f2c814ce0_marked_car_image (9).png'),
(37, 'JOBN6', '2025-03-11', 'Na.0549', 2081, '20km/hr', '2087', '2087', 'Scorpio', 'TATA', 'Silver', '09788767564534567', 'General Checkup, Repeat Customer, Service', 'fuel', 30, '1234567564', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'washing car', 'washing car', 'Rambabu Patel', 'Rohit Patel', 'carDocuments/carImages/67d6f67f7e7f8_marked_car_image (10).png'),
(38, 'JOBN6', '2025-03-11', 'Na.0549', 2081, '20km/hr', '2087', '2087', 'Scorpio', 'TATA', 'Silver', '09788767564534567', 'General Checkup, Repeat Customer, Service', 'fuel', 30, '1234567564', 'Rohan Singh', 'Birgunj', '9820998994', 'Rohan Singh', '9820998994', 'washing car', 'washing car', 'Rambabu Patel', 'Rohit Patel', 'carDocuments/carImages/67d6f6967c3c6_marked_car_image (10).png');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `labourcode`
--

INSERT INTO `labourcode` (`ID`, `labourID`, `labourCode`, `labourCharge`, `status`) VALUES
(1, 'LAB1', 'Enginne', '800', 'Active'),
(2, 'LAB2', 'Enginne', '800', 'Inactive'),
(3, 'LAB3', 'Labourlead', '800', 'Active');

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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lubricantdetails`
--

INSERT INTO `lubricantdetails` (`ID`, `lubricantID`, `lubricantType`, `lubricantCharge`, `status`) VALUES
(1, 'LUB1', 'Engine Overhawl', '500', 'Active'),
(2, 'LUB2', 'Oily Overhawl', '1000', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `lubricants`
--

DROP TABLE IF EXISTS `lubricants`;
CREATE TABLE IF NOT EXISTS `lubricants` (
  `id` int NOT NULL AUTO_INCREMENT,
  `jobNumber` varchar(30) NOT NULL,
  `lubType` varchar(255) NOT NULL,
  `lubQuan` int NOT NULL,
  `lubPrice` decimal(10,2) DEFAULT NULL,
  `lubDis` decimal(5,2) DEFAULT NULL,
  `lubNet` decimal(10,2) DEFAULT NULL,
  `labourCode` varchar(255) DEFAULT NULL,
  `labourQuan` int DEFAULT NULL,
  `labourPrice` decimal(10,2) DEFAULT NULL,
  `labourDis` decimal(5,2) DEFAULT NULL,
  `labourNet` decimal(10,2) DEFAULT NULL,
  `dentType` varchar(255) DEFAULT NULL,
  `dentQuan` int DEFAULT NULL,
  `dentPrice` decimal(10,2) DEFAULT NULL,
  `dentDis` decimal(5,2) DEFAULT NULL,
  `dentNet` decimal(10,2) DEFAULT NULL,
  `spareType` varchar(255) DEFAULT NULL,
  `spareQuan` int DEFAULT NULL,
  `sparePrice` decimal(10,2) DEFAULT NULL,
  `spareDis` decimal(5,2) DEFAULT NULL,
  `spareNet` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lubricants`
--

INSERT INTO `lubricants` (`id`, `jobNumber`, `lubType`, `lubQuan`, `lubPrice`, `lubDis`, `lubNet`, `labourCode`, `labourQuan`, `labourPrice`, `labourDis`, `labourNet`, `dentType`, `dentQuan`, `dentPrice`, `dentDis`, `dentNet`, `spareType`, `spareQuan`, `sparePrice`, `spareDis`, `spareNet`) VALUES
(53, 'JOBN6', 'Engine Overhawl', 1, 500.00, 0.00, 500.00, 'Enginne', 1, 800.00, 0.00, 800.00, 'Door car', 1, 500.00, 0.00, 500.00, 'Bander', 1, 800.00, 0.00, 800.00),
(54, 'JOBN6', 'Oily Overhawl', 1, 1000.00, 0.00, 1000.00, 'Labourlead', 1, 800.00, 0.00, 800.00, 'Door Vehicle', 1, 400.00, 0.00, 400.00, 'Engine', 1, 900.00, 0.00, 900.00),
(55, 'JOBN6', 'Engine Overhawl', 1, 500.00, 0.00, 500.00, 'Enginne', 1, 800.00, 0.00, 800.00, 'Door car', 1, 500.00, 0.00, 500.00, 'Bander', 1, 800.00, 0.00, 800.00),
(56, 'JOBN6', 'Oily Overhawl', 1, 1000.00, 0.00, 1000.00, 'Labourlead', 1, 800.00, 0.00, 800.00, 'Door Vehicle', 1, 400.00, 0.00, 400.00, 'Engine', 1, 900.00, 0.00, 900.00);

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sparepartsdetails`
--

INSERT INTO `sparepartsdetails` (`ID`, `spareID`, `spareType`, `spareCharge`, `status`) VALUES
(1, 'SAP1', 'Bander', '800', 'Active'),
(2, 'SAP2', 'Tander', '900', 'Inactive'),
(3, 'SAP3', 'Engine', '900', 'Active'),
(4, 'SAP4', 'English', '500', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_status`
--

DROP TABLE IF EXISTS `vehicle_status`;
CREATE TABLE IF NOT EXISTS `vehicle_status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `component_name` varchar(255) NOT NULL,
  `status` enum('Okay','Not Okay') NOT NULL,
  `remarks` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
