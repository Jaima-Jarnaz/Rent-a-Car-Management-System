-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2019 at 06:42 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

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
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `password`) VALUES
('mim', '123');

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
(11, 123, 7896, 'hire'),
(12, 369, 4563, 'hire'),
(13, 963, 4563, 'hire'),
(14, 753, 963, 'hire');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `CompanyCustomerName` varchar(30) NOT NULL,
  `CustomerId` int(30) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `CellNumber` int(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `CarRegistrationNo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`CompanyCustomerName`, `CustomerId`, `Address`, `CellNumber`, `Email`, `CarRegistrationNo`) VALUES
('GOLUMOLU', 2, 'kaliganj', 1978965203, 'golu@156', 13),
('Jaima', 3, 'mohammadpur', 1629828415, 'lima@gmail.com', 14);

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
('rahman mia', 199085467, 11, 963, 2711, 'roni mia', 'nazma begum', 1789565423, 'tongi', 110),
('kodu mia', 1715266203, 12, 963258, 2811, 'nazmul', 'lili begum', 745632158, 'uttora', 1110);

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

--
-- Dumping data for table `tb_local_trip`
--

INSERT INTO `tb_local_trip` (`TripType`, `DriverName`, `CarRegistrationNo`, `TripDate`, `ContactRate`, `Advance`, `StartPoint`, `EndPoint`) VALUES
('tytu', 'tyutyu', 6786, 79797, 789, 7979, 'khk', 'ggh');

-- --------------------------------------------------------

--
-- Table structure for table `tb_payment`
--

CREATE TABLE `tb_payment` (
  `PaymentDate` int(30) NOT NULL,
  `CustomerName` varchar(20) NOT NULL,
  `PaymentType` varchar(30) NOT NULL,
  `Amount` int(30) NOT NULL,
  `Description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_payment`
--

INSERT INTO `tb_payment` (`PaymentDate`, `CustomerName`, `PaymentType`, `Amount`, `Description`) VALUES
(1211, 'mim', 'bank', 2000, 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `tb_trip`
--

CREATE TABLE `tb_trip` (
  `TripType` varchar(30) NOT NULL,
  `DriverName` varchar(20) NOT NULL,
  `CarRegistrationNo` int(30) NOT NULL,
  `TripDate` varchar(30) NOT NULL,
  `ContactRate` int(30) NOT NULL,
  `Advance` int(20) NOT NULL,
  `StartPoint` varchar(20) NOT NULL,
  `EndPoint` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_trip`
--

INSERT INTO `tb_trip` (`TripType`, `DriverName`, `CarRegistrationNo`, `TripDate`, `ContactRate`, `Advance`, `StartPoint`, `EndPoint`) VALUES
('double', 'emran mia', 14, '28.11.2019', 2000, 1000, 'uttora', 'mohamadpur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
