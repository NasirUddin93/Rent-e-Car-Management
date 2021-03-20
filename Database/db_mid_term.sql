-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2017 at 04:14 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mid_term`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `car_Name` varchar(100) NOT NULL,
  `car_Model` varchar(30) NOT NULL,
  `permittedRoad` varchar(100) NOT NULL,
  `rent_Rate` int(20) NOT NULL,
  `late_Fine` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `car_Name`, `car_Model`, `permittedRoad`, `rent_Rate`, `late_Fine`) VALUES
(5007, 'BMW', 'i8', 'Gulsan', 3500, 1500),
(5008, 'Marcedes Benz', 'x99', 'Dhaka City', 3000, 1000),
(5009, 'Premier', 'MWi', 'Kishore gonj', 2500, 700),
(50010, 'TATA', 'NO76', 'Mirpur 10', 2200, 600),
(50011, 'TOYOTA', 'KH76', 'Karim gonj', 200, 500);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custonerName` varchar(100) NOT NULL,
  `customerAddress` varchar(100) NOT NULL,
  `customerContact` int(40) NOT NULL,
  `customerNID` int(40) NOT NULL,
  `car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custonerName`, `customerAddress`, `customerContact`, `customerNID`, `car_id`) VALUES
('Hasib Hasan', 'Mirpur 10', 1706568438, 9001002, 5007),
('Asaduz Zaman Mahfuj', 'Senanibas', 174648474, 9001003, 5009),
('Fayaj Zaman', 'Jatrabaree', 1956874653, 2147483647, 5008);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `tranID` int(11) NOT NULL,
  `customerNID` int(50) NOT NULL,
  `car_id` int(50) NOT NULL,
  `takingTime` time NOT NULL,
  `returnTime` time NOT NULL,
  `totalRent` int(30) NOT NULL,
  `totalFine` int(30) NOT NULL,
  `otherFine` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`tranID`, `customerNID`, `car_id`, `takingTime`, `returnTime`, `totalRent`, `totalFine`, `otherFine`) VALUES
(1, 67, 8, '03:30:00', '08:00:00', 6000, 2000, 1500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerNID`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`tranID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
