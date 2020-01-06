-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 09:11 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_car_bj`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_car`
--

CREATE TABLE `tb_car` (
  `CarRegistrationNo` int(30) NOT NULL,
  `ModelNo` int(20) NOT NULL,
  `EngineNo` int(30) NOT NULL,
  `OwnerShipHire` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_car`
--

INSERT INTO `tb_car` (`CarRegistrationNo`, `ModelNo`, `EngineNo`, `OwnerShipHire`) VALUES
(78, 963, 58, ''),
(78, 963, 58, ''),
(1, 2, 3, ''),
(1, 2, 3, ''),
(5, 8, 9, 'hire');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `CompanyCustomerName` varchar(30) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `CellNumber` int(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `CarRegistrationNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`CompanyCustomerName`, `Address`, `CellNumber`, `Email`, `CarRegistrationNo`) VALUES
('fhfgh', 'fhfh', 445, 'jgj', 4564);

-- --------------------------------------------------------

--
-- Table structure for table `tb_driver`
--

CREATE TABLE `tb_driver` (
  `DriverName` varchar(30) NOT NULL,
  `MobileNo` int(20) NOT NULL,
  `CarRegistrationNo` int(30) NOT NULL,
  `LicenseNumber` int(30) NOT NULL,
  `LicenseExpireDate` int(20) NOT NULL,
  `FatherName` varchar(30) NOT NULL,
  `MotherName` varchar(30) NOT NULL,
  `NID` int(30) NOT NULL,
  `PresentAddress` varchar(40) NOT NULL,
  `JoiningDate` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_driver`
--

INSERT INTO `tb_driver` (`DriverName`, `MobileNo`, `CarRegistrationNo`, `LicenseNumber`, `LicenseExpireDate`, `FatherName`, `MotherName`, `NID`, `PresentAddress`, `JoiningDate`) VALUES
('fjfg', 78, 78, 78, 877, 'fgfh', 'hfh', 45, 'jgjg', 7575);

-- --------------------------------------------------------

--
-- Table structure for table `tb_local_trip`
--

CREATE TABLE `tb_local_trip` (
  `TripType` varchar(30) NOT NULL,
  `DriverName` varchar(20) NOT NULL,
  `CarRegistrationNo` int(30) NOT NULL,
  `TripDate` int(30) NOT NULL,
  `ContactRate` int(30) NOT NULL,
  `Advance` int(20) NOT NULL,
  `StartPoint` varchar(20) NOT NULL,
  `EndPoint` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_trip`
--

CREATE TABLE `tb_trip` (
  `TripType` varchar(30) NOT NULL,
  `DriverName` varchar(20) NOT NULL,
  `CarRegistrationNo` int(30) NOT NULL,
  `TripDate` int(30) NOT NULL,
  `ContactRate` int(30) NOT NULL,
  `Advance` int(20) NOT NULL,
  `StartPoint` varchar(20) NOT NULL,
  `EndPoint` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_trip`
--

INSERT INTO `tb_trip` (`TripType`, `DriverName`, `CarRegistrationNo`, `TripDate`, `ContactRate`, `Advance`, `StartPoint`, `EndPoint`) VALUES
('', '', 0, 0, 0, 0, '', ''),
('fjfg', '78', 78, 78, 877, 0, 'hfh', '45'),
('', '', 0, 0, 0, 0, '', ''),
('', '', 0, 0, 0, 0, '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
