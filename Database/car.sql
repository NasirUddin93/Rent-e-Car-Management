-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2017 at 04:12 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
